<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import formEmail from '../components/formEmail.vue'
  import formPassword from '../components/formPassword.vue'
  import formButton from '../components/formButton.vue'
  import {onMounted,ref,getCurrentInstance } from 'vue'
  import {useRouter,useRoute} from 'vue-router'
  import useUserStore from '../store/user'
  // import { reqTest } from "../composables/useApi";
  const userStore = useUserStore()
  const router = useRouter()
  const route = useRoute()
  const { proxy, ctx } = getCurrentInstance()
  const _this = ctx
  const loadingShow = ref(false)
  const onSubmit = async(values,actions)=>{
  // async function onSubmit (values) {
    loadingShow.value = true
    // alert(JSON.stringify(values, null, 2));
    try{
      await userStore.isLogin(values);
    }catch(error){
      //錯誤訊息
      console.log(error)
      //錯誤字串
      // console.log(error.message)
      //表單清空
      _this.$refs.form.resetForm();
      //自訂錯誤
      actions.setFieldError('email', '帳號或密碼錯誤');
      actions.setFieldError('passwords', '帳號或密碼錯誤');
      // alert('帳號或密碼錯誤')
    }
    loadingShow.value = false

    //redirect登出帶登入跳轉頁面
    // router.push({name:'info'})
    let redirect = route.query.redirect
    console.log('redirect',redirect)
    router.push({path: redirect||'/member/info'})
  }
  onMounted(async()=>{
    // const res = await reqTest()
    // console.log(res)
  })
</script>

<template>
  <div class="login_bgGray200_patb140">
    <div class="_mw980">
      <!-- <div class="publichyperlink_dif_coGray900_text14_mb16">
        <a href="#">會員</a>
        <div class="icon_pal8_par8">
          <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 7 12" fill="none">
            <path d="M1 11L5.92929 6.07071C5.96834 6.03166 5.96834 5.96834 5.92929 5.92929L1 1" stroke="#A4A4A4" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <p>登入</p>
      </div>
      <div class="_title3">Login<span>登入</span></div> -->
      <publicTitle/>
      <div class="contentDiv_mw380_usn">
        <div class="register_fs16_coGray900_mb16_dif_jcc">
          還不是OAO會員？<router-link :to="{name:'register'}" class="_coRed_ml8_tdr">立即註冊</router-link>
        </div>
        <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
          <formEmail :errors="errors" class="_mb8" text="帳號" />
          <formPassword :errors="errors" class="_mb32"/>
          <formButton :loadingShow="loadingShow" class="_mb16" text="登入" />
          <router-link :to="{name:'forget'}" class="_fs16_tdr_tar">忘記密碼?</router-link>
        </v-form>
      </div>
    </div>
  </div>
</template>
<style scoped>
</style>
