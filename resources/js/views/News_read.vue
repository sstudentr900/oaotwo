<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import publicPageNumber2 from '../components/publicPageNumber2.vue'
  import axios from "axios";
  import { getNewsReadDate } from "../composables/useApi";
  import {ref,onMounted} from 'vue'
  import {useRoute,useRouter } from 'vue-router'
  const route = useRoute()
  const router = useRouter()
  const newsdata = ref('')
  const pageNow = ref(1)
  const pageTotle = ref(4)
  const pagePrevious = ref(1)
  const pageNext = ref(2)
  // const getData = (now)=>{
  //   // console.log(now)
  //   axios
  //   .get(
  //     `http://localhost:3000/news_read/${now}`,
  //     {
  //       params: {
  //         // pageNow: now,
  //       }
  //     }
  //   )
  //   .then((res) => {
  //     const data = res.data
  //     newsdata.value = data; 
  //     pageNow.value = Number(data.pageNow); 
  //     pageTotle.value = Number(data.pageTotle); 
  //     pagePrevious.value = (pageNow.value-1)<=1?1:(pageNow.value-1); 
  //     pageNext.value = (pageNow.value+1)>=pageTotle.value?pageTotle.value:(pageNow.value+1); 
  //     console.log(
  //       'pagePrevious',pagePrevious.value,
  //       'pageNext',pageNext.value,
  //       'pageTotle',pageTotle.value,
  //       'pageNow',pageNow.value
  //     )
  //     router.push({path:`/news_read/${pageNow.value}`}) //同上
  //     // console.log(34,pageNow.value)
  //   })
  //   .catch((error) => {
  //   });
  // }
  const getData = async(now)=>{
    // console.log(now)
    try{
      const res = await getNewsReadDate(now)
      const data = res.data
      // console.log(data)
      newsdata.value = data.list; 
      pageNow.value = Number(now); 
      pageTotle.value = Number(data.pageTotle); 
      pagePrevious.value = (pageNow.value-1)<=1?1:(pageNow.value-1); 
      pageNext.value = (pageNow.value+1)>=pageTotle.value?pageTotle.value:(pageNow.value+1); 
      // console.log(
      //   'pagePrevious',pagePrevious.value,
      //   'pageNext',pageNext.value,
      //   'pageTotle',pageTotle.value,
      //   'pageNow',pageNow.value
      // )
      // router.push({path:`/news_read/${pageNow.value}`})
      router.push({ name:'news_read', params:{id:pageNow.value} })
      // console.log(34,pageNow.value)
    }catch(eror){
      console.log('news',eror)
      // console.log(newsdata.value.length)
    }
  }
  onMounted(()=>{
    if(route.params.id){pageNow.value = route.params.id }
    // console.log(pageNow.value)
    getData(pageNow.value)
  })
</script>

<template>
  <div class="newsRead_bgGray200_patb140">
    <div class="_mw980">
      <publicTitle/>
      <div class="newsContent" v-if="newsdata.length===0">
        <div class="_fs32_tac_pa48_mt48">找不到資料...</div>
      </div>
      <div class="contentDiv" v-else>
        <!-- <div class="img_mb24">
          <img class="_cover" src="@img/home_new1.png" alt="">
        </div>
        <div class="topDiv">
          <div class="title_dif_aic">
            <div class="date_text18_coGray900_mr8">2023.10.30</div>
            <div class="icon_btn_noho_coGray900_bgTran_bcGray900_pat3b6">優惠活動</div>
          </div>
          <div class="text_text18_coGray900_ellipsis1_">OAO優惠活動標題文字文字文字文字文字文字</div>
          <hr class="patb16">
        </div>
        <div class="bottomDiv">
          <p>優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明...</p>
          <p>優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明...</p>
          <p>優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明優惠內容說明...</p>
          <img src="@img/home_new1.png" alt="">
        </div> -->
        <!-- {{ newsdata }} -->
        <div class="img_mb24">
          <img class="_cover" :src="newsdata.img" @error.once="$defaultImage($event,'home_new1.png')">
        </div>
        <div class="topDiv">
          <div class="title_dif_aic">
            <div class="date_text18_coGray900_mr8">{{newsdata.date}}</div>
            <div class="icon_btn_noho_coGray900_bgTran_bcGray900_pat3b6">{{newsdata.activity}}</div>
          </div>
          <div class="text_text18_coGray900_ellipsis1_">{{newsdata.title}}</div>
          <hr class="_mat16_mab16">
        </div>
        <div class="bottomDiv" v-html="newsdata.text"></div>
        <hr class="_mt32_mb32">
        <publicPageNumber2 :previous="pagePrevious" :next="pageNext" :totle="pageTotle" :fn="getData"/>
      </div>
    </div>
  </div>
</template>

<style scoped>
  [class*='contentDiv']{
    max-width: 840px;
    margin: auto;
  }
  :deep(.bottomDiv p){
    color: #212121;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px; 
    letter-spacing: 0.16px;
    margin-bottom: 24px;
  }
  :deep(.bottomDiv img){
    max-width: fit-content;
    width: 100%;
    height: auto;
  }
</style>
