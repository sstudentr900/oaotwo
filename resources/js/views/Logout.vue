<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import {onMounted,ref,getCurrentInstance } from 'vue'
  import {useRouter} from 'vue-router'
  import useUserStore from '../store/user'
  const userStore = useUserStore()
  const router = useRouter()
  onMounted(()=>{
  })
</script>

<template>
  <div class="login_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv_mw380_usn">
          <p>登出</p>
      </div>
    </div>
  </div>
</template>
<style scoped>
</style>
