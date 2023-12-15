<script setup>
  import publicNav from '../components/publicNav2.vue'
  import publicFooter from '../components/publicFooter.vue'
  import publicFavorite from '../components/publicFavorite.vue'
  import formButtonCart from '../components/formButtonCart.vue'
  import formCount from '../components/formCount.vue'
  import {onMounted,ref} from 'vue'
  const intriduceId = ref(0)
  const intriduceIdChange = (index)=>{
    intriduceId.value = index
  }
  onMounted(()=>{
  })
</script>
<template>
  <publicNav/>
  <div class="shopread_bgGray200_patb140">
    <div class="_mw1280">
      <div class="publichyperlink_coGray900_text14_mb16_dif_aic_jcs">
        <div class="bread_dif">
          <router-link to="">商店</router-link>
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
          <!-- <router-link to="">新品登場</router-link>
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
          </div> -->
          <router-link to="">商品介紹</router-link>
        </div>
      </div>
      <div class="contentDiv">
        <div class="productDiv_dif_gap32_mb48">
          <div class="imgDiv_dif_wi50_gap8">
            <ul class="smallImg">
              <li>
                <img class="_fluid_mb6_cup" src="@img/shop05.png" alt="">
              </li>
              <li>
                <img class="_fluid_mb6_cup" src="@img/shop05.png" alt="">
              </li>
              <li>
                <img class="_fluid_mb6_cup" src="@img/shop05.png" alt="">
              </li>
              <li>
                <img class="_fluid_mb6_cup" src="@img/shop05.png" alt="">
              </li>
            </ul>
            <div class="bigImg">
              <img src="@img/shop06.png" class="_fluid" alt="">
            </div>
          </div>
          <div class="textDiv_wi50">
            <div class="_dif_fdc">
              <div class="title_mb8">
                <div class="_fs32_lh14_coGray900_ellipsis2">熱情豔陽下三入組文字文字文字文字文字｜PINEAPPLE</div>
              </div>
              <publicFavorite class="_pore" :text="true"/>
            </div>
            <hr class="_ma16">
            <div class="price_dif_aic_jcs">
              <div class="_dif_aie">
                <p class="_fs24_fw800">NT$ 300</p>
                <span class="_fs14_coGray200_ml6_tdl">NT$ 380</span>
              </div>
              <p class="_fs14_coGray800">滿NT$1,000免運,3日寄出</p>
            </div>
            <hr class="_ma16">
            <ul class="remarkDiv_fs16_lsd_pal24_lh14">
              <li>獨特的香氣和風味，口感極佳</li>
              <li>吃出幸福與滿足的好滋味</li>
              <li>濃郁的香氣及滑順的口感最受台灣人喜愛</li>
            </ul>
            <hr class="_ma16">
            <div class="_dif_gap16">
              <formCount/>
              <formButtonCart/>
            </div>
          </div>
        </div>
        <div class="intriduceDiv_mb64">
          <div class="intriduceNav_dif_fs18_bb1s">
            <div class="_pat12b24_cup" @click="intriduceIdChange(0)" :class="{'active':intriduceId==0}">商品介紹</div>
            <div class="_pat12b24_cup" @click="intriduceIdChange(1)" :class="{'active':intriduceId==1}">配送及付款</div>
          </div>
          <div class="intriduceContents_pa32_lh16">
            <div class="intriduceContent" v-show="intriduceId===0">
              <div class="text">
                商品介紹商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區

                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區
              </div>
            </div>
            <div class="intriduceContent" v-show="intriduceId===1">
              <div class="text">
                配送及付款商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區

                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區商品內容區商品內容區商品內容區
                商品內容區商品內容區商品內容區
              </div>
            </div>
          </div>
        </div>
        <hr class="_ma32">
        <div class="linkDiv_gap16_dif_aic_jcc">
          <a @click="$router.go(-1)" class="_btn_noho_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br0_dif_aic_jcc">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 6 12" fill="none">
              <path d="M1.91327 6.44971C1.83487 6.37195 1.77264 6.27943 1.73017 6.1775C1.68771 6.07558 1.66585 5.96625 1.66585 5.85582C1.66585 5.7454 1.68771 5.63607 1.73017 5.53414C1.77264 5.43222 1.83487 5.3397 1.91327 5.26194L5.75258 1.431C5.83098 1.35324 5.89321 1.26072 5.93567 1.15879C5.97814 1.05686 6 0.947536 6 0.837115C6 0.726693 5.97814 0.617364 5.93567 0.515435C5.89321 0.413505 5.83098 0.320993 5.75258 0.243234C5.59586 0.0874439 5.38386 0 5.16288 0C4.9419 0 4.7299 0.0874439 4.57318 0.243234L0.733869 4.08255C0.263949 4.55305 0 5.19084 0 5.85582C0 6.52081 0.263949 7.1586 0.733869 7.6291L4.57318 11.4684C4.72898 11.6229 4.93926 11.7101 5.1587 11.711C5.26878 11.7116 5.37791 11.6905 5.47982 11.6489C5.58173 11.6073 5.67442 11.5459 5.75258 11.4684C5.83098 11.3907 5.89321 11.2981 5.93567 11.1962C5.97814 11.0943 6 10.985 6 10.8745C6 10.7641 5.97814 10.6548 5.93567 10.5529C5.89321 10.4509 5.83098 10.3584 5.75258 10.2807L1.91327 6.44971Z" fill="white"/>
            </svg>
            <p class="_ml6">返回上一頁</p>
          </a>
          <router-link :to="{name:'cart'}" class="_btn_noho_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br0_dif_aic_jcc">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
              <path d="M16.4151 2.79919C16.2118 2.56743 15.9573 2.38103 15.6696 2.25323C15.382 2.12544 15.0682 2.05938 14.7507 2.05975H3.06577L3.03541 1.81876C2.9733 1.31784 2.71986 0.855984 2.32317 0.520757C1.92647 0.18553 1.41409 0.000234669 0.883161 0L0.722718 0C0.531041 0 0.347215 0.0723361 0.211679 0.201095C0.0761433 0.329854 0 0.504489 0 0.686582C0 0.868675 0.0761433 1.04331 0.211679 1.17207C0.347215 1.30083 0.531041 1.37316 0.722718 1.37316H0.883161C1.06018 1.37319 1.23103 1.43493 1.36331 1.54667C1.4956 1.65842 1.58011 1.8124 1.60082 1.97942L2.59528 10.0124C2.69852 10.8478 3.12104 11.6182 3.78264 12.1772C4.44424 12.7363 5.29886 13.0451 6.1843 13.0451H13.7316C13.9233 13.0451 14.1071 12.9727 14.2427 12.844C14.3782 12.7152 14.4544 12.5406 14.4544 12.3585C14.4544 12.1764 14.3782 12.0017 14.2427 11.873C14.1071 11.7442 13.9233 11.6719 13.7316 11.6719H6.1843C5.73697 11.6707 5.30099 11.5381 4.93612 11.2923C4.57124 11.0464 4.29534 10.6994 4.14623 10.2987H12.761C13.6083 10.2988 14.4286 10.016 15.0787 9.49985C15.7287 8.98368 16.1672 8.26692 16.3175 7.47482L16.8849 4.48544C16.9415 4.18884 16.9288 3.88404 16.8476 3.59263C16.7664 3.30123 16.6187 3.03035 16.4151 2.79919ZM15.4662 4.2417L14.8981 7.23108C14.8079 7.70688 14.5443 8.13736 14.1536 8.44715C13.7629 8.75694 13.2699 8.9263 12.761 8.92556H3.91641L3.23633 3.43291H14.7507C14.8568 3.43231 14.9618 3.45393 15.0582 3.49625C15.1546 3.53857 15.24 3.60054 15.3083 3.67775C15.3766 3.75496 15.4261 3.84553 15.4534 3.943C15.4807 4.04047 15.4851 4.14245 15.4662 4.2417Z" fill="white"/>
              <path d="M5.05921 16.478C5.8575 16.478 6.50464 15.8632 6.50464 15.1049C6.50464 14.3465 5.8575 13.7317 5.05921 13.7317C4.26091 13.7317 3.61377 14.3465 3.61377 15.1049C3.61377 15.8632 4.26091 16.478 5.05921 16.478Z" fill="white"/>
              <path d="M12.2863 16.478C13.0845 16.478 13.7317 15.8632 13.7317 15.1049C13.7317 14.3465 13.0845 13.7317 12.2863 13.7317C11.488 13.7317 10.8408 14.3465 10.8408 15.1049C10.8408 15.8632 11.488 16.478 12.2863 16.478Z" fill="white"/>
            </svg>
            <p class="_ml6">立即結帳</p>
          </router-link>
        </div>
      </div>
    </div>
  </div>
  <publicFooter/>
</template>
<style scoped>
[class^='linkDiv'] a{
  max-width: 380px;
}
[class^='intriduceNav']>div{
  position: relative;
}
[class^='intriduceNav']>div.active::after{
  content: '';
  position: absolute;
  width: 100%;
  height: 4px;
  background: #333;
  left: 0;
  bottom: 0;
}
</style>
