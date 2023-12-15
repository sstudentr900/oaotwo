<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import publicStore from '../components/publicStore.vue'
</script>
<template>
  <div class="address_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <publicStore class="style2"/>
      </div>
    </div>
  </div>
</template>
<style scoped>
[class^='contentDiv']{
  max-width: 600px;
  margin: auto;
}
</style>
