<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import formButton from '../components/formButton.vue'
  import formEmail from '../components/formEmail.vue'
  import {onMounted,ref} from 'vue'
  import {useRouter} from 'vue-router'
  const router = useRouter()
  const loadingShow = ref(false)
  const onSubmit = (values)=>{
    loadingShow.value = true
    alert(JSON.stringify(values, null, 2));
    router.push('/register_enter')
    loadingShow.value = false
  }
  onMounted(()=>{
  })
</script>

<template>
  <div class="contact_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv_mw380">
        <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
          <formEmail :errors="errors" text="E-mail 電郵 (將會寄驗證信至您的電郵)"/>
          <div class="_mb24_dif_fdc_usn_fs16_fw400_mb8_lh14_mt24">
            <div class="checkbox_mb6_por">
              <div class="_dif_aic">
                <VField
                  type="checkbox"
                  name="discount" 
                  id="discount" 
                  class="_formCheckbox"
                  value="true"
                ></VField>
                <label for="discount" class="_dif_pal8">我願意接收最新優惠消息及服務等相關資訊</label>
              </div>
              <error-message name="discount" class="_formError"></error-message>
            </div>
            <div class="checkbox_por">
              <div class="_dif_aic">
                <VField 
                  type="checkbox"
                  name="terms" 
                  id="terms" 
                  class="_formCheckbox"
                  rules="required"
                  value="true"
                ></VField>
                <label for="terms" class="_dif_pal8">
                  我同意網站
                  <router-link to="/login" class="_tdr_pal6_par6">服務條款</router-link> 及 
                  <router-link to="/login" class="_tdr_pal6_par6">隱私權政策</router-link>
                </label>
              </div>
              <error-message name="terms" class="_formError"></error-message>
            </div>
          </div>
          <formButton :loadingShow="loadingShow" text="下一步" />
          <div class="login_dif_jce_fs16">
            <span class="_coGray900_fw400">已經有帳號?</span>
            <router-link to="/login" class="_tdr_coRed_pal6">立即登入</router-link>
          </div>
        </v-form>
        <div class="or_dif_aic_jcc_por_mt48">
          <p class="_fs16_fw400_coGray500_dii_pal16_par16_bgGray200_por_zi2">或使用社群帳戶註冊</p>
        </div>
        <div class="link_dif_aic_jcc_mt24">
          <a href="#">
            <div class="img"><img :src="$getUrl('register_fb.png')" class="_fluid"></div>
          </a>
          <a href="#" class="_ml16">
            <div class="img"><img :src="$getUrl('register_line.png')" class="_fluid"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
[class^="or"]::after{
  content: '';
  position: absolute;
  left: 0;
  top: 9px;
  width: 100%;
  height: 1px;
  background: #D7D7D7;
  z-index: 1;
}
[class^="link"] img{
  width: 48px;
}
</style>
