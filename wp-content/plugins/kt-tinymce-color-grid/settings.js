/*
 * kt_Color
 * Simple Color Class for RGB, HEX and HSL conversion
 */
(function () {
    var SHIFT = /\s*[+-]\d*\.?\d+/,
    round = function (x, p) {
        var e = Math.pow(10, parseInt(p) || 0);
        return Math.round(x * e) / e;
    },
    limit = function (min, x, max) {
        return Math.max(min, Math.min(x, max));
    },
    hex2dec = function (color) {
        color._dec = parseInt(color._hex.substr(1), 16);
    },
    dec2hex = function (color) {
        var hex = color._dec.toString(16);
        color._hex = '#000000'.substr(0, 7 - hex.length) + hex.toUpperCase();
    },
    dec2rgb = function (color) {
        color._rgb = [color._dec >> 16, (color._dec >> 8) & 0xFF, color._dec & 0xFF];
    },
    rgb2dec = function (color) {
        color._dec = color._rgb[0] << 16 | (color._rgb[1] << 8) & 0xFFFF | color._rgb[2];
    },
    rgb2hsl = function (color) {
        var r = color._rgb[0] / 255, g = color._rgb[1] / 255, b = color._rgb[2] / 255,
        min = Math.min(r, Math.min(g, b)),
        max = Math.max(r, Math.max(g, b)),
        e = max + min,
        d = max - min,
        l = e / 2,
        s = l > 0 && l < 1 ? d / (l < .5 ? e : (2 - e)) : 0,
        h = d > 0 ? max == r ? (g - b) / d + (g < b ? 6 : 0) : max == g ? (b - r) / d + 2 : max == b ? (r - g) / d + 4 : 0 : 0;
        color._hsl = [round(h * 60, 2), round(s * 100, 2), round(l * 100, 2)];
    },
    hue2rgb = function (p, q, h) {
        h += h < 0 ? 1 : (h > 1 ? -1 : 0);
        return round((h * 6 < 1 ? p + (q - p) * h * 6 : h * 2 < 1 ? q : h * 3 < 2 ? p + (q - p) * (2 / 3 - h) * 6 : p) * 255, 2);
    },
    hsl2rgb = function (color) {
        var h = color._hsl[0] / 360, s = color._hsl[1] / 100, l = color._hsl[2] / 100;
        if (s == 0) {
            l = round(l * 255);
            color._rgb = [l, l, l];
        } else {
            var q = l < .5 ? l * (1 + s) : l + s - l * s, p = 2 * l - q;
            color._rgb = [hue2rgb(p, q, h + 1 / 3), hue2rgb(p, q, h), hue2rgb(p, q, h - 1 / 3)];
        }
    },
    validate = function (prop, x) {
        if (x === undefined || x === null) {
            return false;
        }
        switch (prop) {
            case 'rgb':
                return limit(0, parseInt(x), 255);
            case 'h':
                return ((parseFloat(x) % 360) + 360) % 360;
            case 'sl':
                return limit(0, parseFloat(x), 100);
            case 'hex':
                var hex = x.match(/#([0-9a-f]{6}|[0-9a-f]{3})/i);
                if (hex) {
                    hex = hex[1].toUpperCase();
                    if (hex.length == 3) {
                        hex = hex.replace(/([0-9A-F])/g, '$1$1');
                    }
                    return '#' + hex;
                }
        }
        return false;
    },
    update = function (color, type) {
        switch (type) {
            case 'rgb':
                rgb2dec(color);
                dec2hex(color);
                rgb2hsl(color);
                break;
            case 'hsl':
                hsl2rgb(color);
                rgb2dec(color);
                dec2hex(color);
                break;
            case 'hex':
                hex2dec(color);
                dec2rgb(color);
                rgb2hsl(color);
                break;
        }
        if (color._fn) {
            color._fn.call(color);
        }
    },
    rgb = ['red', 'green', 'blue'],
    hsl = ['hue', 'saturation', 'lightness'],
    kt_Color = function (x, fn) {
        this._rgb = [0, 0, 0];
        this._hsl = [0, 0, 0];
        this._hex = '#000000';
        this._dec = 0;
        this._fn = fn;
        this.hex(x);
    };
    kt_Color.prototype.rgb = function (rgb) {
        if (rgb == undefined || rgb == null) {
            return this._rgb;
        }
        var r = validate('rgb', rgb[0]), g = validate('rgb', rgb[1]), b = validate('rgb', rgb[2]);
        if (r === false || g === false || b === false) {
            return this;
        }
        if (this._rgb[0] != r || this._rgb[1] != g || this._rgb[2] != b) {
            this._rgb = [r, g, b];
            update(this, 'rgb');
        }
        return this;
    };
    kt_Color.prototype.hsl = function (hsl) {
        if (hsl == undefined || hsl == null) {
            return this._hsl;
        }
        var h = validate('h', hsl[0]), s = validate('sl', hsl[1]), l = validate('sl', hsl[2]);
        if (h === false || s === false || l === false) {
            return this;
        }
        if (this._hsl[0] != h || this._hsl[1] != s || this._hsl[2] != l) {
            this._hsl = [h, s, l];
            update(this, 'hsl');
        }
        return this;
    };
    kt_Color.prototype.hex = function (hex) {
        if (hex == undefined || hex == null) {
            return this._hex;
        }
        var x = validate('hex', hex);
        if (x && this._hex != x) {
            this._hex = x;
            update(this, 'hex');
        }
        return this;
    };
    for (var i = 0; i < 3; i++) {
        kt_Color.prototype[rgb[i]] = (function (i) {
            return function (x) {
                if (x === undefined || x === null) {
                    return this._rgb[i];
                }
                var value = x;
                if (typeof x == 'string' && x.match(SHIFT)) {
                    value = this._rgb[i] + parseInt(x);
                }
                value = validate('rgb', value);
                if (value !== false && value != this._rgb[i]) {
                    this._rgb[i] = value;
                    update(this, 'rgb');
                }
                return this;
            };
        })(i);
        kt_Color.prototype[hsl[i]] = (function (i) {
            return function (x) {
                if (x === undefined || x === null) {
                    return this._hsl[i];
                }
                var value = x;
                if (typeof x == 'string' && x.match(SHIFT)) {
                    value = this._hsl[i] + parseFloat(x);
                }
                value = validate(i == 0 ? 'h' : 'sl', value);
                if (value !== false && this._hsl[i] != value) {
                    this._hsl[i] = value;
                    update(this, 'hsl');
                }
                return this;
            };
        })(i);
    }
    kt_Color.prototype.fn = function () {
        if (this._fn) {
            return this._fn.apply(this, arguments);
        }
        return this;
    };
    kt_Color.prototype.toString = function () {
        return this._hex;
    };
    window.kt_Color = kt_Color;
})();


/*
 * kt_Color_Picker
 */
(function ($) {
    var html = '<div class="farbtastic"><div class="color"/><div class="wheel"/><div class="overlay"/><div class="h-marker marker"/><div class="sl-marker marker"/></div>',
    radius = 84, square = 100, shift = 97, dragging = false,
    fixAlpha = function () {
        var image = this.currentStyle.backgroundImage;
        if (image != 'none') {
            $(this).css({
                backgroundImage: 'none',
                filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=crop,src='" + image.substring(5, image.length - 2) + "')"
            });
        }
    },
    kt_Color_Picker = function (container, fn) {
        var $container = $(container).html(html),
        $document = $(document),
        $picker = $container.children(),
        $wheel = $picker.children('.wheel'),
        $hue = $picker.children('.h-marker'),
        $sl = $picker.children('.sl-marker'),
        $color = $picker.children('.color'),
        circle = false,
        color = new kt_Color('#000000', function () {
            var angle = this._hsl[0] * 6.28 / 360;
            $hue.css({
                left: Math.round(Math.sin(angle) * radius) + shift,
                top: Math.round(-Math.cos(angle) * radius) + shift
            });
            $sl.css({
                left: shift - Math.round(square * (this._hsl[1] / 100 - .5)),
                top: shift - Math.round(square * (this._hsl[2] / 100 - .5))
            });
            $color.css('backgroundColor', background.hue(color._hsl[0]).hex());
            if (fn) {
                fn.call(this);
            }
        }),
        background = new kt_Color('#FF0000'),
        coords = function (e) {
            var offset = $wheel.offset();
            return {
                x: (e.pageX - offset.left) - shift,
                y: (e.pageY - offset.top) - shift
            };
        },
        mousedown = function (e) {
            if (e.which != 1) {
                return false;
            }
            if (!dragging) {
                $document.on(mouse);
                dragging = true;
            }
            var pos = coords(e);
            circle = Math.max(Math.abs(pos.x), Math.abs(pos.y)) * 2 > square;
            mousemove(e);
            return false;
        },
        mousemove = function (e) {
            var pos = coords(e);
            color.hsl(circle ? [Math.atan2(pos.x, -pos.y) * 360 / 6.28, color._hsl[1], color._hsl[2]] : [color._hsl[0], -100 * (pos.x / square) + 50, -100 * (pos.y / square) + 50]);
        },
        mouseup = function () {
            $document.off(mouse);
            dragging = false;
        },
        mouse = {mousemove: mousemove, mouseup: mouseup};
        if (String(navigator.appVersion).match(/MSIE [0-6]\./)) {
            $picker.children().each(fixAlpha);
        }
        $picker.on('mousedown', mousedown);
        return color;
    };
    window.kt_Color_Picker = kt_Color_Picker;
})(jQuery);


