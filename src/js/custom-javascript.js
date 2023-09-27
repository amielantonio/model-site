// Add your JS customizations here
window.addEventListener( 'DOMContentLoaded', function() {
    // console.log('starting custom javascript');
    logoAnimate();
    mainNavEvents();
    formAnimate();
    mobileNav();
    scrollResizeBinding();

    let joshers = document.querySelector('josh-js');

    const josh = new Josh();

    // if( joshers ) {
    //     const josh = new Josh();
    // }
    
});

/**
 * Form events for floating labels
 */
const formAnimate = () => {
    const $form = document.querySelector('.animated-form');
    const $form2 = document.querySelector('.animated-form-7');

    if( $form ) {
        const $input = $form.querySelectorAll('.wpforms-field-large');
        const $textArea = $form.querySelectorAll('textarea');
    }

    if( $form2 ) {
        const $input = $form2.querySelectorAll('.wpcf7-form-control');
        const $textArea = $form2.querySelectorAll('textarea');

        if( $input ) {
            $input.forEach( _in => {
    
                _in.addEventListener('focus', () => {
                    let $label = _in.parentElement.previousElementSibling;
        
                    if( ! $label.classList.contains('float') ) {
                        $label.classList.add('float');
                    }
                });
        
                _in.addEventListener('blur', () => {
                    let $label = _in.parentElement.previousElementSibling;
        
                    if( $label.classList.contains('float') && _in.value == "") {
                        $label.classList.remove('float');
                    }
                    
                });
            });
        }
    }
    
}

/**
 * Animate the logo
 */
const logoAnimate = () => {
    // console.log('logo animate initiated')

    const $main = document.querySelector('.custom-logo-link');

    $main.addEventListener('mouseenter', () => {
        // console.log('logo enter');
    });

    $main.addEventListener('mouseleave', () => {
        // console.log('logo leave');
    });


}

/**
 * Main navigation event handler, add all custom events for the header here
 */
const mainNavEvents = () => {
    // console.log('nav events initiated')
    
    // add the onscroll event under main nav events for the header
    window.onscroll = function() {
        headerScrollEvent();
        mobileScroll();
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

const mobileScroll = () => {
    const $body = document.querySelector('body');
    const $header = document.getElementById('main-nav');
    const _headerHeight = $header.offsetHeight
    const $navLinks = $header.querySelectorAll('.nav-link');
    const $mobileNav = document.querySelector('.btn-mobile-menu');
    const $logo = document.querySelector('#main-nav .custom-logo-link');

    if( 798 > window.outerWidth) {
        console.log('wtattttt?');
        if (document.body.scrollTop > _headerHeight || document.documentElement.scrollTop > _headerHeight) {

            if( $body.classList.contains('home')) {
                $logo.classList.add('mobile-active');
            }
        } else {
    
            if( $body.classList.contains('home') ) {
                $logo.classList.remove('mobile-active');
            }
        }
    }

    window.addEventListener('resize', () => {

        if( 798 > window.outerWidth) {
            console.log('wtattttt?');
            if (document.body.scrollTop > _headerHeight || document.documentElement.scrollTop > _headerHeight) {

                if( $body.classList.contains('home')) {
                    $logo.classList.add('mobile-active');
                }
            } else {
        
                if( $body.classList.contains('home') ) {
                    $logo.classList.remove('mobile-active');
                }
            }
        }
        
    })
}

const mobileNav = () => {
    const $mobileNav = document.querySelector('.btn-mobile-menu');
    const $logo = document.querySelector('#main-nav .custom-logo-link');

    // Add active class
    $mobileNav.addEventListener('click', () => {
        if( ! $mobileNav.classList.contains('active') ) {
            $mobileNav.classList.add('active');
            $logo.classList.add('mobile-active');
        } else {
            $mobileNav.classList.remove('active');
            $logo.classList.remove('mobile-active');
        }
    });
}


const scrollResizeBinding = () => {
    // console.log('binding');

    let docs = document.documentElement;
    window.addEventListener('scroll', function(e){
        let img = document.querySelectorAll('.saturates');
        let doc = document.documentElement;
        let ch = doc.clientHeight;

        if(img) {
            img.forEach( _i => {
                // console.log( _i.getBoundingClientRect().top);
                // console.log("ch:" + ch);
    
    
                if( (ch/2.5) > _i.getBoundingClientRect().top ) {
                    
                    _i.classList.add('hovered');
                } else {
                    
                    _i.classList.remove('hovered');
                }
            })
        }
    });
 
}

