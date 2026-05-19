<template>
  <div class='testimonials-slideshow'>
    
    <VueSlickCarousel
      v-bind='settings'
    >
      <article v-for='slide of slides'>

        <h3>{{ slide.text }}</h3>

      </article>
    </VueSlickCarousel>

  </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'

export default {
  props: {
    slides: Array,
  },

  components: { VueSlickCarousel },

  data: () => ({
    isOpen: false,
    settings: {
      'dots': true,
      'arrows': true,
      'infinite': false,
      'speed': 500,
      'slidesToShow': 1,
      'slidesToScroll': 1
    }
  }),

  methods: {
    toggleMenu () {
      this.isOpen = !this.isOpen;
    },
  },
};
</script>

<style lang="scss">
.testimonials-slideshow {
  width: 100%;

  article {
    padding: 0;

    text-align: center;

    h3 {
      min-height: 59px;
      margin: 0 auto 70px;

      font-weight: 600;
      letter-spacing: -0.32px;
      color: white;
    }
  }

  .slick-prev,
  .slick-next {
    @media (min-width: 1024px) {
      top: calc(100% + 20px);
      left: 60px;
    }

    &:before {
      color: white;
    }
  }

  .slick-next {
    @media (min-width: 1024px) {
      left: auto;
      right: 60px;
    }
  }
}
</style>