<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import {onMounted} from 'vue'
  onMounted(()=>{
  })
</script>
<template>
  <div class="contact_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <router-link :to="{ name: 'logout' }">登出</router-link>
        <router-link :to="{ name: 'forget' }">修改密碼</router-link>
        <router-link :to="{ name: 'info' }">個人資訊</router-link>
        <router-link :to="{ name: 'order' }">訂單查詢</router-link>
        <router-link :to="{ name: 'collect' }">我的收藏</router-link>
      </div>
    </div>
  </div>
</template>
<style scoped></style>