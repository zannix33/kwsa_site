<template>
  <div class='our-people'>
    
    <div class="content-max-width md:flex md:flex-row md:flex-wrap">
      <article
        v-for='person of people'
        class="md:w-1/4"
      >
        <a 
          class="image"
          @click="togglePerson(person)"
        >
          <img :src="person.image" :alt="person.name">
        </a>
        <div class="text">
          <h3 class="h4">{{ person.name }}</h3>
          <p>{{ person.title }}</p>

          <a @click="togglePerson(person)">Learn more <span class="material-icons">arrow_forward</span></a>
        </div>
      </article>
    </div>

    <div class="popup-module" v-if="isOpen">
      <span
        class="background"
        @click="togglePerson(null)"
      ></span>

      <article>
        <button
          class="exit"
          @click="togglePerson(null)"
        >
          <span class="material-icons">close</span>
        </button>

        <div class="md:flex">
          <div class="image md:w-1/3">
            <img :src="openPerson.image" :alt="openPerson.name">
          </div>

          <div class="text md:w-2/3">
            <h3>{{ openPerson.name }}</h3>
            <p>{{ openPerson.title }}</p>

            <div class="wysiwyg">
              <p>{{ openPerson.content }}</p>
            </div>
          </div>
        </div>
      </article>
    </div>

  </div>
</template>

<script>

export default {
  props: {
    people: Array,
  },

  data: () => ({
    isOpen: false,
    openPerson: {}
  }),

  methods: {
    togglePerson (person) {
      if (person === null) {
        this.openPerson = {}
      } else {
        this.openPerson = person
      }
      this.isOpen = !this.isOpen
    }
  }
};
</script>

<style lang="scss">
.our-people {
  width: calc(100% + 15px);

  .content-max-width {
    article {
      margin-bottom: 29px;
      padding: 0 13.5px;

      .image {
        cursor: pointer;

        img {
          width: 100%;
          max-height: 270px;
          margin: 0;
          object-fit: cover;
        }
      }

      .text {
        padding: 20px 20px 11px;

        text-align: center;

        border: 2px solid #f8fbfc;

        h3.h4 {
          margin: 0 auto 5px;

          color: #b4253d;
        }

        p {
          margin-bottom: 30px;
        }

        a {
          font-weight: 500;

          .material-icons {
            vertical-align: middle;
          }
        }
      }
    }

    article:nth-of-type(4n + 2) {
      h3.h4 { color: #7c9e48; }
    }
    article:nth-of-type(4n + 3) {
      h3.h4 { color: #81b1ce; }
    }
    article:nth-of-type(4n + 4) {
      h3.h4 { color: #394e54; }
    }
  }
}
</style>