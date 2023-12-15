<script setup>
</script>

<template>
  <div class="home_ad" :style="{ backgroundImage: `url('${$getSrc('home_ad1.png')}')` }"></div>
</template>

<style scoped>
  .home_ad{
    /* background: url("@img/home_ad1.png") no-repeat; */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;
  }
</style>
