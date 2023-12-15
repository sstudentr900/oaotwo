<script setup>
  import publicTitle from '../components/publicTitle.vue'
  import useUserStore from '../store/user'
  import {onMounted} from 'vue'
  const userStore = useUserStore()
  onMounted(async()=>{
    // await userStore.useUserInfo()
    // console.log(userStore.email)
    // console.log(userStore.name)
  })
  const onSubmit = (value)=>{
    console.log(value)
  } 
</script>
<template>
  <div class="info_bgGray200_patb140">
    <div class="_mw980">
      <!-- <div class="publichyperlink_dif_coGray900_text14_mb8_aic">
        <a href="#">會員</a>
        <div class="icon_pal8_par8">
          <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 7 12" fill="none">
            <path d="M1 11L5.92929 6.07071C5.96834 6.03166 5.96834 5.96834 5.92929 5.92929L1 1" stroke="#A4A4A4" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <p>個人資訊</p>
      </div> -->
      <!-- <div class="_title3">Info <span>個人資訊</span></div> -->
      <publicTitle :LoginShowMenu="true"/>
      <div class="contentDiv_dif">
        <div class="_wi50_par16">
          <div class="_fs18_fw800_coGray900_mb24">訂購人資料</div>
          <v-form id="form" ref="form" v-slot="{ errors }"  @submit="onSubmit">
            <!-- <div class="_dif_mb24_fdc">
              <div class="label_fs14_mb8">
                <label for="name">E-mail 郵箱</label>
              </div>
              <div class="input_wi100_por_dif_aic">
                <p class="_fs18_fw400_coGray900_lh14">mj168@gmail.com</p>
                <p class="_dif_aic_ml16">
                  <svg class="" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 6.99449C14 6.04519 13.5832 5.14961 12.8761 4.5868C12.9579 3.63984 12.6193 2.71215 11.9479 2.04017C11.2765 1.36936 10.3511 1.03132 9.45085 1.13232C8.27503 -0.359926 5.73482 -0.38795 4.58644 1.11189C3.63831 1.02782 2.71179 1.36819 2.04039 2.04017C1.36958 2.71157 1.03096 3.63984 1.13255 4.53718C-0.359705 5.713 -0.388313 8.25321 1.11211 9.40217C1.03038 10.3491 1.36899 11.2768 2.04039 11.9488C2.71179 12.6196 3.63831 12.9588 4.5374 12.8567C5.71322 14.3489 8.25343 14.3769 9.40181 12.8771C10.3476 12.9565 11.2759 12.6208 11.9479 11.9488C12.6187 11.2774 12.9573 10.3491 12.8557 9.4518C13.5832 8.83995 14 7.94437 14 6.99507V6.99449ZM10.2285 6.15729L7.46177 8.82419C6.78278 9.50201 5.67177 9.49617 4.99278 8.8166L3.67801 7.59524C3.44215 7.37573 3.42814 7.00617 3.64765 6.7703C3.86776 6.53385 4.2379 6.52101 4.4726 6.73994L5.80254 7.9759C6.04658 8.21935 6.41556 8.21877 6.64325 7.99049L9.41757 5.316C9.64994 5.09298 10.0195 5.0994 10.2431 5.33118C10.4673 5.56296 10.4603 5.9331 10.2285 6.1567V6.15729Z" fill="#39AB67"/>
                  </svg>
                  <span class="_fs14_fw400_coGray500_ml6">完成驗證</span>
                </p>
              </div>
            </div>
            <div class="_dif_mb24_fdc">
              <div class="label_fs14_mb8">
                <label for="phone">密碼</label>
              </div>
              <div class="input_wi100_por_dif_aic_jcs">
                <p class="_fs18_fw400_coGray900">**********</p>
                <router-link class="_btn_noho_bgGray900_bcGray900_br0" :to="{name:'forget'}">變更密碼</router-link>
              </div>
            </div> -->
            <div class="_dif_mb24_gap8">
              <div class="_wi50_dif_fdc">
                <div class="label_fs14_mb8">
                  <label for="name">姓名<span class="_coRed">*</span></label>
                </div>
                <div class="input_wi100_por">
                  <v-field
                    class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                    type="text" 
                    name="name"
                    placeholder="請輸入姓名"
                    rules="required|max:50"
                    :class="{ 'error': errors['name'] }"
                  ></v-field>
                  <error-message name="name" class="_formError"></error-message>
                </div>
              </div> 
              <div class="_wi50_dif_fdc">
                <div class="label_fs14_mb8">
                  <label for="birthday">生日<span class="_coRed">*</span></label>
                </div>
                <div class="input_wi100_por">
                  <v-field
                    class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                    type="date" 
                    name="birthday"
                    placeholder="請輸生日"
                    rules="required"
                    :class="{ 'error': errors['birthday'] }"
                  ></v-field>
                  <error-message name="birthday" class="_formError"></error-message>
                </div>
              </div> 
            </div>
            <div class="_dif_mb24_gap8">
              <div class="_wi50_dif_fdc">
                <div class="label_fs14_mb8">
                  <label for="name">手機號碼<span class="_coRed">*</span></label>
                </div>
                <div class="input_wi100_por">
                  <v-field
                    class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                    type="text" 
                    name="name"
                    placeholder="請輸入手機號碼"
                    rules="required|max:50"
                    :class="{ 'error': errors['name'] }"
                  ></v-field>
                  <error-message name="name" class="_formError"></error-message>
                </div>
              </div> 
              <div class="_wi50_dif_fdc">
                <div class="label_fs14_mb8">
                  <label for="birthday">生日<span class="_coRed">*</span></label>
                </div>
                <div class="input_wi100_por">
                  <v-field
                    class='inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1' 
                    type="date" 
                    name="birthday"
                    placeholder="請輸生日"
                    rules="required"
                    :class="{ 'error': errors['birthday'] }"
                  ></v-field>
                  <error-message name="birthday" class="_formError"></error-message>
                </div>
              </div> 
            </div>
            <!-- <formPassword :errors="errors" :required="true"/>
            <formButton :loadingShow="loadingShow" text="下一步" /> -->
          </v-form>
        </div>
        <div class="_wi50_pal16">
          <div class="_fs18_fw800_coGray900_mb24">常寄收件人資料</div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped></style>
