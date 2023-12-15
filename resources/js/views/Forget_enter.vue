<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import formButton from '../components/formButton.vue'
  import {useRouter} from 'vue-router'
  import {onMounted} from 'vue'
  const router = useRouter()
  const onSubmit = (values)=>{
    console.log(JSON.stringify(values, null, 2));
    alert('修改成功，請重新登入')
    router.push({name:'login'})
  }
  onMounted(()=>{
  })
</script>

<template>
  <div class="forget_bgGray200_patb140_pageMh">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <!-- <p class="text_fs16_fw400_ls1_coGray900_mb24_tac_lh14"></p> -->
        <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
          <div class="_dif_fdc_mb32_mt32">
            <div class="label_text16_ls2">
              <label for="passwords">請輸入要修改的密碼</label>
            </div>
            <div class="input_wi100_por">
              <v-field
                class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                type="text" 
                name="passwords"
                placeholder="請輸入密碼，留意大小寫"
                rules="required|max:10"
                :class="{ 'error': errors['passwords'] }"
              ></v-field>
              <error-message name="passwords" class="_formError"></error-message>
            </div>
          </div>
          <div class="btnDiv_tac">
            <!-- <button class='_btn_noho_br0_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br6_mb16'>送出</button> -->
            <formButton :loadingShow="loadingShow" class="_mb16" text="送出" />
            <router-link :to="{name:'forget'}" class="_fs16_tdr_tar">忘記密碼?</router-link>
          </div>
        </v-form>
      </div>
    </div>
  </div>
</template>

<style scoped>
[class*='contentDiv']{
  max-width: 380px;
  margin: auto;
}
</style>
