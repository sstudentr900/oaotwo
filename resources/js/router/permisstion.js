import router from './router'
// import nprogress from 'nprogress'
// import 'nprogress/nprogress.css'
// nprogress.configure({showSpinner: false}) //圈圈關閉
// import useUserStore from '../store/user'
// import { createPinia } from 'pinia' //全端資料管理
// import pinia from './store/'
// const userStore = useUserStore(createPinia())
// console.log(userStore.token)

//全局前守衛 切換路由都會觸發
router.beforeEach(async (to,from,next)=>{

  // to 你要訪問的路由
  // from 你從拿個路由來的
  // next() 路由放行函數

  //引入store
  const userStore = useUserStore()

  //改變title
  document.title = to.meta.title_ch

  //進度條開始
  nprogress.start() 


  //test
  // await userStore.useUserInfo();
  // console.log('取用戶訊息',userStore.name)

  //全放行
  // next();

  //有登入取得token
  if(userStore.token){
    //不能去登入
    // console.log('有登入取得token',userStore.token)
    if(to.name=='login' || to.name.indexOf('register')===0){
      console.log('有token不能去[login,register]',to.name)
      next({name:'info'});
    }else{
      //判斷用戶訊息
      if(userStore.name){
        console.log('有token和用戶訊息放行')
        //放行
        next();
      }else{
        //網址改變Store訊息會消失要取戶訊訊息
        //to 改變Store訊息不會消失
        try{
          //沒用戶訊息取訊息
          await userStore.useUserInfo();
          console.log('有token沒有用戶訊息取用戶訊息',userStore.name)
          next();
        }catch(error){
          //tokene過期 登出
          console.log('tokene過期 登出')
          userStore.useLogout();
          next({name:'login',query:{redirect:to.path}});
        }
      }
    }
  }else{
    // console.log('沒有登入')
    // console.log(。to.name,to.name=='info' , to.name=='collect' , to.name.indexOf('order')===0)
    if(to.name=='info' || to.name=='collect' || to.name.indexOf('order')===0){
      console.log('沒有登入不能去[info,collect,order]',to.name)
      next({name:'login',query:{redirect:to.path}});
    }else{
      console.log('沒有登入但能去',to.name)
      next();
    }
  }


})


//全局後守衛
router.afterEach((to,from,next)=>{
  nprogress.done() //進度條結束
})

//切換-進度條 nprogress