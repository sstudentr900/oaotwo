<script setup>
  import publicPageNumber from '../components/publicPageNumber.vue'
  import publicFavorite from '../components/publicFavorite.vue'
  import publicNav from '../components/publicNav2.vue'
  import publicFooter from '../components/publicFooter.vue'
  import {ref,onMounted} from 'vue'
  import { useRoute,useRouter } from 'vue-router'
  const route = useRoute()
  const router = useRouter()
  const pageData = ref({
    header:[
      {src:'shop02.png'},
    ],
    leftHeader:[
      {src:'shop01.png'},
    ],
    navsort:[
      {id:'1',name:'全部商品',number:'1,680'},
      {id:'2',name:'新品登場',number:'100'},
      {id:'3',name:'獨特味蕾',number:'100'},
      {id:'4',name:'送禮推薦',number:'100'},
    ],
    // navlabel:[
    //   {id:'1',name:'中秋節'},
    //   {id:'2',name:'適合長輩'},
    //   {id:'3',name:'榴槤'},
    //   {id:'4',name:'鹹蛋黃'},
    //   {id:'5',name:'企業贈禮'},
    //   {id:'6',name:'獨享時光'},
    //   {id:'7',name:'新年伴手禮'},
    // ],
    content:[
    {id:'1',src:'shop04.png',title:'OAO - 1熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    {id:'2',src:'shop04.png',title:'OAO - 2熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    {id:'3',src:'shop04.png',title:'OAO - 3熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    {id:'4',src:'shop04.png',title:'OAO - 4熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    {id:'5',src:'shop04.png',title:'OAO - 5熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    {id:'6',src:'shop04.png',title:'OAO - 6熱情豔陽下三入組文字文字文字｜PINEAPPLE',price:'3600',specialprice:'300'},
    ],
    
  })
  const classId =  ref(1)
  const pageNow =  ref(1)
  const pageSize = ref(6)
  const pageTotle = ref(6)
  const chageClassId = (id)=>{
    classId.value = (id*1)
    // console.log('chageClassId',id,classId.value)
    // getData()
  }
  const getData = async(now)=>{
    // try{
    //   const res = await getNewsDate(now)
    //   const data = res.data
    //   // console.log(data)
    //   pageData.content.value = data.list;
    //   pageNow.value = Number(now); 
    //   pageTotle.value = Number(data.pageTotle); 
    //   router.push({ name:'news', params:{id:now} })
    // }catch(eror){
    //   console.log('news',eror)
    // }
  }
  onMounted(()=>{
    // if(route.params.id){pageNow.value = route.params.id }
    // getData(pageNow.value)
    console.log(pageNow.value)
  })
</script>
<template>
  <publicNav/>
  <div class="shop_bgGray200_patb140">
    <div class="headerDiv_mw1620_mb64">
      <div class="_dif_gap32">
        <div class="left_wi30">
          <img class="_cover" src="@img/shop01.png" alt="">
          <!-- <p>{{ pageData.header[0].src }}</p> -->
          <!-- <img class="_cover" :src="$getUrl(pageData.leftHeader[0].src)"> -->
          <!-- <img class="_cover" :src="pageData.header[0].src" @error.once="$defaultImage($event,'home_new1.png')"> -->
        </div>
        <div class="middle_wi70">
          <img class="_cover" src="@img/shop02.png" alt="">
        </div>
        <div class="right_wi10_dif_aie">
          <div class="img">
            <img src="@img/shop03.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="_mw1280_dif_gap32">
      <div class="navDiv_wi20_coGray900_fw400">
        <div class="itemDiv_mb48">
          <div class="title">商品分類</div>
          <ul class="_lsd_pal24_fs18_lh16">
            <li v-for="(data,index) in pageData.navsort" :key='index'>
              <a @click="chageClassId(data.id)" class="_mb8_usn">{{data.name}} ({{data.number}})</a>
              <!-- <a @click="classId = data.id" class="_mb8_usn">{{data.name}} ({{data.number}})</a> -->
            </li>
            <!-- <li>
              <router-link :to="{name:'shop'}" class="_mb8">全部商品 (1,680)</router-link>
            </li>
            <li>
              <router-link :to="{name:'shop'}" class="_mb8">新品登場 (100)</router-link>
            </li>
            <li>
              <router-link :to="{name:'shop'}" class="_mb8">獨特味蕾 (100)</router-link>
            </li>
            <li>
              <router-link :to="{name:'shop'}" class="_mb8">送禮推薦 (100)</router-link>
            </li> -->
          </ul>
        </div>
        <!-- <div class="itemDiv">
          <div class="title">商品標籤</div>
          <ul class="_dif_fww">
            <li v-for="(data,index) in pageData.navlabel" :key="index" class="_mb8_ml8">
              <router-link :to="{name:'shop',params:{id:data.id}}" class="_btn_coGray900_bcGray900_lh1">#{{data.name}}</router-link>
            </li>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#中秋節</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#適合長輩</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#榴槤</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#鹹蛋黃</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#企業贈禮</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#獨享時光</router-link>
            <router-link :to="{name:'shop'}" class="_btn_coGray900_bcGray900_lh1_mb8_ml8">#新年伴手禮</router-link> 
          </ul>
        </div> -->
      </div>
      <div class="contentDiv_wi80_dif_fww_gap_jcs">
        <div class="item_wi32_coGray900" v-for="(data,index) in pageData.content" :key="index">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read',params:{id:data.id}}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read',params:{id:data.id}}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">{{data.title}}</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ {{data.specialprice}}</p><span class="_fs14_coGray200_ml6_tdl">NT$ {{data.price}}</span></div>
          </router-link>
        </div>
        <!-- <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div>
        <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div>
        <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div>
        <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div>
        <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div>
        <div class="item_wi32_coGray900">
          <div class="img_por_mb16">
            <router-link :to="{name:'shop_read'}">
              <img class="_fluid" src="@img/shop04.png?1" alt="">
            </router-link>
            <publicFavorite/>
          </div>
          <router-link :to="{name:'shop_read'}">
            <div class="title_pab8_mb8_bb1slh12">
              <div class="_fs18_ellipsis2">OAO - 熱情豔陽下三入組文字文字文字｜PINEAPPLE</div>
            </div>
            <div class="price_dif_aie_mb24"><p class="_fs24_fw800">NT$ 300</p><span class="_fs14_coGray200_ml6_tdl">NT$ 3,600</span></div>
          </router-link>
        </div> -->
      </div>
    </div>
    <publicPageNumber :totle="pageTotle" :now="pageNow" :fn="getData"/>
  </div>
  <publicFooter/>
</template>
<style scoped>
[class^='headerDiv'] [class^='left'] {
  /* background: #212121; */
  background: #d19c9c;
  border-bottom-left-radius: 120px;
  overflow: hidden;
}
[class^='navDiv'] [class^='title'] {
  font-size: 24px;
  font-weight: 400;
  line-height: 1;
  color: #212121;
  border-bottom: 1px solid #D7D7D7;
  padding-bottom: 16px;
  margin-bottom: 16px;
}
:deep([class^='favorite']){
  position: absolute;
  bottom: 10px;
  right: 10px;
}
@media (max-width: 1200px){
  [class^='headerDiv'] [class^='right'],
  [class^='headerDiv'] [class^='left']{
    display: none;
  }
  [class^='headerDiv'] [class^='middle']{
    width: 100%;
  }
}
@media (max-width: 980px){
  [class^='shop']{
    padding-top: 100px;
  }
  [class^='headerDiv']{
    margin-bottom: 32px;
  }
  [class^='navDiv'] {
    display: none;
  }
  [class^='contentDiv']{
    width: 100%;
  }
}
@media (max-width: 760px){
  [class^='contentDiv'] [class^='item']{
    width: 48%;
  }
}
@media (max-width: 620px){
  [class^='contentDiv'] [class^='item']{
    width: 100%;
  }
}
</style>
