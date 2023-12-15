<script setup>
  const props = defineProps({
    id:{
      type: String,
      default: 'email',
      // required: true
    },
    text:{
      type: String,
      default: '信箱',
      // required: true
    },
    required:{
      type: Boolean,
      default: false,
    }
  })
</script>
<template>
  <div class="inputDiv_dif_fdc">
    <div class="label_text16">
      <label :for="props.id">{{props.text}}<span class="_coRed" v-if="props.required">*</span></label>
    </div>
    <div class="input_wi100_por">
      <v-field
        :id="props.id"
        class="inputTag_wi100_fs16_pa16_bcGray900_bw1_br6_bss_lh1"
        type="email"
        :name="props.id"
        :placeholder="`請輸入${props.text}`"
        rules="required|email|max:50"
      ></v-field>
      <error-message :name="props.id" class="_formError"></error-message>
    </div>
  </div>
</template>
<style scoped></style>
