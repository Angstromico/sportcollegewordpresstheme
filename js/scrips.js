jQuery(document).ready($ => {
    $('.header .primary-menu .menu').slicknav({
        label: '',
        appendTo: 'header'
    });
});
//Fixed Header When Scrolling
window.onscroll = () => {
    const scrollY = window.scrollY;
    const headerNav = document.querySelector('.navigation-bar');
    const headerNavFront = document.querySelector('.navigation-bar-front');
    const body = document.querySelector('body');
    //Add Class When Scrolling
    if(scrollY > 300) {
        headerNav.classList.add('fixed-nav');
        headerNavFront.classList.add('fixed-nav-front');
        body.classList.add('fn-active');
    } else {
        headerNav.classList.remove('fixed-nav');
        headerNavFront.classList.remove('fixed-nav-front');
        body.classList.remove('fn-active');
    }
};
