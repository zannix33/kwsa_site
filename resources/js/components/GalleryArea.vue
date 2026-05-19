<template>
  <div class='gallery-slideshow'>
    <a
      href="#"
        v-for='(category, index) of categories'
        @click="reload(category.id)"
        v-bind:key="index"
      >
        {{ category.title }}
    </a>

    <div class="gallery-column">
      <article
        v-for='(slide, index) of slides'
        @click="openSlideshow()"
        v-bind:key="index"
      >
        <img
          :src="slide.image"
          alt=""
        >
        <div class="content">
          <p>{{ slide.title }}</p>
        </div>
      </article>
    </div>

    <div class="slideshow">
      <VueSlickCarousel
        v-bind='settings'
      >
        <article v-for='slide of slides'>

          <img :src="slide.image" alt="">
          <h3>{{ slide.title }}</h3>

        </article>
      </VueSlickCarousel>
    </div>

  </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'

export default {
  props: {
    slides: Array,
    categories: Array,
  },

  components: { VueSlickCarousel },

  data: () => ({
    isOpen: false,
    openTo: 0,
    settings: {
      'dots': true,
      'arrows': true,
      'infinite': false,
      'speed': 500,
      'slidesToShow': 1,
      'slidesToScroll': 1
    },
    payload: {
      page: 1
    }
  }),

  methods: {
    reload (id) {
      var searchParams = new URLSearchParams(window.location.search);
      if(searchParams.has('category[]')) {
        searchParams.delete('category[]')
        searchParams.delete('page')
      }

      let url = '?category[]=' + id

      window.location.href = url;
    },

    openSlideshow (index) {
      this.isOpen = !this.isOpen
      this.openTo = index
    }
  },
};
</script>

<style lang="scss">
.gallery-slideshow {
  width: 100%;

  .gallery-column {
    columns: 370px 3;
    column-gap: 30px;

    article {
      width: 100%;
      display: inline-block;
      margin: 0 0 30px;

      .content {
        display: none;
      }
    }
  }

  .slideshow {
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
