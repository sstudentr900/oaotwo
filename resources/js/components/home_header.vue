<script setup>
  import { onBeforeUnmount,onMounted,ref } from 'vue';
  import publicCarousel from './publicCarousel.vue'; // 輪播组件
  const commodity = ref([
    {
      'id':1,
      'img':'home_header1.png',
      'small':{
        'id':1,
        'img':'home_header_small1.png',
        'title':'OAO1-Galette布列塔尼酥餅綜合三入組 (土鳳梨、蔓越莓、煙燻桂圓)',
        'price':'100',
      }
    },
    {
      'id':2,
      'img':'home_header2.png',
      'small':{
        'id':1,
        'img':'home_header_small1.png',
        'title':'OAO2-Galette布列塔尼酥餅綜合三入組 (土鳳梨、蔓越莓、煙燻桂圓)',
        'price':'200',
      }
    },
    {
      'id':3,
      'img':'home_header3.png',
      'small':{
        'id':1,
        'img':'home_header_small1.png',
        'title':'OAO3-Galette布列塔尼酥餅綜合三入組 (土鳳梨、蔓越莓、煙燻桂圓)',
        'price':'300',
      }
    },
  ])
  const hearderImg = commodity.value.map(item =>item.img)
  const currentIndex = ref(0);
  let autoPlayTimer = null;
  const startAutoPlay = () => {
    autoPlayTimer = setInterval(()=>{
      currentIndex.value = (currentIndex.value + 1) % hearderImg.length;
      // console.log('currentIndex',currentIndex.value)
    }, 6000);
  };
  const stopAutoPlay = () => {
    clearInterval(autoPlayTimer);
  };
  onMounted(() => {
    startAutoPlay();
  });
  onBeforeUnmount(() => {
    stopAutoPlay();
  });
</script>

<template>
  <div id="home_header" class="home_header" data-scroll-section>
    <div class="lineDiv_poa_zi1_he100" data-aos="fade" data-aos-delay="1200" data-aos-duration="1000" data-aos-anchor=".home_header"></div>
    <div class="logo2Div_poa_zi1" data-aos="fade" data-aos-delay="400" data-aos-duration="1000" data-aos-anchor=".home_header">
      <div class="img rellax" data-rellax-speed="-1">
        <img :src="$getSrc('home_logo2.png')"/>
      </div>
    </div>
    <!-- 商品 -->
    <div class="commidity_poa" data-aos="fade" data-aos-delay="600" data-aos-duration="1600" data-aos-anchor=".home_header">
      <div 
      class="commidityDiv_poa_dif_gap16_bgGray900_pa24 rellax"
      v-for="(item,index) in commodity"
      :key="index"
      :class="{ 'active':currentIndex == index }"
      data-rellax-speed="1"
      >
        <div class="img">
          <!-- <img class="_fluid" :src="$getSrc(item.small.img)" @error.once="$defaultImage($event,'home_header_small1.png')" /> -->
          <img class="_fluid" :src="$getSrc(item.small.img)" />
        </div>
        <div class="_commidityItem">
          <h4 class="title_coWhite_ellipsis3">{{item.small.title}}</h4>
          <div class="_dif_aic_jcs">
            <div class="price_coWhite">NT$ {{item.small.price}}</div>
            <a :href="item.small.id" class="buy_btn">立即購買</a>
          </div>
        </div>
      </div>
    </div>
    <!-- 輪圖 -->
    <publicCarousel :items="hearderImg" :autoPlay="true" :interval="6000" />
  </div>
</template>

<style scoped>
  .home_header{
    position: relative;
    background-color: #333;
  }
  [class*='logo2Div']{
    bottom: 50px;
    left: 40px;
  }
  [class*='commidity']{
    bottom: 60px;
    right: 0;
    height: 175px;
    z-index: 100;
  }
  [class*='commidityDiv']{
    opacity: 0;
  }
  [class*='commidityDiv'].active{
    opacity: 1;
  }
  [class*='commidityDiv'] .img{
    width: 130px;
    height: auto;
  }
  [class*='commidityDiv'] [class*='_commidityItem']{
    width: 200px;
  }
  [class*='lineDiv']{
    width: 1px ;
    background: rgba(255,255,255,.3);
    top: 0;
    right: 220px;
  }
  @media (max-width: 920px){
    [class*='lineDiv'],
    [class*='logo2Div']{
      display: none;
    }
  }
  @media (max-width: 480px){
    [class*='commidity'] {
      width: 100%;
      right: auto;
      left: 0;
      bottom: 16px;
    }
    [class*='commidityDiv']{
      left: 20px;
      width: calc(100% - 40px);
    }
  }
</style>
