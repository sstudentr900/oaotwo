require('./bootstrap');
import router from "./router"; // 引入路由
// import './router/permisstion' //路由守衛
import { getSrc, defaultImage } from './composables/public'; //自訂函數
// 引入 Vee Validate 元件跟功能
import {Form, Field, ErrorMessage, defineRule, configure} from 'vee-validate'
// 引入 Vee Validate 全部驗證規則
import { required, email, min, max, numeric, regex, confirmed } from '@vee-validate/rules';
// 引入 Vee Validate 多國語系功能
import { localize, setLocale } from '@vee-validate/i18n'
// 引入 Vee Validate 繁體中文語系檔
import zhTW from '@vee-validate/i18n/dist/locale/zh_TW.json'
// 注册内置验证规则
defineRule('required', required);
defineRule('email', email);
defineRule('min', min);
defineRule('max', max);
defineRule('numeric', numeric); //數字
defineRule('confirmed', confirmed); //確認
defineRule('regex', regex); //正規
//將當前 Vee Validate 語系設定為繁體中文1
configure({
  generateMessage: localize({ zh_TW: zhTW }), // 載入繁體中文語系
  validateOnInput: true, // 指欄位輸入內容時，會立即進行驗證（即邊寫邊判斷）
  generateMessage: localize('zh_TW',{
    names: {
      name: '姓名',
      phone: '電話',
      email: '電郵',
      content: '內容',
      passwords: '密碼',
      account: '帳號',
      terms: '條款',
      verify: '驗證碼'
    },
  }),
})
// *設定預設語系
setLocale('zh_TW')

import { createApp } from 'vue';

const app = createApp()
//路由
app.use(router);
// 全局函数
app.config.globalProperties.$getSrc = getSrc;
// app.config.globalProperties.$defaultImage = defaultImage;
// 註冊全域的表單驗證元件（VForm, VField, ErrorMessage）
app.component('VForm', Form)
app.component('VField', Field)
app.component('ErrorMessage', ErrorMessage)

app.mount('#app');
