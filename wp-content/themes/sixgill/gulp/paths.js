/**
 *
 */
exports.path = {
    base: {
        wrapper: null,
        values: [
            "./css/custom/fonts.css",
            "./css/bootstrap.min.css",
            "./css/owl.carousel.css",
            "./css/owl.theme.css",
            "./css/owl.transition.css",
            "./style.css",
            "./css/swiper.css",
            "./css/font-icons.css",
            "./css/animate.css",
            "./css/magnific-popup.css",
            "./css/responsive.css",
            "./css/jquery.fullpage.min.css",
            "./css/colors.css",
            "./css/custom.css",
        ]
    },
    all: {
        wrapper: null,
        values: [
            "./css/custom/all_general.css",
            "./css/custom/all_menu.css",
            "./css/custom/all_footer.css",
            "./css/custom/all_blog.css",
            "./css/custom/all_company.css",
            "./css/custom/all_home.css",
            "./css/custom/all_solutions.css",
            "./css/custom/all_resources.css",
            "./css/custom/all_tech.css",
            "./css/custom/all_press.css",
            "./css/custom/all_legal.css",
            "./css/custom/all_products.css",
        ]
    },
    desktop: {
        wrapper: "@media only screen and (min-width: 1201px) {",
        values: [
            "./css/custom/desktop_general.css",
            "./css/custom/desktop_menu.css",
            "./css/custom/desktop_footer.css",
            "./css/custom/desktop_blog.css",
            "./css/custom/desktop_company.css",
            "./css/custom/desktop_home.css",
            "./css/custom/desktop_solutions.css",
            "./css/custom/desktop_resources.css",
            "./css/custom/desktop_tech.css",
            "./css/custom/desktop_press.css",
            "./css/custom/desktop_legal.css",
            "./css/custom/desktop_products.css",
        ]
    },
    tablet: {
        wrapper: "@media (min-width: 500px) and (max-width: 1200px) and (max-aspect-ratio: 4/3), (min-width: 1001px)" +
        " and (max-width: 1200px) {",
        values: [
            "./css/custom/tablet_general.css",
            "./css/custom/tablet_menu.css",
            "./css/custom/tablet_footer.css",
            "./css/custom/tablet_blog.css",
            "./css/custom/tablet_company.css",
            "./css/custom/tablet_home.css",
            "./css/custom/tablet_solutions.css",
            "./css/custom/tablet_resources.css",
            "./css/custom/tablet_tech.css",
            "./css/custom/tablet_press.css",
            "./css/custom/tablet_legal.css",
            "./css/custom/tablet_products.css",
        ]
    },
    mobile_portrait: {
        wrapper: "@media (max-width: 500px) and (max-aspect-ratio: 4/3) {",
        values: [
            "./css/custom/mobile_portrait_general.css",
            "./css/custom/mobile_portrait_menu.css",
            "./css/custom/mobile_portrait_footer.css",
            "./css/custom/mobile_portrait_blog.css",
            "./css/custom/mobile_portrait_company.css",
            "./css/custom/mobile_portrait_home.css",
            "./css/custom/mobile_portrait_solutions.css",
            "./css/custom/mobile_portrait_resources.css",
            "./css/custom/mobile_portrait_tech.css",
            "./css/custom/mobile_portrait_press.css",
            "./css/custom/mobile_portrait_legal.css",
            "./css/custom/mobile_portrait_products.css",
        ]
    },
    mobile_landscape: {
        wrapper: "@media (max-width: 1000px) and (min-aspect-ratio: 4/3) {",
        values: [
            "./css/custom/mobile_landscape_general.css",
            "./css/custom/mobile_landscape_menu.css",
            "./css/custom/mobile_landscape_footer.css",
            "./css/custom/mobile_landscape_blog.css",
            "./css/custom/mobile_landscape_company.css",
            "./css/custom/mobile_landscape_home.css",
            "./css/custom/mobile_landscape_solutions.css",
            "./css/custom/mobile_landscape_resources.css",
            "./css/custom/mobile_landscape_tech.css",
            "./css/custom/mobile_landscape_press.css",
            "./css/custom/mobile_landscape_legal.css",
            "./css/custom/mobile_landscape_products.css",
        ]
    },
    mobile_portrait_landscape: {
        wrapper: "@media (max-width: 1000px) and (min-aspect-ratio: 4/3), (max-width: 500px) and " +
        "(max-aspect-ratio: 4/3) {",
        values: [
            "./css/custom/mobile_portrait_landscape_general.css",
            "./css/custom/mobile_portrait_landscape_menu.css",
            "./css/custom/mobile_portrait_landscape_footer.css",
            "./css/custom/mobile_portrait_landscape_blog.css",
            "./css/custom/mobile_portrait_landscape_company.css",
            "./css/custom/mobile_portrait_landscape_home.css",
            "./css/custom/mobile_portrait_landscape_solutions.css",
            "./css/custom/mobile_portrait_landscape_resources.css",
            "./css/custom/mobile_portrait_landscape_tech.css",
            "./css/custom/mobile_portrait_landscape_press.css",
            "./css/custom/mobile_portrait_landscape_legal.css",
            "./css/custom/mobile_portrait_landscape_products.css",
        ]
    },
    tablet_and_mobile: {
        wrapper: "@media (max-width: 1200px) {",
        values: [
            "./css/custom/tablet_and_mobile.css",
        ]
    },
    tail_styles: {
        wrapper: null,
        values: [
            "./css/custom/custom_resolutions.css",
            "./css/custom/atomic.css",
        ]
    },
    builds: {
        wrapper: null,
        values: [
            './build/base.css',
            './build/all.css',
            './build/desktop.css',
            './build/tablet.css',
            './build/mobile_portrait.css',
            './build/mobile_landscape.css',
            './build/mobile_portrait_landscape.css',
            './build/tablet_and_mobile.css',
            './build/tail_styles.css',
        ]
    },
    // Add new exports
    // all: {
    //     wrapper: null,
    //     values: [
    //
    //     ]
    // },
}
