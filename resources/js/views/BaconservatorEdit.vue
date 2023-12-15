<script setup>
  import baMain from '../components/baMain.vue'
  import formEmail from '../components/formEmail.vue'
  import formPassword2 from '../components/formPassword2.vue'
  import formState from '../components/formState.vue'
  import formImg from '../components/formImg.vue'
  import {onMounted,ref,getCurrentInstance } from 'vue'
  import {useRouter,useRoute} from 'vue-router'
  const router = useRouter()
  const route = useRoute()
  const { proxy, ctx } = getCurrentInstance()
  const _this = ctx
  onMounted(async()=>{
    // const res = await reqTest()
    // console.log(res)
  })
</script>

<template>
  <baMain>
    <v-form id="form" ref="form">
      <div class="_dif_aic_fs14_coGray600_mb24">
        <router-link to="">設定</router-link>
        <div class="icon_pal8_par8">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="6"
            height="12"
            viewBox="0 0 7 12"
            fill="none"
          >
            <path
              d="M1 11L5.92929 6.07071C5.96834 6.03166 5.96834 5.96834 5.92929 5.92929L1 1"
              stroke="#A4A4A4"
              stroke-width="2"
              stroke-linecap="round"
            />
          </svg>
        </div>
        <router-link to="">帳戶管理</router-link>
        <div class="icon_pal8_par8">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="6"
            height="12"
            viewBox="0 0 7 12"
            fill="none"
          >
            <path
              d="M1 11L5.92929 6.07071C5.96834 6.03166 5.96834 5.96834 5.92929 5.92929L1 1"
              stroke="#A4A4A4"
              stroke-width="2"
              stroke-linecap="round"
            />
          </svg>
        </div>
        <router-link to="">編輯</router-link>
      </div>
      <div class="_dif_aic_jcs_mb24">
        <div class="_fs32_coGray900_fw600">編輯</div>
        <div class="btns_dif_gap8">
          <div class="_btn2_bgRed500_coWhite_bon">儲存</div>
          <div class="_btn2">刪除</div>
        </div>
      </div>
      <div class="tableDiv_pa32_mb16">
        <formState class="_mb16"/>
        <formEmail text='帳號' class="_mb16"/>
        <formImg id="img" text='大頭照' class="_mb16"/>
      </div>
      <div class="tableDiv_pa32">
        <formPassword2 class=""/>
      </div>
    </v-form>
  </baMain>
</template>
<style scoped>
[class^='tableDiv']{
}
</style>
