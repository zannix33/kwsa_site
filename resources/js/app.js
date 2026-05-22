/**
 * This is a polyfill library that enables IE 11 to run modern websites
 * Do not use Babel as it conflicts with Google Maps API library
 */
// import "core-js/stable";
import 'regenerator-runtime/runtime';

window.Vue = require('vue').default;

Vue.component('app-header', () => import('./components/Header'));
Vue.component('app-slideshow-services', () => import('./components/SliderServices'));
Vue.component('app-slideshow-testimonials', () => import('./components/SliderTestimonials'));
Vue.component('app-slideshow-service-gallery', () => import('./components/SliderServiceGallery'));
Vue.component('app-our-people', () => import('./components/OurPeople'));
Vue.component('app-gallery', () => import('./components/GalleryArea'));

Vue.component('app-map', () => import('./components/Map'));

const app = new Vue({
  el: '#app',

  data: () => ({
    isLoaded: false,
    tab: 'east',
    faq: null,
    menu: [
      { url: '/pet-records', title: 'Pet Records' },
      { url: '/medicinal-refill', title: 'Medicinal Re-fill' },
      { url: '/services', title: 'Services' },
      { url: '/blog', title: 'Clinic News' },
      { url: '/contact', title: 'Contact Us' },
      { url: '/shop', title: 'Shop' },
      { url: '/about', title: 'About' },
      { url: '/gallery', title: 'Gallery' },
      { url: '/our-people', title: 'Our People' },
    ],
  }),

  mounted () {
    document.onreadystatechange = () => {
      if (document.readyState == "complete") {
        this.isLoaded = true
      }
    }
  },

  methods: {
    toggleTab (tab) {
      this.tab = tab
    },

    toggleFAQ (index) {
      if (index === this.faq) {
        this.faq = null
      } else {
        this.faq = index
      }
    }
  }
});

