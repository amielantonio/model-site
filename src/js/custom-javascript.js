// Add your JS customizations here
window.addEventListener( 'DOMContentLoaded', function() {
    console.log('starting custom javascript');
    logoAnimate();
    mainNavEvents();
});


const logoAnimate = () => {
    console.log('logo animate initiated')

    const $main = document.querySelector('.custom-logo-link');

    $main.addEventListener('mouseenter', () => {
        console.log('logo enter');
    });

    $main.addEventListener('mouseleave', () => {
        console.log('logo leave');
    });


}

/**
 * Main navigation event handler, add all custom events for the header here
 */
const mainNavEvents = () => {
    console.log('nav events initiated')
    
    // add the onscroll event under main nav events for the header
    window.onscroll = function() {
        headerScrollEvent();
    }
}

/**
 * Scroll events for the header to identify weather the user is scrolling up or down
 */
const headerScrollEvent = () => {

    const $body = document.querySelector('body');
    const $header = document.getElementById('main-nav');
    const _headerHeight = $header.offsetHeight
    const $navLinks = $header.querySelectorAll('.nav-link');

    if (document.body.scrollTop > _headerHeight || document.documentElement.scrollTop > _headerHeight) {

        if( $body.classList.contains('home')) {
            $header.classList.add('bg-cream');
            $navLinks.forEach( _link => _link.classList.add('text-primary'));
        }
    } else {

        if( $body.classList.contains('home') ) {
            $header.classList.remove('bg-cream');
            $navLinks.forEach( _link => _link.classList.remove('text-primary'));
        }
    }
}