const $ = window.jQuery;
const $window = window.$window || $(window);

const Header = {

    init() {
        var $module = $('.header');
        if (!$module.length)
            return;

        Header.navbarOpen()
    },

    navbarOpen: ()=>{
        const $burger = $('.hamburger');

        $burger.on('click', () => {
            document.body.classList.toggle('navbar-active');
        });
    }

};

export default Header;