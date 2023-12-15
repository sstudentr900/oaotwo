<script setup>
  const scrollToTop = ()=>{
    window.scrollTo({
      top: 0,
      behavior: "smooth" // 使用平滑滚动
    });
  }
</script>

<template>
  <!-- <div class="publicFooter_bgGray900">
    <div class="_mw1420">
      <div class="_dif_aic_jcs_fww_patb32 topDiv">
        <div class="logoDiv" data-aos="fade" data-aos-duration="400">
          <div class="logoBox">
            <div class="logo">
              <img src="@img/footer_logo.png" alt="">
            </div>
            <div class="_dif_aic_gap24_mt24">
              <a href="#"><img src="@img/footer_link1.png" alt=""></a>
              <a href="#"><img src="@img/footer_link2.png" alt=""></a>
              <a href="#"><img src="@img/footer_link3.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="linksDiv" data-aos="fade" data-aos-duration="400">
          <div class="linkDiv">
            <div class="_title2_coWhite">快速連結</div>
            <div class="_dif_aic_gap16_fww">
              <a href="#" class="_text16_coWhite_lh1">首頁</a>
              <a href="#" class="_text16_coWhite_lh1">品牌故事</a>
              <a href="#" class="_text16_coWhite_lh1">最新消息</a>
              <a href="#" class="_text16_coWhite_lh1">聯絡我們</a>
            </div>
          </div>
          <div class="serveDiv_mt32">
            <div class="_title2_coWhite">服務項目</div>
            <div class="_dif_aic_gap16_fww">
              <a href="#" class="_text16_coWhite_lh1">線上訂購</a>
              <a href="#" class="_text16_coWhite_lh1">退換貨須知</a>
              <a href="#" class="_text16_coWhite_lh1">隱私權條款</a>
              <a href="#" class="_text16_coWhite_lh1">運送政策</a>
            </div>
          </div>
        </div>
        <div class="lineDiv" data-aos="fade" data-aos-duration="400" data-aos-delay="400">
          <div class="_title2_coWhite">線上訂購</div>
          <div class="_text12_coWhite_op06">線上刷卡可接受 VISA, Master, PayPal, Union Pay, EC Pay, Apple Pay, LINE pay</div>
          <div class="_dif_aic_fww_gap8_mt8">
            <div class="img">
              <img src="@img/footer_icon1.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon2.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon3.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon4.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon5.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon6.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon7.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon8.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon9.png" alt="">
            </div>
            <div class="img">
              <img src="@img/footer_icon10.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="_dif_aic_jcs_patb8 bottomDiv">
        <small class="_text12_coWhite" data-aos="fade" data-aos-duration="400" data-aos-delay="600">Copyright ©2023 昫島OAO. All Right Reserved.</small>
        <div class="_dif_aic_jcc_cup goto" data-aos="fade" data-aos-duration="400" data-aos-delay="800">
          <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 13.3141C27.002 13.6656 26.934 14.014 26.7999 14.3393C26.6657 14.6647 26.468 14.9606 26.2182 15.2101C25.9676 15.4604 25.6694 15.6591 25.3409 15.7946C25.0124 15.9302 24.6601 16 24.3042 16C23.9483 16 23.596 15.9302 23.2675 15.7946C22.939 15.6591 22.6408 15.4604 22.3902 15.2101L13.5213 6.37115L4.59838 14.863C4.0933 15.3603 3.41006 15.6395 2.69789 15.6395C1.98571 15.6395 1.30247 15.3603 0.797394 14.863C0.544727 14.6147 0.344179 14.3194 0.20732 13.994C0.0704611 13.6685 -1.17168e-07 13.3195 -1.32577e-07 12.967C-1.47986e-07 12.6145 0.070461 12.2654 0.20732 11.94C0.344179 11.6146 0.544727 11.3193 0.797394 11.071L11.5803 0.763348C12.0842 0.274063 12.7617 3.95841e-07 13.4674 3.64998e-07C14.173 3.34154e-07 14.8505 0.274062 15.3544 0.763348L26.1373 11.4449C26.3986 11.6846 26.6094 11.9732 26.7575 12.294C26.9055 12.6148 26.9879 12.9616 27 13.3141Z" fill="white"/>
          </svg>
          <p class="_text12_coWhite" @click="scrollToTop">Go to top</p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="publicFooter_bgGray900">
    <div class="_mw1420">
      <div class="_dif_aic_jcs_fww_patb32 topDiv">
        <div class="logoDiv">
          <div class="logoBox">
            <div class="logo">
              <img :src="$getSrc('footer_logo.png')" alt="">
            </div>
            <div class="_dif_aic_gap24_mt24">
              <a href="#"><img :src="$getSrc('footer_link1.png')" alt=""></a>
              <a href="#"><img :src="$getSrc('footer_link2.png')" alt=""></a>
              <a href="#"><img :src="$getSrc('footer_link3.png')" alt=""></a>
            </div>
          </div>
        </div>
        <div class="linksDiv">
          <div class="linkDiv">
            <div class="_title2_coWhite">快速連結</div>
            <div class="_dif_aic_gap16_fww">
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">首頁</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">品牌故事</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">最新消息</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">聯絡我們</a>
            </div>
          </div>
          <div class="serveDiv_mt32">
            <div class="_title2_coWhite">服務項目</div>
            <div class="_dif_aic_gap16_fww">
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">線上訂購</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">退換貨須知</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">隱私權條款</a>
              <a href="#" class="_text16_coWhite_lh1_op06_fw300">運送政策</a>
            </div>
          </div>
        </div>
        <div class="lineDiv">
          <div class="_title2_coWhite">線上訂購</div>
          <div class="_text12_coWhite_op06">線上刷卡可接受 VISA, Master, PayPal, Union Pay, EC Pay, Apple Pay, LINE pay</div>
          <div class="_dif_aic_fww_gap8_mt8">
            <div class="img">
              <img :src="$getSrc('footer_icon1.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon2.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon3.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon4.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon5.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon6.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon7.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon8.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon9.png')" alt="">
            </div>
            <div class="img">
              <img :src="$getSrc('footer_icon10.png')" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="_dif_aic_jcs_patb8 bottomDiv">
        <small class="_text12_coWhite_op06">Copyright ©2023 昫島OAO. All Right Reserved.</small>
        <div class="goto_dif_aic_jcc_cup_op06">
          <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 13.3141C27.002 13.6656 26.934 14.014 26.7999 14.3393C26.6657 14.6647 26.468 14.9606 26.2182 15.2101C25.9676 15.4604 25.6694 15.6591 25.3409 15.7946C25.0124 15.9302 24.6601 16 24.3042 16C23.9483 16 23.596 15.9302 23.2675 15.7946C22.939 15.6591 22.6408 15.4604 22.3902 15.2101L13.5213 6.37115L4.59838 14.863C4.0933 15.3603 3.41006 15.6395 2.69789 15.6395C1.98571 15.6395 1.30247 15.3603 0.797394 14.863C0.544727 14.6147 0.344179 14.3194 0.20732 13.994C0.0704611 13.6685 -1.17168e-07 13.3195 -1.32577e-07 12.967C-1.47986e-07 12.6145 0.070461 12.2654 0.20732 11.94C0.344179 11.6146 0.544727 11.3193 0.797394 11.071L11.5803 0.763348C12.0842 0.274063 12.7617 3.95841e-07 13.4674 3.64998e-07C14.173 3.34154e-07 14.8505 0.274062 15.3544 0.763348L26.1373 11.4449C26.3986 11.6846 26.6094 11.9732 26.7575 12.294C26.9055 12.6148 26.9879 12.9616 27 13.3141Z" fill="white"/>
          </svg>
          <p class="_text12_coWhite" @click="scrollToTop">Go to top</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .publicFooter{
    padding: 74px 0 34px;
  }
  .logoDiv .logoBox{
    width: 200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .linksDiv{
    max-width: 360px;
  }
  .linksDiv a:hover{
    opacity: 1;
  }
  .lineDiv{
    max-width: 580px;
  }
  .lineDiv ._text16_coWhite{
    opacity: .3;
  }
  .bottomDiv{
    border-top: 1px solid rgba(255,255,255,.3);
  }
  .bottomDiv [class^='goto']{
    flex: 0 0 100px;
  } 
  .bottomDiv [class^='goto'] svg{
    width: 16px;
    height: auto;
    margin-right: 8px;
  }
  @media (max-width: 1280px){
    .topDiv{
      justify-content: flex-start;
    }
    .logoDiv{
      width: 100%;
      margin-bottom: 32px;
      margin-top: 32px;
    }
    .linksDiv{
      flex: 0 0 340px;
      margin-right: 48px;
    }
    .linksDiv .serveDiv_mt32{
      margin-top: 24px;
    }
    .lineDiv{
      flex: 1 1;
    }
    ._dif_aic_gap24_mt32{
      margin-top: 24px;
    }
  }
  @media (max-width: 960px){
    .lineDiv,
    .logoDiv,
    .linksDiv{
      flex: 0 1 100%;
      max-width: 100%;
      width: 100%;
    }
    .linksDiv{
      margin-right: 0;
    }
    .lineDiv{
      margin-top: 48px;
    }
    .lineDiv ._text16_coWhite{
      line-height: 1.6;
    }
  }
  @media (max-width: 780px){
    ._dif_aic_gap24_mt24{
      margin-top: 16px;
    }
    .logoDiv {
      margin-bottom: 36px;
      margin-top: 0;
    }
    .lineDiv {
      margin-top: 36px;
    }
  }

</style>
