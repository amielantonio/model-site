// Add your JS customizations here
window.addEventListener( 'DOMContentLoaded', function() {
    console.log('starting custom javascript');
    logoAnimate();
    mainNavEvents();
});


const logoAnimate = () => {
    console.log('logo animate initiated')

    
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
    const _header = document.getElementById('main-nav');
    const _headerHeight = _header.offsetHeight


    if (document.body.scrollTop > _headerHeight || document.documentElement.scrollTop > _headerHeight) {
        console.log('scroll');
    } else {
        console.log('remove scroll');
    }
}