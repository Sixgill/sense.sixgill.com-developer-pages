jQuery(function($) {
    var a = document.querySelector('#aside-blog');
    var footer = $('#footer').height(); //footer element
    var subfooter = $("#subfooter").height();// black strip for the footer
    var heightIcon = $( '#aside-blog' ).height() + parseInt($('#aside-blog').css('margin-top'),10); //share button

    var scrollHeight = Math.max(
        document.body.scrollHeight, document.documentElement.scrollHeight,
        document.body.offsetHeight, document.documentElement.offsetHeight,
        document.body.clientHeight, document.documentElement.clientHeight
    ); //height page

    var heightWithoutFooter = scrollHeight - footer - subfooter;
    var сurrentScroll = window.pageYOffset || document.documentElement.scrollTop;

    $(document).scroll(function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if(heightWithoutFooter < scrollTop + heightIcon){
            console.log("Yes");
            a.style.position = 'absolute';
            a.style.top =  сurrentScroll +'px'
        }
        else {
         scrollTop = window.pageYOffset || document.documentElement.scrollTop;
         сurrentScroll = window.pageYOffset || document.documentElement.scrollTop;
         a.style.position = 'fixed';
         a.style.top =  'initial';
        }
    });
});
