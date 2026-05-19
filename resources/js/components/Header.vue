<template>
  <header id="site-header" class="site-header" :class="{ open: isOpen }">
    <div class="content-max-width">

      <a href="/" class="logo">
        <img src="/images/logo.png" :alt="data.site_name" />
      </a>

      <!--<<div class="content-full-width">
        <div class="header-message" v-html="header">
        </div>


        <div class="header-contact"  v-html="data.note">

        </div>

        a href="" class="get-atm">Get ATM</a>
      </div>-->
      <!--

      <div class="right">



        <button class="hamburger mobile" @click="toggleMenu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>-->
    </div>

    <nav>
      <ul class="top">
        <li v-for="(link, index) of nav" :key="index">
          <a :href="link.url">
            {{ link.title }}
          </a>
        </li>
      </ul>
    </nav>

  </header>
</template>

<script>
export default {
  props: {
    menu: Array,
    header: String,
    data: Object
  },

  data: () => ({
    isOpen: false,
    nav: []
  }),

  mounted () {
    this.nav = this.menu
    console.log(this.menu, this.nav)
  },

  methods: {
    toggleMenu () {
      this.isOpen = !this.isOpen;
    },
  },
};
</script>
