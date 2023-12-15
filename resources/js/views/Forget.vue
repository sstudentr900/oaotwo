<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import formButton from '../components/formButton.vue'
  import formEmail from '../components/formEmail.vue'
  import {useRouter,useRoute} from 'vue-router'
  import {onMounted,ref} from 'vue'
  const loadingShow = ref(false)
  const route = useRoute()
  const router = useRouter()
  const onSubmit = (values)=>{
    console.log(JSON.stringify(values, null, 2));
    router.push({name:'forget_enter'})
  }
  onMounted(()=>{
  })
</script>

<template>
  <div class="forget_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="contentDiv">
        <p class="text_fs16_fw400_ls1_coGray900_mb24_tac_lh14">
          請輸入申辦會員時輸入的<span class="_coRed">E-mail郵箱</span>，輸入後我們將寄送一封電子郵件給您，內有重新設定新密碼的步驟說明。
        </p>
        <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
          <!-- <div class="_dif_mb32_fdc">
            <div class="label_text16_ls2">
              <label for="account">申辦會員時輸入的 E-mail 郵箱</label>
            </div>
            <div class="input_wi100_por">
              <v-field
                class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                type="text" 
                name="account"
                placeholder="請輸入帳號或E-mail"
                rules="required|email|max:50"
                :class="{ 'error': errors['account'] }"
              ></v-field>
              <error-message name="account" class="_formError"></error-message>
            </div>
          </div> -->
          <formEmail :errors="errors" text="申辦會員時輸入的 E-mail 郵箱" class="_mb32"/>
          <!-- <div class="btnDiv_tac">
            <button class='_btn_noho_br0_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br6_mb16'>送出</button>
            <router-link to="/login" class="_fs16_tdr_tar">我要登入?</router-link>
          </div> -->
          <formButton :loadingShow="loadingShow" class="_mb16" text="送出" />
          <router-link :to="{name:'login'}" class="_fs16_tdr_tar">我要登入?</router-link>
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
