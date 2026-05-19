<template>
  <div class='map-section'>
    <div class="map" id="map"></div>
  </div>
</template>

<script>

export default {
  props: {
    lat: Number,
    long: Number
  },

  data: () => ({
    latitute: 0,
    longitude: 0
  }),

  mounted () {
    this.latitute = this.lat
    this.longitude = this.long
    this.initGmap(this.latitute, this.longitude)
  },

  methods: {
    initGmap (lat, lng) {
      // var id = 'map'
      // var data = new google.maps.Map(document.getElementById(id), {
      //   center: curpoint,
      //   zoom: 16,
      //   mapTypeId: 'roadmap'
      // })
      // var icon = {
      //   url: '/images/marker.png',
      //   size: new google.maps.Size(43, 57),
      //   scaledSize: new google.maps.Size(43, 57)
      // }
      // var curpoint = new google.maps.LatLng(lat, lng)

      // var gmapmarker = new google.maps.Marker({
      //   map: data,
      //   icon: icon,
      //   position: curpoint
      // })

      const myLatLng = { lat: parseFloat(lat), lng: parseFloat(lng) };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: myLatLng,
      });

      new google.maps.Marker({
        position: myLatLng,
        map : map
      });

    }
  }
};
</script>

<style lang="scss">
.map-section {
  width: 100%;

  .map {
    height: 300px;
  }
}
</style>