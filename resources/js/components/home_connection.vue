<script setup>
  import publicContact from './publicContact.vue'
  import publicStore from './publicStore.vue'
</script>

<template>
  <div id="home_connection" class="home_connection_dif_fww_bgGray800">
    <div class="contact_dif_jce_wi50">
      <div class="contentDiv" data-aos="fade-up" data-aos-duration="600">
        <div class="_title_tac">
          <h4 class="big">CONTACT US</h4>
          <p class="small">聯絡我們</p>
        </div>
        <publicContact/>
      </div>
    </div>
    <div class="store_dif_wi50">
      <div class="contentDiv" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
        <div class="_title_tac">
          <h4 class="big">STORE</h4>
          <p class="small">門市資訊</p>
        </div>
        <publicStore/>
      </div>
    </div>
  </div>
</template>

<style scoped>
  [class^='home_connection']>div{
    padding: 100px 60px;
  }
  [class^='home_connection'] [class*='_title'] .big{
    padding: 0 12px 12px;
  }
  [class^='home_connection'] .contentDiv{
    max-width: 600px;
    width: 100%;
  }
  [class^='store']{
    border-left: 2px solid rgba(255,255,255,.3);
  }
  @media (max-width: 1200px){
    [class^='home_connection']{
      padding: 20px 0;
    } 
    [class^='home_connection']>div{
      width: 100%;
      padding: 60px 30px;
      justify-content: center;
    }
    [class^='store']{
      border-top: 2px solid rgba(255,255,255,.3);
      border-left: none;
      text-align: center;
    }
  }
</style>
