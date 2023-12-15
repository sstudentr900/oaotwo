<script setup>
  import publicNav from '../components/publicNav2.vue'
  import publicFooter from '../components/publicFooter.vue'
  import {onMounted} from 'vue'
  onMounted(()=>{
  })
</script>
<template>
  <publicNav/>
  <router-view></router-view>
  <!-- 加入切換動畫 -->
  <!-- <router-view v-slot="{ Component,route  }">
    <Transition name="fade" mode="out-in">
      <div :key="route.name">
        <component :is="Component"></component>
      </div>
    </Transition>
  </router-view> -->
  <publicFooter/>
</template>
<style scoped>
  .fade-enter_from{
    opacity: 0;
  }
  .fade-enter-active{
    transition: all 5s
  }
  .fade-enter-to{
    opacity: 1;
  }
</style>
