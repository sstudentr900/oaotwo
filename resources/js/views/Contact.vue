<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import publicContact from '../components/publicContact.vue'
</script>
<template>
  <div class="contact_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <publicContact class="style2"/>
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
