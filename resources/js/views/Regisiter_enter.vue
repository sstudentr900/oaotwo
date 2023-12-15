<script setup>
  import formPassword from '../components/formPassword.vue'
  import formButton from '../components/formButton.vue'
  import publicTitle from '../components/publicTitle.vue'
  import {onMounted,ref} from 'vue'
  import {useRouter} from 'vue-router'
  const router = useRouter()
  const loadingShow = ref(false)
  const onSubmit = (values)=>{
    loadingShow.value = true
    alert(JSON.stringify(values, null, 2));
    router.push('/register_OK')
    loadingShow.value = false
  }
  onMounted(()=>{
  })
</script>

<template>
  <div class="regisiter_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv_mw380">
        <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
          <div class="_dif_mb8_fdc">
            <div class="label_text16_ls2">
              <label for="name">姓名<span class="_coRed">*</span></label>
            </div>
            <div class="input_wi100_por">
              <v-field
                class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                type="text" 
                name="name"
                placeholder="請輸入真實姓名"
                rules="required|max:10"
                :class="{ 'error': errors['name'] }"
              ></v-field>
              <error-message name="name" class="_formError"></error-message>
            </div>
          </div>
          <div class="_dif_mb8_fdc">
            <div class="label_text16_ls2">
              <label for="phone">手機號碼<span class="_coRed">*</span></label>
            </div>
            <div class="input_wi100_por">
              <v-field
                class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                type="text" 
                name="phone"
                placeholder="請輸入真實手機號碼"
                rules="required|numeric|max:12"
                :class="{ 'error': errors['phone'] }"
              ></v-field>
              <error-message name="phone" class="_formError"></error-message>
            </div>
          </div>
          <!-- <div class="_dif_mb8_fdc">
            <div class="label_text16_ls2">
              <label for="account">帳號(英數)<span class="_coRed">*</span></label>
            </div>
            <div class="input_wi100_por">
              <v-field
                class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                type="text" 
                name="account"
                placeholder="請輸入帳號，字母留意大小寫，數字須為半形"
                rules="required|max:50"
                :class="{ 'error': errors['account'] }"
              ></v-field>
              <error-message name="account" class="_formError"></error-message>
            </div>
          </div> 
          <div class="_dif_mb32_fdc">
            <div class="label_text16_ls2">
              <label for="passwords">密碼<span class="_coRed">*</span></label>
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
          </div>-->
          <formPassword :errors="errors" :required="true"/>
          <!-- <div class="btnDiv_tac">
            <button class='_btn_noho_br0_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br6_mb16'>下一步</button>
          </div> -->
          <formButton :loadingShow="loadingShow" text="下一步" />
        </v-form>
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>
