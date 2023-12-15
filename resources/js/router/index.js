import { createRouter, createWebHistory } from 'vue-router'
import constantRouter from './routes'

const router = createRouter({
  // import.meta.env.BASE_URL 用於指定應用程序的根路徑。如果應用程序可能在不同的 URL 路徑下運行（如子目
  // 錄或子網站）就建議使用這個參數來設置。若無任何子目錄則可寫 history: createWebHistory()
    // history: createWebHistory(import.meta.env.BASE_URL),
    history: createWebHistory(),
    routes: constantRouter,
    //滾動行為
    scrollBehavior(){
      return{
        left:0,
        top:0,
      }
    }
  })

  // 將路由實例導出，以便其他地方可以導入並使用它
  export default router