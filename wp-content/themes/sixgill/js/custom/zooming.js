jQuery(function($) {

//if(device.desktop()) alert('ПК');
//if(device.tablet()) alert('Планшет');
//if(device.mobile()) alert('Смартфон');
////Ориентация экрана
//if(device.landscape()) alert('Альбомная (в ширину)');
//if(device.portrait()) alert('Портретная (в высоту)');
////ОС устройства
//if(device.ios()) alert('iOS');
//if(device.ipad()) alert('ipad');
//if(device.iphone()) alert('iphone');
//if(device.ipod()) alert('ipod');
//if(device.android()) alert('android');
//if(device.windows()) alert('windows');
//if(device.blackberry()) alert('blackberry');
//if(device.fxos()) alert('fxos');

    var zoom = document.documentElement.clientWidth / window.innerWidth;
    var timerId = setInterval(function() {
    var a = document.querySelector('#aside-blog');

    if(device.ipad()) {
        if(device.portrait()) {
            var zoomNew = document.documentElement.clientWidth / window.innerWidth;
            if (zoom != zoomNew) {
                a.style.display = 'none';
                console.log('ddf');
            }   
            else{
                a.style.display = 'block';

            }
        }
        else {
                a.style.display = 'block';

        }
    }
        
}, 1000);
    
});
