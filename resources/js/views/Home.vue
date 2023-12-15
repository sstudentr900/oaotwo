<script setup>
  import publicNav from '../components/publicNav.vue'
  import home_header from '../components/home_header.vue'
  import home_story from '../components/home_story.vue'
  import home_news from '../components/home_news.vue'
  import home_commodity from '../components/home_commodity.vue'
  import home_ad from '../components/home_ad.vue'
  import home_connection from '../components/home_connection.vue'
  import publicFooter from '../components/publicFooter.vue'
  import {onMounted} from 'vue'
  import AOS from 'aos'
  import 'aos/dist/aos.css'
  import Rellax from 'rellax';
  onMounted(()=>{
    AOS.init()
    new Rellax('.rellax');
  })
</script>

<template>
  <publicNav/>
  <home_header/>
  <home_story/>
  <home_news/>
  <home_commodity/>
  <home_ad/>
  <home_connection/>
  <publicFooter/>
</template>

<style>
  html{
    scroll-behavior: smooth;
  }
</style>
