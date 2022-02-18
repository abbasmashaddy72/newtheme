window._ = require('lodash')

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

// Import Alpine.js
import Alpine from 'alpinejs'

// Import aos
import AOS from 'aos'

// Import Swiper
import Swiper, { Autoplay, Navigation } from 'swiper'

// Initialize Alpine
window.Alpine = Alpine
Alpine.start()

AOS.init({
    once: true,
    disable: 'phone',
    duration: 750,
    easing: 'ease-out-quart'
})

Swiper.use([Autoplay, Navigation])
// eslint-disable-next-line no-unused-vars
const carousel = new Swiper('.carousel', {
    slidesPerView: 'auto',
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    initialSlide: 1,
    spaceBetween: 24,
    autoplay: {
        delay: 7000
    },
    navigation: {
        nextEl: '.carousel-next',
        prevEl: '.carousel-prev'
    }
})
