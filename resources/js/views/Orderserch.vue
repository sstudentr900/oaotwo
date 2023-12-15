<script setup>
  import publicNav from '../components/publicNav2.vue'
  import publicFooter from '../components/publicFooter.vue'
  import publicTitle from '../components/publicTitle.vue'
  import formInput from '../components/formInput.vue'
  import formButton from '../components/formButton.vue'
  import {onMounted,ref} from 'vue'
  const loadingShow = ref(false)
  const onSubmit = ()=>{

  }
  onMounted(()=>{
  })
</script>
<template>
  <publicNav/>
  <div class="orderserch_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <v-form id="form" ref="form" @submit="onSubmit">
          <formInput id="orderNumber" text="訂單編號" type="number" class="_mb8"/>
          <formButton :loadingShow="loadingShow" text="查詢" class="_mb16"/>
        </v-form>
      </div>
    </div>
  </div>
  <publicFooter/>
</template>
<style scoped></style>
