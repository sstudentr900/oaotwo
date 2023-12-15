<script setup>
  const props = defineProps({
    id:{
      type: String,
      default: 'photo',
      // required: true
    },
    text:{
      type: String,
      default: '大頭照',
      // required: true
    },
    required:{
      type: Boolean,
      default: false,
    }
  })
</script>
<template>
  <div class="inputDiv_dif">
    <div class="label_text16">
      <label :for="props.id">{{ props.text }} <span class="_coRed" v-if="props.required">*</span></label>
    </div>
    <div class="_dif_fdc"> 
      <div class="imgs_dif_aic_gap16_mb8">
        <div class="img">
          <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H100V100H0V0Z" fill="url(#paint0_linear_582_637)"/>
            <path d="M0 0H100V100H0V0Z" fill="url(#paint1_linear_582_637)"/>
            <path d="M49.8757 59.8334C60.8754 59.8334 69.7924 50.9164 69.7924 39.9167C69.7924 28.917 60.8754 20 49.8757 20C38.876 20 29.959 28.917 29.959 39.9167C29.959 50.9164 38.876 59.8334 49.8757 59.8334Z" fill="white"/>
            <path d="M49.8751 66.4727C33.3831 66.491 20.0184 79.8558 20 96.3477C20 98.181 21.4861 99.6671 23.3194 99.6671H76.4306C78.2638 99.6671 79.75 98.181 79.75 96.3477C79.7318 79.8558 66.367 66.4909 49.8751 66.4727Z" fill="white"/>
            <defs>
            <linearGradient id="paint0_linear_582_637" x1="21.5" y1="-20.5" x2="21.5" y2="79.5" gradientUnits="userSpaceOnUse">
            <stop offset="0.03125" stop-color="#FFF1CC"/>
            <stop offset="0.473958" stop-color="#FFE9B0" stop-opacity="0.262661"/>
            <stop offset="1" stop-color="#FDF2CB" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint1_linear_582_637" x1="13.0441" y1="-6.89706" x2="82.9706" y2="102.735" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FEB665"/>
            <stop offset="1" stop-color="#F66EB4"/>
            </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
      <div class="input_dif_aic_gap16">
        <div class="_por">
          <v-field
            :id="props.id"
            class='inputTag' 
            type="file" 
            :name="props.id"
            rules="required"
          >
          <div class="file_btn2">
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_582_607)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 33C28.9558 33 35 26.9558 35 19.5C35 12.0442 28.9558 6 21.5 6C14.0442 6 8 12.0442 8 19.5C8 26.9558 14.0442 33 21.5 33Z" fill="#5E7DA3"/>
              </g>
              <path d="M22.3397 14.7495C22.3397 14.2859 21.9639 13.9102 21.5003 13.9102C21.0368 13.9102 20.661 14.2859 20.661 14.7495V18.661H16.7495C16.2859 18.661 15.9102 19.0368 15.9102 19.5003C15.9102 19.9639 16.2859 20.3397 16.7495 20.3397H20.661V24.2511C20.661 24.7147 21.0368 25.0905 21.5003 25.0905C21.9639 25.0905 22.3397 24.7147 22.3397 24.2511V20.3397H26.2511C26.7147 20.3397 27.0905 19.9639 27.0905 19.5003C27.0905 19.0368 26.7147 18.661 26.2511 18.661H22.3397V14.7495Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
              <defs>
              <filter id="filter0_d_582_607" x="0" y="0" width="43" height="43" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dy="2"/>
              <feGaussianBlur stdDeviation="4"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0.247059 0 0 0 0 0.25098 0 0 0 0 0.941176 0 0 0 0.2 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_582_607"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_582_607" result="shape"/>
              </filter>
              </defs>
            </svg>
            <p class="text">上傳檔案</p>
          </div>
          </v-field>
          <error-message :name="props.id" class="_formError"></error-message>
        </div>
        <div class="text_fs14_coGray700">
          上傳檔案須小於 10 MB，建議尺寸：寬200px × 高200px 。圖片格式：JPG、PNG。
        </div>
      </div>
    </div> 
  </div>
</template>
<style scoped>
[class^='file']{
  padding: 0 8px 0 0;
}
[class^='file'] svg{
  margin-bottom: -4px;
}
[class^='text']{
  max-width: 420px;
}
</style>
