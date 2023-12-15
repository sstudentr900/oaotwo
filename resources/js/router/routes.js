import Home from '../views/Home.vue'
// import Story from '../views/Story.vue'
// import Products from '../views/Products.vue'
// import Address from '../views/Address.vue'
// import Member from '../views/Member.vue'
// import Cart from '../views/Cart.vue'
// import Checkout from '../views/Checkout.vue'
// import News from '../views/News.vue'
// import News_read from '../views/News_read.vue'
// import Contact from '../views/Contact.vue'
// import Successful from '../views/Successful.vue'
// import Shop from '../views/Shop.vue'
// import Nested from '../views/Nested.vue'
// import Shop_read from '../views/Shop_read.vue'
// import Login from '../views/Login.vue'
// import Logout from '../views/Logout.vue'
// import Regisiter from '../views/Regisiter.vue'
// import Regisiter_enter from '../views/Regisiter_enter.vue'
// import Regisiter_ok from '../views/Regisiter_ok.vue'
// import Info from '../views/Info.vue'
// import Forget from '../views/Forget.vue'
// import Forget_enter from '../views/Forget_enter.vue'
// import Order from '../views/Order.vue'
// import Orderserch from '../views/Orderserch.vue'
// import Collect from '../views/Collect.vue'
import Balogin from '../views/Balogin.vue'
import Baconservator from '../views/Baconservator.vue'
import BaconservatorEdit from '../views/BaconservatorEdit.vue'
// import Banews from '../views/Banews.vue'
import Test from '../views/Test.vue'
import Error from '../views/Error.vue'
const customPath = process.env.MIX_URL
// console.log('router',customPath)
const constantRouter=[
  { 
    path: '/',
    component: Home,
    name: 'home',
  },
  // {
  //   path: "/requires_auth",
  //   component: RequiresAuth,
  //   name: "requiresauth",
  //   meta: {
  //       requiresAuth: true,
  //   },
  // },
  // {
  //   path: `${customPath}/shop/:id?`,
  //   name: 'shop',
  //   component: Shop,
  //   meta:{
  //     title: 'Shop',
  //     title_ch: '商店',
  //   },
  // },
  // {
  //   path: `${customPath}/shop_read/:id?`,
  //   name: 'shop_read',
  //   component: Shop_read,
  //   meta:{
  //     title: 'Shop_read',
  //     title_ch: '商品',
  //   },
  // },
  // {
  //   path: '/products',
  //   name: 'products',
  //   component: Products,
  //   meta:{
  //     title: 'Products',
  //     title_ch: '商品',
  //   },
  // },
  // {
  //   path: '/news/:id?',
  //   name: 'news',
  //   component: News,
  //   meta:{
  //     title: 'News',
  //     title_ch: '最新消息',
  //   },
  // },
  // {
  //   path: '/news_read/:id?',
  //   name: 'news_read',
  //   component: News_read,
  //   meta:{
  //     title: 'News',
  //     title_ch: '最新消息',
  //   },
  // },
  // {
  //   path: '/story',
  //   name: 'story',
  //   component: Story,
  //   meta:{
  //     title: 'Story',
  //     title_ch: '品牌故事',
  //   },
  // },
  // {
  //   path: '/address',
  //   name: 'address',
  //   component: Address,
  //   meta:{
  //     title: 'Store',
  //     title_ch: '門市',
  //   },
  // },
  // {
  //   path: '/contact',
  //   name: 'contact',
  //   component: Contact,
  //   meta:{
  //     title: 'Contact us',
  //     title_ch: '聯絡我們',
  //   },
  // },
  // {
  //   path: '/cart',
  //   name: 'cart',
  //   component: Cart,
  //   meta:{
  //     title: 'Cart',
  //     title_ch: '購物車',
  //   },
  // },
  // {
  //   path: '/checkout',
  //   name: 'checkout',
  //   component: Checkout,
  //   meta:{
  //     title: 'Checkout',
  //     title_ch: '結帳',
  //   },
  // },
  // {
  //   path: '/successful',
  //   name: 'successful',
  //   component: Successful,
  //   meta:{
  //     title: 'Successful',
  //     title_ch: '完成訂購',
  //   },
  // },
  // {
  //   path: '/orderserch',
  //   component: Orderserch,
  //   name: 'orderserch',
  //   meta:{
  //     title: 'Order',
  //     title_ch: '訂單查詢',
  //   }
  // },
  // {
  //   path: 'member',
  //   name: 'member',
  //   component: member,
  //   meta:{
  //     title: 'member',
  //     title_ch: '會員',
  //   },
  // },
  // {
  //   path: '/shop',
  //   // name: 'shop',
  //   component: Nested,
  //   // redirect: '/shop/products',
  //   meta:{
  //     title: 'Shop',
  //     title_ch: '商店',
  //   },
  //   children:[
  //     {
  //       path: '',
  //       name: 'shop',
  //       component: Shop,
  //       // meta:{
  //       //   title: 'Shop',
  //       //   title_ch: '商店',
  //       // },
  //     },
  //     {
  //       path: 'shop_read',
  //       name: 'shop_read',
  //       component: Shop_read,
  //       meta:{
  //         title: 'Shop_read',
  //         title_ch: '商品介紹',
  //       },
  //     },
  //     {
  //       path: 'products',
  //       name: 'products',
  //       component: Products,
  //       meta:{
  //         title: 'Products',
  //         title_ch: '商品',
  //       },
  //     },
  //     {
  //       path: 'news/:id?',
  //       name: 'news',
  //       component: News,
  //       meta:{
  //         title: 'News',
  //         title_ch: '最新消息',
  //       },
  //     },
  //     {
  //       path: 'news_read/:id?',
  //       name: 'news_read',
  //       component: News_read,
  //       meta:{
  //         title: 'News',
  //         title_ch: '最新消息',
  //       },
  //     },
  //     {
  //       path: 'story',
  //       name: 'story',
  //       component: Story,
  //       meta:{
  //         title: 'Story',
  //         title_ch: '品牌故事',
  //       },
  //     },
  //     {
  //       path: 'address',
  //       name: 'address',
  //       component: Address,
  //       meta:{
  //         title: 'Store',
  //         title_ch: '門市',
  //       },
  //     },
  //     {
  //       path: 'contact',
  //       name: 'contact',
  //       component: Contact,
  //       meta:{
  //         title: 'Contact us',
  //         title_ch: '聯絡我們',
  //       },
  //     },
  //     {
  //       path: 'cart',
  //       name: 'cart',
  //       component: Cart,
  //       meta:{
  //         title: 'Cart',
  //         title_ch: '購物車',
  //       },
  //     },
  //     {
  //       path: 'checkout',
  //       name: 'checkout',
  //       component: Checkout,
  //       meta:{
  //         title: 'Checkout',
  //         title_ch: '結帳',
  //       },
  //     },
  //     {
  //       path: 'successful',
  //       name: 'successful',
  //       component: Successful,
  //       meta:{
  //         title: 'Successful',
  //         title_ch: '完成訂購',
  //       },
  //     },
  //   ]
  // },
  // {
  //   path: '/member',
  //   component: Nested,
  //   name: 'member',
  //   meta:{
  //     title: 'Member',
  //     title_ch: '會員',
  //   },
  //   redirect: '/member/login',
  //   children:[ 
  //     {
  //       path: 'login',
  //       component: Login,
  //       name: 'login',
  //       meta:{
  //         title: 'Login',
  //         title_ch: '登入',
  //       }
  //     },
  //     {
  //       path: 'logout',
  //       component: Logout,
  //       name: 'logout',
  //       meta:{
  //         title: 'Logout',
  //         title_ch: '登出',
  //       }
  //     },
  //     {
  //       path: 'register',
  //       component: Regisiter,
  //       name: 'register',
  //       meta:{
  //         title: 'Register',
  //         title_ch: '註冊',
  //       }
  //     },
  //     {
  //       path: 'register_enter',
  //       component: Regisiter_enter,
  //       name: 'register_enter',
  //       meta:{
  //         title: 'Register',
  //         title_ch: '註冊',
  //       }
  //     },
  //     {
  //       path: 'register_ok',
  //       component: Regisiter_ok,
  //       name: 'register_ok',
  //       meta:{
  //         title: 'Register',
  //         title_ch: '註冊',
  //       }
  //     },
  //     {
  //       path: 'forget',
  //       component: Forget,
  //       name: 'forget',
  //       meta:{
  //         title: 'Forget',
  //         title_ch: '忘記密碼',
  //       }
  //     },
  //     {
  //       path: 'forget_enter',
  //       component: Forget_enter,
  //       name: 'forget_enter',
  //       meta:{
  //         title: 'Forget',
  //         title_ch: '忘記密碼',
  //       }
  //     },
  //     {
  //       path: 'info',
  //       component: Info,
  //       name: 'info',
  //       meta:{
  //         title: 'Info',
  //         title_ch: '個人資訊',
  //       }
  //     },
  //     {
  //       path: 'order',
  //       component: Order,
  //       name: 'order',
  //       meta:{
  //         title: 'Order',
  //         title_ch: '訂單查詢',
  //       },
  //       children:[
  //         {
  //           path: 'order_unpaid',
  //           component: Order_serch,
  //           name: 'order_unpaid',
  //           meta:{
  //             title: 'Unpaid',
  //             title_ch: '未付款',
  //           }
  //         },
  //         {
  //           path: 'order_handle',
  //           component: Order_serch,
  //           name: 'order_handle',
  //           meta:{
  //             title: 'Handle',
  //             title_ch: '處理中',
  //           }
  //         },
  //         {
  //           path: 'order_reward',
  //           component: Order_serch,
  //           name: 'order_reward',
  //           meta:{
  //             title: 'Reward',
  //             title_ch: '待收貨',
  //           }
  //         },
  //         {
  //           path: 'order_finish',
  //           component: Order_serch,
  //           name: 'order_finish',
  //           meta:{
  //             title: 'Finish',
  //             title_ch: '已完成',
  //           }
  //         },
  //         {
  //           path: 'order_cancel',
  //           component: Order_serch,
  //           name: 'order_cancel',
  //           meta:{
  //             title: 'Order',
  //             title_ch: '已取消',
  //           }
  //         },
  //       ]
  //     },
  //     {
  //       path: 'orderserch',
  //       component: Orderserch,
  //       name: 'orderserch',
  //       meta:{
  //         title: 'Order',
  //         title_ch: '訂單查詢',
  //       }
  //     },
  //     {
  //       path: 'collect',
  //       component: Collect,
  //       name: 'collect',
  //       meta:{
  //         title: 'Collect',
  //         title_ch: '我的收藏',
  //       }
  //     },
  //   ]
  // },
  {
    path: '/balogin2',
    name: 'balogin',
    component: Balogin,
    meta:{
      title: '',
      title_ch: '',
    },
  },
  {
    path: '/baconservator/:id?',
    name: 'baconservator',
    component: Baconservator,
    meta:{
      title: 'conservator',
      title_ch: '管理員',
    },
  },
  {
    path: '/baconservator/add/',
    name: 'baconservatoradd',
    component: BaconservatorEdit,
    meta:{
      title: 'conservator',
      title_ch: '新增',
    },
  },
  {
    path: '/baconservator/edit/:id?',
    name: 'baconservatoredit',
    component: BaconservatorEdit,
    meta:{
      title: 'conservator',
      title_ch: '編輯',
    },
  },
  // {
  //   path: '/banews/:id?',
  //   name: 'banews',
  //   component: Banews,
  //   meta:{
  //     title: 'news',
  //     title_ch: '最新消息',
  //   },
  // },
  {
    path: '/test',
    component: Test,
    meta:{
      hidden: true
    }
  },
  // 找不到頁面，要放在最後
  {
    path: '/404',
    component: Error,
    name: 'error',
    meta:{
      hidden: true
    }
  },
  {
    path: '/:error(.*)*',
    redirect: '/404',
    name: 'any',
    meta:{
      hidden: true
    }
  },
]

export default constantRouter;