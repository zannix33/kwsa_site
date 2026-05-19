<template>
  <div class='services-slideshow'>
    
    <VueSlickCarousel
      v-bind='settings'
    >
      <article v-for='slide of slides'>
        <a :href='slide.url' class="image">
          <img :src='slide.image' :alt='slide.title'>
        </a>
        <div class='text'>
          <h3 class="h4">{{ slide.title }}</h3>
          <a :href='slide.url'>Learn more <span class="material-icons">arrow_forward</span></a>
        </div>
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
      'dots': false,
      'arrows': true,
      'edgeFriction': 0.35,
      'infinite': false,
      'speed': 500,
      'slidesToShow': 4,
      'slidesToScroll': 1,
      'responsive': [
        {
          'breakpoint': 1024,
          'settings': {
            'slidesToShow': 3,
            'slidesToScroll': 3,
            'infinite': true,
            'dots': true
          }
        },
        {
          'breakpoint': 600,
          'settings': {
            'slidesToShow': 2,
            'slidesToScroll': 2,
            'initialSlide': 2
          }
        },
        {
          'breakpoint': 480,
          'settings': {
            'slidesToShow': 1,
            'slidesToScroll': 1
          }
        }
      ]
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
.services-slideshow {
  width: calc(100% + 15px);

  .slick-prev,
  .slick-next {
    top: 27%;
  }

  article {
    padding: 0 13.5px;

    .image {
      img {
        width: 100%;
        max-height: 170px;
        margin: 0;
        object-fit: cover;
      }
    }

    .text {
      padding: 40px 20px;

      text-align: center;

      border: 2px solid #f8fbfc;

      .h4 {
        min-height: 59px;
        margin: 0 auto 16px;

        color: #b4253d;
      }

      a {
        font-weight: 500;

        .material-icons {
          vertical-align: middle;
        }
      }
    }
  }

  .slick-slide:nth-of-type(4n + 2) {
    .h4 { color: #7c9e48; }
  }
  .slick-slide:nth-of-type(4n + 3) {
    .h4 { color: #81b1ce; }
  }
  .slick-slide:nth-of-type(4n + 4) {
    .h4 { color: #394e54; }
  }
}
</style>