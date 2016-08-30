<?php
/*
 * Plugin Name: TinyMCE Color Grid
 * Plugin URI: https://wordpress.org/plugins/kt-tinymce-color-grid
 * Description: Replaces the TinyMCE color picker with a bigger and customizeable color grid
 * Version: 1.6
 * Author: Anagarika Daniel
 * Author URI: http://profiles.wordpress.org/kungtiger
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kt-tinymce-color-grid
 */

if (!function_exists('add_action')) {
    ?><!DOCTYPE HTML>
    <html>
      <head>
        <meta charset="UTF-8" />
        <title>WordPress &rsaquo; Oops&hellip;</title>
        <style type="text/css">html{background: #F1F1F1}body{margin:50px auto 0;padding:.6em 1.8em;max-width:700px;background:#FFF;color:#444;font:14px"Open Sans",sans-serif;border:1px solid #E5E5E5}h1{margin:0;padding:.6em 0 .2em;font-size:21px;font-weight:400}p{margin:1.3em 0 1.2em;line-height:1.5}a{color:#21759B;text-decoration:none}a:hover{color:#D54E21}</style>
      </head>
      <body>
        <h1>Oops&hellip;</h1>
        <p>I'm just a plugin, not much I can do when called directly.</p>
        <p>Might be a good idea to have a look at <a href="../../../wp-admin/options-general.php?page=kt_tinymce_color_grid">Dashboard &rsaquo; Settings &rsaquo; TinyMCE Color Grid</a>.</p>
      </body>
    </html><?php
    exit;
}

if (!class_exists('kt_TinyMCE_Color_Grid')) {

    class kt_TinyMCE_Color_Grid {

        /**
         * Version number of plugin
         * @since 1.3
         * @var int
         */
        const VERSION = 16;

        /**
         * Base key of plugin
         * @since 1.4
         * @var string
         */
        const KEY = 'kt_tinymce_color_grid';

        /**
         * Option key for storing custom color useage
         * @since 1.4
         * @var string
         */
        const CUSTOM = 'kt_color_grid_custom';

        /**
         * Option key for custom colors
         * @since 1.4
         * @var string
         */
        const SETS = 'kt_color_grid_sets';

        /**
         * Option key for installed plugin version
         * @since 1.6
         * @var string
         */
        const INSTALLED_VERSION = 'kt_color_grid_version';

        /**
         * Internal hash seed for security nonce
         * @since 1.4
         * @var string
         */
        const NONCE = 'kt-tinymce-color-grid-save-editor';

        /**
         * Precompiled hexadecimal colors
         * @var array
         * @since 1.3
         */
        protected $colors = array(
            array('3F0000', '600', '8E0000', 'B70000', 'DB0000', 'F20000',
                'F00', 'FF3838', 'F66', 'FF9191', 'FFB5B5', 'FFD1D1', 'FFE5E5'),
            array('3F1D00', '662F00', '8E4300', 'B75600', 'DB6700', 'F27100',
                'F70', 'FF9538', 'FFAD66', 'FFC491', 'FFD7B5', 'FFE6D1', 'FFF1E5'),
            array('3F3600', '665600', '8E7900', 'B79C00', 'DBBA00', 'F2CD00',
                'FFD800', 'FFE138', 'FFE866', 'FFEE91', 'FFF3B5', 'FFF8D1', 'FFFBE5'),
            array('3F3F00', '660', '8E8E00', 'B7B700', 'DBDB00', 'F2F200',
                'FF0', 'FFFF38', 'FF6', 'FFFF91', 'FFFFB5', 'FFFFD1', 'FFFFE5'),
            array('363F00', '566600', '798E00', '9CB700', 'BADB00', 'CDF200',
                'D8FF00', 'E1FF38', 'E8FF66', 'EEFF91', 'F3FFB5', 'F8FFD1', 'FBFFE5'),
            array('1D3F00', '2F6600', '438E00', '56B700', '67DB00', '71F200',
                '7F0', '95FF38', 'ADFF66', 'C4FF91', 'D7FFB5', 'E6FFD1', 'F1FFE5'),
            array('003F00', '060', '008E00', '00B700', '00DB00', '00F200',
                '0F0', '38FF38', '6F6', '91FF91', 'B5FFB5', 'D1FFD1', 'E5FFE5'),
            array('003F1D', '00662F', '008E43', '00B756', '00DB67', '00F271',
                '0F7', '38FF95', '66FFAD', '91FFC4', 'B5FFD7', 'D1FFE6', 'E5FFF1'),
            array('003F2F', '00664C', '008E6B', '00B789', '00DBA4', '00F2B5',
                '00FFBF', '38FFCD', '66FFD8', '91FFE3', 'B5FFEC', 'D1FFF3', 'E5FFF8'),
            array('003F3F', '066', '008E8E', '00B7B7', '00DBDB', '00F2F2',
                '0FF', '38FFFF', '6FF', '91FFFF', 'B5FFFF', 'D1FFFF', 'E5FFFF'),
            array('00363F', '005666', '00798E', '009CB7', '00BADB', '00CDF2',
                '00D8FF', '38E1FF', '66E8FF', '91EEFF', 'B5F3FF', 'D1F8FF', 'E5FBFF'),
            array('001D3F', '002F66', '00438E', '0056B7', '0067DB', '0071F2',
                '0077FF', '3895FF', '66ADFF', '91C4FF', 'B5D7FF', 'D1E6FF', 'E5F1FF'),
            array('00003F', '006', '00008E', '0000B7', '0000DB', '0000F2',
                '00F', '3838FF', '66F', '9191FF', 'B5B5FF', 'D1D1FF', 'E5E5FF'),
            array('1D003F', '2F0066', '43008E', '5600B7', '6700DB', '7100F2',
                '70F', '9538FF', 'AD66FF', 'C491FF', 'D7B5FF', 'E6D1FF', 'F1E5FF'),
            array('36003F', '560066', '79008E', '9C00B7', 'BA00DB', 'CD00F2',
                'D800FF', 'E138FF', 'E866FF', 'EE91FF', 'F3B5FF', 'F8D1FF', 'FBE5FF'),
            array('3F003F', '606', '8E008E', 'B700B7', 'DB00DB', 'F200F2',
                'F0F', 'FF38FF', 'F6F', 'FF91FF', 'FFB5FF', 'FFD1FF', 'FFE5FF'),
            array('3F0036', '660056', '8E0079', 'B7009C', 'DB00BA', 'F200CD',
                'FF00D8', 'FF38E1', 'FF66E8', 'FF91EE', 'FFB5F3', 'FFD1F8', 'FFE5FB'),
            array('3F001D', '66002F', '8E0043', 'B70056', 'DB0067', 'F20071',
                'F07', 'FF3895', 'FF66AD', 'FF91C4', 'FFB5D7', 'FFD1E6', 'FFE5F1'),
            array('000', '171717', '2E2E2E', '454545', '5C5C5C', '737373',
                '8B8B8B', 'A2A2A2', 'BFBFBF', 'E2E2E2', 'F2F2F2', 'FFF'));

        /**
         * Holds a blueprint version of a color picker
         * @var string
         * @since 1.4.4
         */
        protected $picker;

        /**
         * Here we go ...
         *
         * Adds action and filter callbacks
         * @since 1.3
         */
        public function __construct() {
            add_action('plugins_loaded', array($this, 'translation'));
            add_action('admin_enqueue_scripts', array($this, 'scripts'));
            add_filter('tiny_mce_before_init', array($this, 'grid'));
            add_action('after_wp_tiny_mce', array($this, 'style'));
            add_action('admin_menu', array($this, 'menu'));
            add_filter('plugin_action_links', array($this, 'link'), 10, 2);
            $this->update();
        }

        /**
         * Update procedures
         * @since 1.6
         */
        protected function update() {
            $version = get_option(self::INSTALLED_VERSION, 0);
            if ($version == self::VERSION) {
                return;
            }
            while ($version != self::VERSION) {
                switch ($version) {
                    case 0:
                        $sets = get_option(self::SETS, array());
                        foreach ($sets as &$set) {
                            $set[0] = str_replace('#', '', $set[0]);
                        }
                        update_option(self::SETS, $sets);
                        $version = 16;
                        break;
                    default:
                        $version = self::VERSION;
                }
            }
            update_option(self::INSTALLED_VERSION, self::VERSION);
        }

        /**
         * Loads translation file
         * @since 1.4.4
         */
        public function translation() {
            load_plugin_textdomain('kt-tinymce-color-grid', false, dirname(plugin_basename(__FILE__)) . '/language');
        }

        /**
         * Enqueues JavaScript and CSS files
         * @since 1.3
         * @param string $hook Current page load hook
         */
        public function scripts($hook) {
            if ($hook == 'settings_page_' . self::KEY) {
                if (!defined('SCRIPT_DEBUG')) {
                    include(ABSPATH . WPINC . '/version.php');
                    $dev = strpos($wp_version, '-src') !== false;
                    $suffix = $dev ? '' : '.min';
                } else {
                    $suffix = SCRIPT_DEBUG ? '' : '.min';
                }
                wp_enqueue_script(self::KEY, plugins_url("settings$suffix.js", __FILE__), array('jquery-ui-position', 'jquery-ui-sortable'), self::VERSION);
                wp_enqueue_style(self::KEY, plugins_url('settings.css', __FILE__), array('farbtastic'), self::VERSION);
                $picker = preg_replace(array('/\s*\n\s*/', '/"/'), array('', "'"), $this->picker);
                wp_localize_script(self::KEY, 'kt_TinyMCE_color_picker', $picker);
            }
        }

        /**
         * Adds dynamic CSS file for TinyMCE
         * @since 1.3
         */
        public function style() {
            $n = 0;
            if (get_option(self::CUSTOM, false)) {
                $n = ceil(count(get_option(self::SETS, array())) / 13);
            }
            echo '<link rel="stylesheet" href="' . plugins_url('css.php', __FILE__) . "?n=$n&ver=" . self::VERSION . '" type="text/css" media="all" />';
        }

        /**
         * Adds entry for settings page to WordPress' admin menu
         * @since 1.3
         */
        public function menu() {
            $name = esc_html__('TinyMCE Color Grid', 'kt-tinymce-color-grid');
            $hook = add_options_page($name, $name, 'manage_options', self::KEY, array($this, 'editor'));
            add_action("load-$hook", array($this, 'init'));
        }

        /**
         * Adds a link to the plugin listing page leading to the settings page
         * @since 1.4
         * @param array $links Array holding HTML
         * @param string $file Current name of plugin file
         * @return array Modified array
         */
        public function link($links, $file) {
            if (plugin_basename($file) == plugin_basename(__FILE__)) {
                $links[] = '<a href="options-general.php?page=' . self::KEY . '&custom=1" class="dashicons-before dashicons-admin-settings" title="' . esc_attr__('Opens the settings page for this plugin', 'kt-tinymce-color-grid') . '"> ' . esc_html__('Custom Colors', 'kt-tinymce-color-grid') . '</a>';
            }
            return $links;
        }

        /**
         * Saving routines and adds help to settings page
         * @since 1.4.4
         */
        public function init() {
            if (wp_verify_nonce(self::request('kt_settings_nonce'), self::NONCE)) {
                update_option(self::CUSTOM, self::request('kt_custom', '0'));
                $colors = self::request('kt_colors', array());
                $names = self::request('kt_names', array());
                $sets = array();
                foreach ($names as $i => $name) {
                    $color = $this->sanitize($colors[$i]);
                    if ($color) {
                        $sets[] = array($color, sanitize_text_field(stripslashes($name)));
                    }
                }
                $match = null;
                $action = self::request('kt_action');
                if ($action == 'add') {
                    $sets[] = array('000000', '');
                } else if (preg_match('/remove-(\d+)/', $action, $match)) {
                    array_splice($sets, $match[1], 1);
                }
                update_option(self::SETS, $sets);
                wp_redirect($action == 'save' ? add_query_arg('updated', '1') : remove_query_arg('updated'));
                exit;
            }

            $screen = get_current_screen();
            $screen->add_help_tab(array(
                'id' => 'aria',
                'title' => __('Accessibility', 'kt-tinymce-color-grid'),
                'content' => '
<p>' . __('You can access every input field of the editor via your keyboard.', 'kt-tinymce-color-grid') . '</p>
<p>' . __('The editor consists of a toolbar and a list of entries. The toolbar has a button <b>Add</b> for adding a new entry to the list. An entry has a color picker, two text fields — one holding a hexadecimal representation of the color, and one for the name of the entry — and lastly a button to remove the entry.', 'kt-tinymce-color-grid') . '</p>
<p>' . __('If an entry itself is focused use <code>&uarr;</code> and <code>&darr;</code> to change the focus, and you can change its position among its siblings by pressing the page keys <code>Page Up</code> and <code>Page Down</code>. If you want to delete that entry press <code>DEL</code>', 'kt-tinymce-color-grid') . '</p>
<p>' . __('If a color picker has focus, use <code>&uarr;</code> and <code>&darr;</code> to change the lightness, <code>&larr;</code> and <code>&rarr;</code> to change the saturation, and <code>+</code> and <code>-</code> to change the hue. <code>ENTER</code> opens a visual color picker.', 'kt-tinymce-color-grid') . '</p>'
            ));
            $this->picker = '<div class="picker" tabindex="2" aria-grabbed="false">
            <button type="button" class="color button hide-if-no-js" tabindex="3" aria-haspopup="true" aria-controls="kt_picker" aria-describedby="contextual-help-link" aria-label="' . esc_attr__('Color Picker', 'kt-tinymce-color-grid') . '">
              <span class="preview" style="background-color:%1$s"></span>
            </button>
            <input class="hex" type="text" name="kt_colors[]" tabindex="3" value="%1$s" maxlength="7" placeholder="#RRGGBB" autocomplete="off" aria-label="' . esc_attr__('Hexadecimal Color', 'kt-tinymce-color-grid') . '" />
            <input class="name" type="text" name="kt_names[]" value="%2$s" tabindex="3" placeholder="' . esc_html__('Unnamed Color', 'kt-tinymce-color-grid') . '" aria-label="' . esc_attr__('Name of Color', 'kt-tinymce-color-grid') . '" />
            <button type="submit" name="kt_action" value="remove-%3$s" tabindex="3" class="remove button">
              <i class="dashicons dashicons-trash"></i>
              <span class="screen-reader-text">' . esc_html__('Delete') . '</span>
            </button>
          </div>';
        }

        /**
         * Highlights an accesskey inside a translated string
         * @since 1.4.4
         * @param string $translation Translated string
         * @param string $key Accesskey
         * @return string
         */
        protected function accesskey($translation, $key) {
            return preg_replace('/(' . preg_quote($key, '/') . ')/i', '<u>$1</u>', esc_html($translation), 1);
        }

        /**
         * Renders settings page
         * @since 1.3
         * @global string $wp_version
         */
        public function editor() {
            global $wp_version;
            $version = 0;
            preg_match('/^(\d+\.\d+)/', $wp_version, $version);
            $head = floatval($version[1]) >= 4.3 ? 'h1' : 'h2';
            $use_custom = self::request('custom', get_option(self::CUSTOM, false));
            $custom_key = _x('C', 'accesskey for custom colors', 'kt-tinymce-color-grid');
            $add_key = _x('A', 'accesskey for adding color', 'kt-tinymce-color-grid');
            $save_key = _x('S', 'accesskey for saving', 'kt-tinymce-color-grid');

            $picker = '';
            $sets = get_option(self::SETS, array());
            foreach ($sets as $i => $set) {
                list($color, $name) = array_map('esc_attr', $set);
                $picker .= sprintf($this->picker, "#$color", $name, $i);
            }

            vprintf('
<div id="kt_tinymce_color_grid" class="wrap">
  <%s>%s › %s</%s>
  <div class="notice notice-warning hide-if-js"><p><strong>%s</strong></p></div>
  <form action="options-general.php?page=%s" method="post">%s
    <table class="form-table">
      <thead>
        <tr><th>
          <input type="checkbox" id="kt_custom" name="kt_custom" tabindex="9" value="1"%s aria-haspopup="true" aria-controls="kt_editor" accesskey="%s" />
          <label for="kt_custom">%s</label>
        </th></tr>
      </thead>
      <tbody id="kt_editor" aria-hidden="%s">
        <tr><td id="kt_toolbar" role="toolbar" aria-label="%s">
          <button id="kt_add" type="submit" tabindex="8" name="kt_action" value="add" class="button" aria-controls="colors" accesskey="%s">%s</button>
        </td></tr>
        <tr><td id="kt_colors" data-empty="%s">%s</td></tr>
      </tbody>
    </table>
    <p class="submit"><button type="submit" id="kt_save" name="kt_action" value="save" tabindex="9" class="button button-primary" accesskey="%s">%s</button></p>
  </form>
  <div id="kt_picker" aria-hidden="true" aria-label="%s"></div>
</div>
', array(
                $head,
                esc_html__('Settings'),
                esc_html__('TinyMCE Color Grid', 'kt-tinymce-color-grid'),
                $head,
                esc_html__('This editor works best with JavaScript enabled.', 'kt-tinymce-color-grid'),
                self::KEY,
                wp_nonce_field(self::NONCE, 'kt_settings_nonce', false, false),
                $use_custom ? ' checked="checked"' : '',
                esc_attr($custom_key),
                $this->accesskey(__("I'd like to define some custom colors", 'kt-tinymce-color-grid'), $custom_key),
                $use_custom ? 'false' : 'true',
                esc_attr__('Color Editor Toolbar', 'kt-tinymce-color-grid'),
                esc_attr($add_key),
                $this->accesskey(__('Add'), $add_key),
                esc_attr__('No colors yet', 'kt-tinymce-color-grid'),
                $picker,
                esc_attr($save_key),
                $this->accesskey(__('Save'), $save_key),
                esc_attr__('Visual Color Picker', 'kt-tinymce-color-grid')
            ));
        }

        /**
         * Checks a string for a valid hexadecimal color and normalizes it to RRGGBB
         * @since 1.4
         * @param string $string String to be checked
         * @return string|boolean Returns a color of RRGGBB or false on failure
         */
        protected function sanitize($string) {
            $string = strtoupper($string);
            $match = null;
            if (preg_match('/([0-9A-F]{6}|[0-9A-F]{3})/', $string, $match)) {
                if (strlen($match[1]) == 3) {
                    return preg_replace('/[0-9A-F]/', '\1\1', $match[1]);
                }
                return $match[1];
            }
            return false;
        }

        /**
         * Renders the new color grid
         * @since 1.3
         * @param array $init Wordpress' TinyMCE inits
         * @return array
         */
        public function grid($init) {
            $rows = 13;
            $columns = 19;
            $extra = 0;
            if (get_option(self::CUSTOM, false)) {
                $custom_colors = get_option(self::SETS, array());
                $custom_colors = array_chunk($custom_colors, $rows);
                $extra = ceil(count($custom_colors) / $rows);
                if ($extra) {
                    $last_column = $extra - 1;
                    $custom_colors[$last_column] = array_pad($custom_colors[$last_column], $rows, array('FFFFFF', ''));
                }
            }
            $map = array();
            for ($row = 0; $row < $rows; $row++) {
                for ($column = 0; $column < $extra; $column++) {
                    list($color, $name) = $custom_colors[$column][$row];
                    $map[] = '"' . $color . '","' . esc_js($name) . '"';
                }
                for ($column = 0; $column < $columns; $column++) {
                    if ($row == $rows - 1 && $column == $columns - 1) {
                        break;
                    }
                    $map[] = '"' . $this->colors[$column][$row] . '",""';
                }
            }
            $init['textcolor_map'] = '[' . implode(',', $map) . ']';
            $init['textcolor_cols'] = $columns + $extra;
            $init['textcolor_rows'] = $rows;
            return $init;
        }

        /**
         * Fetches a HTTP request value
         * @since 1.3
         * @param string $key Name of the value to fetch
         * @param mixed|null $default Default value if $key does not exist
         * @return mixed The value for $key or $default
         */
        static function request($key, $default = null) {
            return key_exists($key, $_REQUEST) ? $_REQUEST[$key] : $default;
        }

    }

}

new kt_TinyMCE_Color_Grid();
