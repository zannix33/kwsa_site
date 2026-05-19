<template>
  <div class='services-gall-slideshow'>
    
    <VueSlickCarousel
      v-bind='settings'
    >
      <article v-for='slide of slides'>

        <img :src="slide.image" alt="">
        <h3>{{ slide.title }}</h3>

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
.services-gall-slideshow {
  width: 100%;
  max-width: 770px;

  article {
    width: 100%;
    padding: 0;

    text-align: center;

    h3 {
      margin: 0 auto;
      padding: 30px;

      font-size: 16px;
      font-weight: 400;
      line-height: 28px;
      text-align: left;
      color: white;

      background: #394e54;
    }
  }

  .slick-prev,
  .slick-next {
    @media (min-width: 1024px) {
    }

    &:before {
      color: white;
    }
  }

  .slick-next {
    @media (min-width: 1024px) {
    }
  }
}
</style>