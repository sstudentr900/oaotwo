<script setup>
  import baMain from '../components/baMain.vue'
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
    <div class="_dif_coGray600_mb24">
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
    </div>
    <div class="_dif_aic_jcs_mb24">
      <div class="_fs32_coGray900_fw600">帳戶管理</div>
    </div>
    <div class="tableDiv">
      <div class="tableTop_dif_aic_jcs_pa32">
        <div class="add_btn2">
          <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_582_361)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 33C28.9558 33 35 26.9558 35 19.5C35 12.0442 28.9558 6 21.5 6C14.0442 6 8 12.0442 8 19.5C8 26.9558 14.0442 33 21.5 33Z" fill="#5E7DA3"/>
            </g>
            <path d="M22.3397 14.7495C22.3397 14.2859 21.9639 13.9102 21.5003 13.9102C21.0368 13.9102 20.661 14.2859 20.661 14.7495V18.661H16.7495C16.2859 18.661 15.9102 19.0368 15.9102 19.5003C15.9102 19.9639 16.2859 20.3397 16.7495 20.3397H20.661V24.2511C20.661 24.7147 21.0368 25.0905 21.5003 25.0905C21.9639 25.0905 22.3397 24.7147 22.3397 24.2511V20.3397H26.2511C26.7147 20.3397 27.0905 19.9639 27.0905 19.5003C27.0905 19.0368 26.7147 18.661 26.2511 18.661H22.3397V14.7495Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            <!-- <defs>
            <filter id="filter0_d_582_361" x="0" y="0" width="43" height="43" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="2"/>
            <feGaussianBlur stdDeviation="4"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.247059 0 0 0 0 0.25098 0 0 0 0 0.941176 0 0 0 0.2 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_582_361"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_582_361" result="shape"/>
            </filter>
            </defs> -->
          </svg>
          <p>新增帳戶</p>
        </div>
        <div class="delete_btn2">刪除</div>
      </div>
      <div class="tableContent_mb64">
        <div class="titleDiv">
          <ul class="_dif">
            <li class="chooseDiv">
              <div class="chooseBtn">
                <input type="checkbox">
              </div>
            </li>
            <li class="stateDiv"><div class="text">狀態</div></li>
            <li><div class="text">帳號</div></li>
            <li class="editDiv"><div class="text">編輯</div></li>
          </ul>
        </div>
        <div class="itemDiv">
          <ul class="_dif">
            <li class="chooseDiv">
              <div class="chooseBtn">
                <input type="checkbox">
              </div>
            </li>
            <li class="stateDiv"><div class="text">啟用</div></li>
            <li><div class="text">admin</div></li>
            <li class="editDiv">
              <router-link :to="{name:'baconservatoredit'}" class="editBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path d="M19.9964 0.927555C19.4015 0.333603 18.5953 0 17.7546 0C16.914 0 16.1078 0.333603 15.5129 0.927555L1.28189 15.1586C0.874358 15.5638 0.55123 16.0458 0.331199 16.5767C0.111168 17.1077 -0.00139823 17.677 1.31086e-05 18.2517V20.0481C1.31086e-05 20.2801 0.0922004 20.5027 0.256295 20.6668C0.420389 20.8309 0.642949 20.9231 0.875013 20.9231H2.67139C3.24606 20.9247 3.81534 20.8123 4.34627 20.5924C4.87721 20.3725 5.35926 20.0495 5.76451 19.6421L19.9964 5.41018C20.5901 4.81535 20.9235 4.00928 20.9235 3.16887C20.9235 2.32846 20.5901 1.52239 19.9964 0.927555ZM4.52726 18.4048C4.03377 18.895 3.36698 19.171 2.67139 19.1731H1.75001V18.2517C1.74913 17.9068 1.81665 17.5653 1.94867 17.2467C2.08069 16.9281 2.27459 16.6389 2.51914 16.3958L13.3193 5.59568L15.3318 7.60818L4.52726 18.4048ZM18.7583 4.17293L16.5655 6.36656L14.553 4.35843L16.7466 2.16481C16.8788 2.03295 17.0356 1.92841 17.2081 1.85716C17.3807 1.78591 17.5656 1.74935 17.7522 1.74955C17.9389 1.74975 18.1237 1.78672 18.2961 1.85835C18.4685 1.92997 18.6251 2.03485 18.757 2.16699C18.8888 2.29914 18.9933 2.45596 19.0646 2.6285C19.1358 2.80104 19.1724 2.98593 19.1722 3.1726C19.172 3.35928 19.135 3.54408 19.0634 3.71647C18.9918 3.88886 18.8869 4.04545 18.7548 4.17731L18.7583 4.17293Z" fill="#9FA2B4"/>
                </svg>
              </router-link>
            </li>
          </ul>
          <ul class="_dif">
            <li class="chooseDiv">
              <div class="chooseBtn">
                <input type="checkbox">
              </div>
            </li>
            <li class="stateDiv"><div class="text">啟用</div></li>
            <li><div class="text">admin</div></li>
            <li class="editDiv">
              <router-link :to="{name:'baconservatoredit'}" class="editBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path d="M19.9964 0.927555C19.4015 0.333603 18.5953 0 17.7546 0C16.914 0 16.1078 0.333603 15.5129 0.927555L1.28189 15.1586C0.874358 15.5638 0.55123 16.0458 0.331199 16.5767C0.111168 17.1077 -0.00139823 17.677 1.31086e-05 18.2517V20.0481C1.31086e-05 20.2801 0.0922004 20.5027 0.256295 20.6668C0.420389 20.8309 0.642949 20.9231 0.875013 20.9231H2.67139C3.24606 20.9247 3.81534 20.8123 4.34627 20.5924C4.87721 20.3725 5.35926 20.0495 5.76451 19.6421L19.9964 5.41018C20.5901 4.81535 20.9235 4.00928 20.9235 3.16887C20.9235 2.32846 20.5901 1.52239 19.9964 0.927555ZM4.52726 18.4048C4.03377 18.895 3.36698 19.171 2.67139 19.1731H1.75001V18.2517C1.74913 17.9068 1.81665 17.5653 1.94867 17.2467C2.08069 16.9281 2.27459 16.6389 2.51914 16.3958L13.3193 5.59568L15.3318 7.60818L4.52726 18.4048ZM18.7583 4.17293L16.5655 6.36656L14.553 4.35843L16.7466 2.16481C16.8788 2.03295 17.0356 1.92841 17.2081 1.85716C17.3807 1.78591 17.5656 1.74935 17.7522 1.74955C17.9389 1.74975 18.1237 1.78672 18.2961 1.85835C18.4685 1.92997 18.6251 2.03485 18.757 2.16699C18.8888 2.29914 18.9933 2.45596 19.0646 2.6285C19.1358 2.80104 19.1724 2.98593 19.1722 3.1726C19.172 3.35928 19.135 3.54408 19.0634 3.71647C18.9918 3.88886 18.8869 4.04545 18.7548 4.17731L18.7583 4.17293Z" fill="#9FA2B4"/>
                </svg>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </baMain>
</template>
<style scoped>
</style>
