<script setup>
  const props = defineProps({
    'text':{
      type: String,
      default: '',
      required: true
    },
    'loadingShow':{
      type: Boolean,
      default: false,
      required: true
    },
  })
</script>
<template>
  <button class="_btn_noho_wi100_pa16_fs16_bcGray900_coWhite_bgGray900_br6_dif_aic_jcc">
    <div class="_loading_mr8" v-if="props.loadingShow"></div>
    {{ props.text }}
  </button>
</template>
<style scoped></style>