/*
 * Color Editor
 */
(function ($, Picker) {
    $(function () {
        var $document = $(document),
        $Editor = $('#kt_editor'),
        $Colors = $('#kt_colors'),
        $Prototype = $(Picker.replace(/%1\$s/g, '#000000').replace(/%2\$s/g, '').replace(/%3\$s/g, 'x')),
        $Picker = $('#kt_picker'),
        $color = null, $focus = $(),
        color = kt_Color_Picker($Picker, function () {
            if ($color) {
                var hex = this.hex();
                $color.siblings('.hex').val(hex);
                $color.children('.preview').css('backgroundColor', hex);
            }
        }),
        sanitizeHex = function (x) {
            var m = String(x).toUpperCase().match(/([0-9A-F]{6}|[0-9A-F]{3})/);
            if (m) {
                if (m[1].length == 3) {
                    return '#' + m[1].replace(/([0-9A-F])/g, '$1$1');
                }
                return '#' + m[1];
            }
            return false;
        },
        pickerIsHidden = function () {
            return $Picker.attr('aria-hidden') == 'true';
        },
        hidePicker = function () {
            $Picker.attr('aria-hidden', 'true');
            $document.off('mousedown', autoHide);
        },
        autoHide = function (e) {
            if (!$(e.target).closest($color).length) {
                hidePicker();
            }
        },
        togglePicker = function (e) {
            if (e.which == 1) {
                if (pickerIsHidden()) {
                    $document.on('mousedown', autoHide);
                    $color = $(this);
                    $Picker.attr('aria-hidden', 'false').position({
                        of: $color,
                        at: 'left bottom',
                        my: 'left top-2px'
                    });
                } else {
                    hidePicker();
                }
            }
        },
        updateColor = function () {
            var $hex = $(this),
            hex = sanitizeHex($hex.val());
            if (hex) {
                $hex.val(hex).parent().find('.preview').css('backgroundColor', hex);
            }
        },
        initSort = function (e) {
            if ($(e.target).is('.picker')) {
                if (e.type == 'focusin') {
                    $focus = $(this).attr('aria-grabbed', 'true').on('keydown', doSort);
                } else {
                    $focus.attr('aria-grabbed', 'false').off('keydown', doSort);
                }
            }
        },
        sortUp = function () {
            if ($focus.prev().length) {
                $focus.after($focus.prev());
                return false;
            }
        },
        sortDown = function () {
            if ($focus.next().length) {
                $focus.before($focus.next());
                return false;
            }
        },
        focusNext = function () {
            if ($focus.next().length) {
                $focus = $focus.next().trigger('focus');
                return false;
            }
        },
        focusPrev = function () {
            if ($focus.prev().length) {
                $focus = $focus.prev().trigger('focus');
                return false;
            }
        },
        doSort = function (e) {
            switch (e.which) {
                case 33:
                    return sortUp();
                case 34:
                    return sortDown();
            }
            if (ctrlPressed(e)) {
                switch (e.which) {
                    case 37:
                    case 38:
                        return sortUp();
                    case 39:
                    case 40:
                        return sortDown();
                }
            }
            switch (e.which) {
                case 13:
                    $focus.children('.color').trigger('focus');
                    return false;
                case 37:
                case 38: // up
                    return focusPrev();
                case 39:
                case 40: // down
                    return focusNext();
                case 35: // END
                    $focus.appendTo($Colors).trigger('focus');
                    return false;
                case 36: // HOME
                    $focus.prependTo($Colors).trigger('focus');
                    return false;
                case 46: // DEL
                    removePicker();
                    break;
                case 27:  // ESC
                    $focus.trigger('blur');
                    break;
            }
        },
        removePicker = function () {
            var $neighbour = $focus.next();
            if (!$neighbour.length) {
                $neighbour = $focus.prev();
            }
            $focus.remove();
            $neighbour.trigger('focus');
        },
        initAdjustHSL = function (e) {
            if (e.type == 'focusin') {
                $color = $(this).on('keydown', adjustHSL);
                color.hex($color.siblings('.hex').val()).fn();
            } else {
                hidePicker();
                $color.off('keydown', adjustHSL);
                $color = null;
            }
        },
        adjustHSL = function (e) {
            var x = ctrlPressed(e) ? 5 : 2.5,
            inc = '+' + x, dec = '-' + x;
            switch (e.which) {
                case 109:
                case 189: // minus
                    color.hue(dec);
                    return false;
                case 107:
                case 187: // plus
                    color.hue(inc);
                    return false;
                case 38:  // up
                    color.lightness(inc);
                    return false;
                case 40:  // down
                    color.lightness(dec);
                    return false;
                case 37:  // left
                    color.saturation(inc);
                    return false;
                case 39:  // right
                    color.saturation(dec);
                    return false;
                case 27:  // ESC
                    return esc($color);
            }
        },
        esc = function ($target) {
            if (pickerIsHidden()) {
                $target.parent().trigger('focus');
            } else {
                hidePicker();
            }
            return false;
        },
        autoRevert = function (e) {
            if (e.type == 'focusin') {
                var $hex = $(this);
                if (sanitizeHex(this.value)) {
                    $hex.data('lastValue', this.value);
                }
                var autoFill = $hex.data('autoFill');
                if (autoFill) {
                    clearTimeout(autoFill);
                    $hex.removeData('autoFill');
                }
            } else if (!sanitizeHex(this.value)) {
                hidePicker();
                var $hex = $(this);
                $hex.data('autoFill', setTimeout(function () {
                    $hex.val($hex.data('lastValue'));
                    $hex.addClass('revert');
                    setTimeout(function () {
                        $hex.removeClass('revert');
                    }, 500);
                }, 5000));
            }
        },
        focusParent = function (e) {
            switch (e.which) {
                case 27:
                    $(this).parent().trigger('focus');
                    break;
                case 13:
                    e.preventDefault();
                    break;
            }
        },
        ctrlPressed = function (e) {
            return e.ctrlKey || e.shiftKey || e.metaKey;
        };

        $('#kt_custom').on('change', function () {
            $Editor.attr('aria-hidden', this.checked ? 'false' : 'true');
        });
        $('#kt_add').on('click', function (e) {
            var $New = $Prototype.clone();
            $New.appendTo($Colors);
            $New.children('.hex').prop({
                selectionStart: 1,
                selectionEnd: 7
            }).trigger('focus');
            e.preventDefault();
        });
        $Colors.on('click', '.remove', function (e) {
            $focus = $(this).parent();
            removePicker();
            e.preventDefault();
        })
        .on('mousedown', '.picker', function (e) {
            if ($(e.target).is('.picker')) {
                $(this).trigger('focus');
            }
        })
        .on('focus blur', '.picker', initSort)
        .on('click', '.color', togglePicker)
        .on('focus blur', '.color', initAdjustHSL)
        .on('change', '.hex', updateColor)
        .on('focus blur', '.hex', autoRevert)
        .on('keydown', 'input', focusParent)
        .sortable({
            placeholder: 'picker-placeholder',
            items: '.picker',
            delay: $(document.body).hasClass('mobile') ? 200 : 0,
            distance: 2,
            revert: 130,
            stop: function (e, a) {
                a.item.css('zIndex', '').trigger('focus');
            }
        });
    });
})(jQuery, kt_TinyMCE_color_picker);