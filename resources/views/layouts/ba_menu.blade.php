{{-- @once
@push('customStyle') --}}
<style>
  [class^='baNavDiv']{
    width: 90px;
    min-height: 840px;
    height: 100vh;
    background: #363740;
  }
  [class^='baNavDiv'] [class^='customImg']{
    width: 70px;
    height: 70px;
    background: #8595A8;
    border-radius: 60px;
    padding: 8px;
    overflow: hidden;
  }
  [class^='baNavDiv'] [class^='text']{
    font-size: 14px;
    color: #8595A8;
    margin-top: 2px;
  }
  [class^='baNavDiv'] [class^='topDiv']>ul>li{
    margin-bottom: 24px;
    position: relative;
  }
  [class^='baNavDiv'] [class^='topDiv']>ul>li>a:hover svg path,
  [class^='baNavDiv'] [class^='topDiv']>ul>li>a.active svg path{
    fill: #fff
  }
  [class^='baNavDiv'] [class^='topDiv']>ul>li>a:hover p,
  [class^='baNavDiv'] [class^='topDiv']>ul>li>a.active p{
    color: #fff
  }
  [class^='baNavDiv'] [class^='topDiv'] ul ul{
    position: absolute;
    top: 0;
    left: 90px;
    width: 120px;
    border-radius: 3px;
    border: 1px solid #DCDFE7;
    background: #FFF;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    display: none;
  }
  [class^='baNavDiv'] [class^='topDiv'] ul ul a{
    padding: 12px;
    font-size: 16px;
    color: #363740;
  }
  [class^='baNavDiv'] [class^='topDiv'] ul ul a:hover{
    background: #363740;
    color: #fff;
  }
  [class^='baNavDiv'] [class^='topDiv'] ul ul a+a{
    border-top: 1px solid #D7DBE4;
  }
  [class^='baNavDiv'] ul li:hover > ul {
    display: block; 
  }
  [class^='baNavDiv'] [class^='bottomDiv'] [class^='customImg']{
    padding: 0;
    width: 50px;
    height: 50px;
  }
  [class^='baNavDiv'] [class^='bottomDiv'] [class^='text']{
    margin-top: 0;
    margin-left: 6px;
  }
  [class^='baNavDiv'] [class^='bottomDiv'] a:hover svg path{
    fill: #fff
  }
  [class^='baNavDiv'] [class^='bottomDiv'] a:hover p{
    color: #fff
  }
</style>
{{-- @endpush
@endonce --}}
<div class="baNavDiv_pof_dif_fww_acs_patb24">
  <div class="topDiv_tac_wi100">
    <ul>
      <li class="logo_dif_aic_jcc">
        <div class="customImg_dif_aic_jcc">
          <img class="_fluid" src="{{ URL::asset('/img/footer_logo.png') }}" alt="">
        </div>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
              <path d="M32.6304 12.7765L21.9258 2.06402C20.6009 0.74224 18.8064 0 16.9355 0C15.0646 0 13.27 0.74224 11.9452 2.06402L1.24054 12.7765C0.845979 13.1687 0.533159 13.6355 0.320214 14.1496C0.107268 14.6638 -0.0015671 15.2151 1.70476e-05 15.7716V29.6346C1.70476e-05 30.7581 0.446084 31.8357 1.24009 32.6302C2.03409 33.4246 3.11099 33.871 4.23388 33.871H29.6371C30.76 33.871 31.8369 33.4246 32.6309 32.6302C33.4249 31.8357 33.8709 30.7581 33.8709 29.6346V15.7716C33.8725 15.2151 33.7637 14.6638 33.5508 14.1496C33.3378 13.6355 33.025 13.1687 32.6304 12.7765ZM21.1693 31.0467H12.7016V25.4914C12.7016 24.3678 13.1477 23.2902 13.9417 22.4958C14.7357 21.7013 15.8126 21.2549 16.9355 21.2549C18.0584 21.2549 19.1353 21.7013 19.9293 22.4958C20.7233 23.2902 21.1693 24.3678 21.1693 25.4914V31.0467ZM31.0484 29.6346C31.0484 30.0091 30.8997 30.3683 30.635 30.6331C30.3703 30.8979 30.0114 31.0467 29.6371 31.0467H23.9919V25.4914C23.9919 23.6187 23.2485 21.8228 21.9251 20.4987C20.6018 19.1746 18.807 18.4307 16.9355 18.4307C15.064 18.4307 13.2692 19.1746 11.9458 20.4987C10.6225 21.8228 9.87904 23.6187 9.87904 25.4914V31.0467H4.23388C3.85959 31.0467 3.50062 30.8979 3.23595 30.6331C2.97128 30.3683 2.82259 30.0091 2.82259 29.6346V15.7716C2.8239 15.3974 2.97246 15.0387 3.2361 14.7732L13.9407 4.06501C14.7363 3.2727 15.813 2.8279 16.9355 2.8279C18.0579 2.8279 19.1347 3.2727 19.9302 4.06501L30.6349 14.7775C30.8975 15.0419 31.046 15.3988 31.0484 15.7716V29.6346Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">首頁</p>
        </a>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <path d="M9.87902 0.193359H5.64515C4.14797 0.193359 2.7121 0.788115 1.65343 1.84679C0.594756 2.90546 0 4.34133 0 5.83851L0 10.0724C0 11.5696 0.594756 13.0054 1.65343 14.0641C2.7121 15.1228 4.14797 15.7175 5.64515 15.7175H9.87902C11.3762 15.7175 12.8121 15.1228 13.8707 14.0641C14.9294 13.0054 15.5242 11.5696 15.5242 10.0724V5.83851C15.5242 4.34133 14.9294 2.90546 13.8707 1.84679C12.8121 0.788115 11.3762 0.193359 9.87902 0.193359ZM12.7016 10.0724C12.7016 10.821 12.4042 11.5389 11.8749 12.0682C11.3455 12.5976 10.6276 12.895 9.87902 12.895H5.64515C4.89656 12.895 4.17863 12.5976 3.64929 12.0682C3.11996 11.5389 2.82258 10.821 2.82258 10.0724V5.83851C2.82258 5.08992 3.11996 4.37199 3.64929 3.84265C4.17863 3.31331 4.89656 3.01594 5.64515 3.01594H9.87902C10.6276 3.01594 11.3455 3.31331 11.8749 3.84265C12.4042 4.37199 12.7016 5.08992 12.7016 5.83851V10.0724Z" fill="#8595A8"/>
              <path d="M28.2267 0.193359H23.9928C22.4956 0.193359 21.0598 0.788115 20.0011 1.84679C18.9424 2.90546 18.3477 4.34133 18.3477 5.83851V10.0724C18.3477 11.5696 18.9424 13.0054 20.0011 14.0641C21.0598 15.1228 22.4956 15.7175 23.9928 15.7175H28.2267C29.7239 15.7175 31.1597 15.1228 32.2184 14.0641C33.2771 13.0054 33.8718 11.5696 33.8718 10.0724V5.83851C33.8718 4.34133 33.2771 2.90546 32.2184 1.84679C31.1597 0.788115 29.7239 0.193359 28.2267 0.193359ZM31.0493 10.0724C31.0493 10.821 30.7519 11.5389 30.2225 12.0682C29.6932 12.5976 28.9753 12.895 28.2267 12.895H23.9928C23.2442 12.895 22.5263 12.5976 21.9969 12.0682C21.4676 11.5389 21.1702 10.821 21.1702 10.0724V5.83851C21.1702 5.08992 21.4676 4.37199 21.9969 3.84265C22.5263 3.31331 23.2442 3.01594 23.9928 3.01594H28.2267C28.9753 3.01594 29.6932 3.31331 30.2225 3.84265C30.7519 4.37199 31.0493 5.08992 31.0493 5.83851V10.0724Z" fill="#8595A8"/>
              <path d="M9.87902 18.54H5.64515C4.14797 18.54 2.7121 19.1348 1.65343 20.1935C0.594756 21.2521 0 22.688 0 24.1852L0 28.4191C0 29.9162 0.594756 31.3521 1.65343 32.4108C2.7121 33.4695 4.14797 34.0642 5.64515 34.0642H9.87902C11.3762 34.0642 12.8121 33.4695 13.8707 32.4108C14.9294 31.3521 15.5242 29.9162 15.5242 28.4191V24.1852C15.5242 22.688 14.9294 21.2521 13.8707 20.1935C12.8121 19.1348 11.3762 18.54 9.87902 18.54ZM12.7016 28.4191C12.7016 29.1677 12.4042 29.8856 11.8749 30.4149C11.3455 30.9443 10.6276 31.2416 9.87902 31.2416H5.64515C4.89656 31.2416 4.17863 30.9443 3.64929 30.4149C3.11996 29.8856 2.82258 29.1677 2.82258 28.4191V24.1852C2.82258 23.4366 3.11996 22.7187 3.64929 22.1893C4.17863 21.66 4.89656 21.3626 5.64515 21.3626H9.87902C10.6276 21.3626 11.3455 21.66 11.8749 22.1893C12.4042 22.7187 12.7016 23.4366 12.7016 24.1852V28.4191Z" fill="#8595A8"/>
              <path d="M28.2267 18.54H23.9928C22.4956 18.54 21.0598 19.1348 20.0011 20.1935C18.9424 21.2521 18.3477 22.688 18.3477 24.1852V28.4191C18.3477 29.9162 18.9424 31.3521 20.0011 32.4108C21.0598 33.4695 22.4956 34.0642 23.9928 34.0642H28.2267C29.7239 34.0642 31.1597 33.4695 32.2184 32.4108C33.2771 31.3521 33.8718 29.9162 33.8718 28.4191V24.1852C33.8718 22.688 33.2771 21.2521 32.2184 20.1935C31.1597 19.1348 29.7239 18.54 28.2267 18.54ZM31.0493 28.4191C31.0493 29.1677 30.7519 29.8856 30.2225 30.4149C29.6932 30.9443 28.9753 31.2416 28.2267 31.2416H23.9928C23.2442 31.2416 22.5263 30.9443 21.9969 30.4149C21.4676 29.8856 21.1702 29.1677 21.1702 28.4191V24.1852C21.1702 23.4366 21.4676 22.7187 21.9969 22.1893C22.5263 21.66 23.2442 21.3626 23.9928 21.3626H28.2267C28.9753 21.3626 29.6932 21.66 30.2225 22.1893C30.7519 22.7187 31.0493 23.4366 31.0493 24.1852V28.4191Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">商品</p>
        </a>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <path d="M29.6371 8.85446H25.4032C25.4032 6.60868 24.5111 4.45487 22.9231 2.86686C21.3351 1.27885 19.1813 0.386719 16.9355 0.386719C14.6897 0.386719 12.5359 1.27885 10.9479 2.86686C9.35988 4.45487 8.46774 6.60868 8.46774 8.85446H4.23387C3.11098 8.85446 2.03408 9.30053 1.24007 10.0945C0.446067 10.8885 0 11.9654 0 13.0883L0 27.2012C0.00224093 29.072 0.746406 30.8656 2.06926 32.1884C3.39212 33.5113 5.18565 34.2554 7.05645 34.2577H26.8145C28.6853 34.2554 30.4789 33.5113 31.8017 32.1884C33.1246 30.8656 33.8687 29.072 33.871 27.2012V13.0883C33.871 11.9654 33.4249 10.8885 32.6309 10.0945C31.8369 9.30053 30.76 8.85446 29.6371 8.85446ZM16.9355 3.2093C18.4327 3.2093 19.8685 3.80406 20.9272 4.86273C21.9859 5.9214 22.5806 7.35727 22.5806 8.85446H11.2903C11.2903 7.35727 11.8851 5.9214 12.9438 4.86273C14.0024 3.80406 15.4383 3.2093 16.9355 3.2093ZM31.0484 27.2012C31.0484 28.3241 30.6023 29.401 29.8083 30.195C29.0143 30.989 27.9374 31.4351 26.8145 31.4351H7.05645C5.93356 31.4351 4.85666 30.989 4.06265 30.195C3.26865 29.401 2.82258 28.3241 2.82258 27.2012V13.0883C2.82258 12.714 2.97127 12.3551 3.23594 12.0904C3.50061 11.8257 3.85957 11.677 4.23387 11.677H8.46774V14.4996C8.46774 14.8739 8.61643 15.2329 8.8811 15.4976C9.14577 15.7622 9.50473 15.9109 9.87903 15.9109C10.2533 15.9109 10.6123 15.7622 10.877 15.4976C11.1416 15.2329 11.2903 14.8739 11.2903 14.4996V11.677H22.5806V14.4996C22.5806 14.8739 22.7293 15.2329 22.994 15.4976C23.2587 15.7622 23.6176 15.9109 23.9919 15.9109C24.3662 15.9109 24.7252 15.7622 24.9899 15.4976C25.2545 15.2329 25.4032 14.8739 25.4032 14.4996V11.677H29.6371C30.0114 11.677 30.3704 11.8257 30.635 12.0904C30.8997 12.3551 31.0484 12.714 31.0484 13.0883V27.2012Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">訂單</p>
        </a>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <path d="M10.5847 18.9278C9.32861 18.9278 8.10074 18.5554 7.05636 17.8575C6.01197 17.1597 5.19797 16.1678 4.7173 15.0074C4.23662 13.8469 4.11085 12.57 4.3559 11.338C4.60095 10.1061 5.2058 8.9745 6.09398 8.08633C6.98215 7.19815 8.11376 6.5933 9.3457 6.34825C10.5776 6.1032 11.8546 6.22897 13.015 6.70965C14.1755 7.19032 15.1673 8.00432 15.8652 9.04871C16.563 10.0931 16.9355 11.321 16.9355 12.577C16.9336 14.2608 16.2639 15.8751 15.0733 17.0657C13.8827 18.2563 12.2684 18.926 10.5847 18.9278ZM10.5847 9.0488C9.88686 9.0488 9.20471 9.25573 8.6245 9.64341C8.04429 10.0311 7.59206 10.5821 7.32502 11.2268C7.05798 11.8715 6.98811 12.5809 7.12425 13.2653C7.26038 13.9498 7.59641 14.5784 8.08984 15.0719C8.58328 15.5653 9.21195 15.9013 9.89635 16.0375C10.5808 16.1736 11.2902 16.1037 11.9349 15.8367C12.5796 15.5696 13.1306 15.1174 13.5183 14.5372C13.906 13.957 14.1129 13.2748 14.1129 12.577C14.1129 11.6413 13.7412 10.7439 13.0795 10.0822C12.4178 9.42052 11.5204 9.0488 10.5847 9.0488ZM21.1694 33.0407V32.3351C21.1694 29.5279 20.0542 26.8356 18.0692 24.8506C16.0842 22.8656 13.3919 21.7504 10.5847 21.7504C7.77745 21.7504 5.08519 22.8656 3.10018 24.8506C1.11517 26.8356 0 29.5279 0 32.3351L0 33.0407C0 33.415 0.148689 33.774 0.413357 34.0387C0.678026 34.3033 1.03699 34.452 1.41129 34.452C1.78559 34.452 2.14456 34.3033 2.40922 34.0387C2.67389 33.774 2.82258 33.415 2.82258 33.0407V32.3351C2.82258 30.2765 3.64037 28.3021 5.09605 26.8465C6.55172 25.3908 8.52604 24.573 10.5847 24.573C12.6433 24.573 14.6176 25.3908 16.0733 26.8465C17.529 28.3021 18.3468 30.2765 18.3468 32.3351V33.0407C18.3468 33.415 18.4955 33.774 18.7601 34.0387C19.0248 34.3033 19.3838 34.452 19.7581 34.452C20.1324 34.452 20.4913 34.3033 20.756 34.0387C21.0207 33.774 21.1694 33.415 21.1694 33.0407ZM33.871 25.9843C33.8709 24.0772 33.3189 22.2109 32.2814 20.6106C31.244 19.0104 29.7656 17.7446 28.0246 16.9661C26.2836 16.1876 24.3546 15.9297 22.4702 16.2234C20.5859 16.5172 18.8268 17.3501 17.4054 18.6216C17.2654 18.7446 17.1511 18.8942 17.0692 19.0617C16.9873 19.2292 16.9394 19.4112 16.9283 19.5973C16.9171 19.7834 16.9429 19.9699 17.0043 20.146C17.0656 20.322 17.1612 20.4842 17.2856 20.6231C17.4099 20.762 17.5606 20.8749 17.7288 20.9552C17.897 21.0356 18.0795 21.0818 18.2657 21.0912C18.4519 21.1006 18.6381 21.0731 18.8136 21.0101C18.9891 20.9471 19.1504 20.85 19.2881 20.7244C20.3035 19.8164 21.5599 19.2217 22.9058 19.012C24.2517 18.8024 25.6295 18.9867 26.873 19.5429C28.1164 20.099 29.1723 21.0031 29.9132 22.1461C30.6541 23.2891 31.0484 24.6222 31.0484 25.9843C31.0484 26.3586 31.1971 26.7176 31.4617 26.9822C31.7264 27.2469 32.0854 27.3956 32.4597 27.3956C32.834 27.3956 33.1929 27.2469 33.4576 26.9822C33.7223 26.7176 33.871 26.3586 33.871 25.9843ZM24.6976 13.2827C23.4415 13.2827 22.2136 12.9102 21.1693 12.2124C20.1249 11.5145 19.3109 10.5227 18.8302 9.36221C18.3495 8.20175 18.2238 6.92482 18.4688 5.69288C18.7139 4.46095 19.3187 3.32934 20.2069 2.44117C21.0951 1.55299 22.2267 0.948134 23.4586 0.703087C24.6905 0.458039 25.9675 0.583806 27.1279 1.06448C28.2884 1.54516 29.2802 2.35916 29.9781 3.40355C30.6759 4.44793 31.0484 5.67579 31.0484 6.93186C31.0465 8.61563 30.3768 10.2299 29.1862 11.4205C27.9956 12.6111 26.3813 13.2808 24.6976 13.2827ZM24.6976 3.40364C23.9998 3.40364 23.3176 3.61056 22.7374 3.99825C22.1572 4.38594 21.705 4.93697 21.4379 5.58167C21.1709 6.22637 21.101 6.93578 21.2371 7.62019C21.3733 8.3046 21.7093 8.93327 22.2027 9.4267C22.6962 9.92013 23.3248 10.2562 24.0093 10.3923C24.6937 10.5284 25.4031 10.4586 26.0478 10.1915C26.6925 9.92448 27.2435 9.47226 27.6312 8.89204C28.0189 8.31183 28.2258 7.62968 28.2258 6.93186C28.2258 5.99612 27.8541 5.0987 27.1924 4.43703C26.5307 3.77536 25.6333 3.40364 24.6976 3.40364Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">會員</p>
        </a>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <path d="M16.9355 34.6454C14.6407 34.6454 12.4758 33.6377 10.9968 31.8807C8.82339 32.1305 6.58367 31.3077 4.96069 29.6861C3.33911 28.0631 2.52056 25.8192 2.71673 23.5301C1.00766 22.1696 0 20.0047 0 17.7099C0 15.4151 1.00766 13.2502 2.76613 11.7712C2.51915 9.60203 3.3377 7.35808 4.96069 5.7351C6.58367 4.1107 8.82339 3.29357 11.1153 3.49115C12.4758 1.78349 14.6407 0.774414 16.9355 0.774414C19.2302 0.774414 21.3952 1.78208 22.8742 3.53913C25.0504 3.29074 27.2873 4.11212 28.9103 5.73369C30.5319 7.35667 31.3504 9.60062 31.1542 11.8897C32.8633 13.2502 33.871 15.4151 33.871 17.7099C33.871 20.0047 32.8633 22.1696 31.1048 23.6486C31.3518 25.8178 30.5333 28.0617 28.9103 29.6847C27.2859 31.3077 25.0419 32.1248 22.7556 31.9286C21.3952 33.6363 19.2302 34.6454 16.9355 34.6454ZM11.1111 29.1075C11.9028 29.1075 12.6367 29.4476 13.1546 30.0615C14.0974 31.1807 15.4748 31.8228 16.9355 31.8228C18.3962 31.8228 19.7736 31.1807 20.7163 30.0615C21.2851 29.3855 22.1135 29.044 22.997 29.1159C24.4562 29.2387 25.8817 28.7208 26.9147 27.6877C27.9464 26.6561 28.4671 25.2278 28.3429 23.77C28.2667 22.8893 28.6111 22.0581 29.2885 21.4879C30.4062 20.5466 31.0484 19.1678 31.0484 17.7085C31.0484 16.2492 30.4062 14.8704 29.2885 13.9291C28.6125 13.3603 28.2667 12.5276 28.3429 11.647C28.4671 10.1891 27.9478 8.76091 26.9147 7.72925C25.8817 6.6976 24.4478 6.18248 22.9984 6.30103C22.1149 6.38147 21.2851 6.03147 20.7163 5.35687C19.7736 4.23772 18.3962 3.59558 16.9355 3.59558C15.4748 3.59558 14.0974 4.23772 13.1546 5.35687C12.5845 6.03288 11.7532 6.37159 10.874 6.30244C9.40766 6.17542 7.98931 6.6976 6.95625 7.73066C5.9246 8.76232 5.40383 10.1905 5.52802 11.6484C5.60423 12.5291 5.25988 13.3603 4.58246 13.9305C3.46472 14.8718 2.82258 16.2506 2.82258 17.7099C2.82258 19.1692 3.46472 20.548 4.58246 21.4893C5.25847 22.0581 5.60423 22.8907 5.52802 23.7714C5.40383 25.2293 5.92319 26.6575 6.95625 27.6891C7.98931 28.7222 9.43024 29.2387 10.8726 29.1174C10.953 29.1103 11.0321 29.1075 11.1111 29.1075ZM12.7016 12.0647C11.9226 12.0647 11.2903 12.697 11.2903 13.476C11.2903 14.2551 11.9226 14.8873 12.7016 14.8873C13.4806 14.8873 14.1129 14.2551 14.1129 13.476C14.1129 12.697 13.4806 12.0647 12.7016 12.0647ZM21.1694 20.5325C20.3903 20.5325 19.7581 21.1647 19.7581 21.9438C19.7581 22.7228 20.3903 23.3551 21.1694 23.3551C21.9484 23.3551 22.5806 22.7228 22.5806 21.9438C22.5806 21.1647 21.9484 20.5325 21.1694 20.5325ZM15.2871 22.727L20.9323 14.2593C21.3655 13.6115 21.1905 12.7337 20.5413 12.3018C19.8907 11.8672 19.0157 12.045 18.5839 12.6928L12.9387 21.1605C12.5054 21.8083 12.6804 22.6861 13.3296 23.118C13.571 23.2788 13.8419 23.3551 14.1115 23.3551C14.5673 23.3551 15.0161 23.1349 15.2871 22.727Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">行銷</p>
        </a>
      </li>
      <li>
        <a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <path d="M23.2863 0.967773C17.3504 0.967773 12.7016 3.75789 12.7016 7.31858V10.9696C12.02 10.8891 11.3115 10.8468 10.5847 10.8468C4.64879 10.8468 0 13.6369 0 17.1976V28.4879C0 32.0486 4.64879 34.8387 10.5847 34.8387C15.3929 34.8387 19.3573 33.0083 20.6895 30.42C21.5335 30.5428 22.4028 30.6049 23.2863 30.6049C29.2222 30.6049 33.871 27.8147 33.871 24.2541V7.31858C33.871 3.75789 29.2222 0.967773 23.2863 0.967773ZM31.0484 18.6089C31.0484 20.2742 27.729 22.1371 23.2863 22.1371C22.5637 22.1371 21.8552 22.0877 21.1694 21.9918V19.1918C21.8609 19.2722 22.5694 19.3145 23.2863 19.3145C26.3827 19.3145 29.129 18.5553 31.0484 17.3232V18.6089ZM2.82258 21.5571C4.74194 22.7891 7.48831 23.5484 10.5847 23.5484C13.681 23.5484 16.4274 22.7891 18.3468 21.5571V22.8428C18.3468 24.5081 15.0274 26.371 10.5847 26.371C6.14194 26.371 2.82258 24.5081 2.82258 22.8428V21.5571ZM31.0484 12.9637C31.0484 14.6291 27.729 16.492 23.2863 16.492C22.5312 16.492 21.7903 16.4383 21.0762 16.3339C20.8038 15.0821 19.9472 13.9573 18.6685 13.0555C20.0573 13.4506 21.621 13.6694 23.2863 13.6694C26.3827 13.6694 29.129 12.9101 31.0484 11.6781V12.9637ZM23.2863 3.79035C27.729 3.79035 31.0484 5.65326 31.0484 7.31858C31.0484 8.9839 27.729 10.8468 23.2863 10.8468C18.8435 10.8468 15.5242 8.9839 15.5242 7.31858C15.5242 5.65326 18.8435 3.79035 23.2863 3.79035ZM10.5847 13.6694C15.0274 13.6694 18.3468 15.5323 18.3468 17.1976C18.3468 18.8629 15.0274 20.7258 10.5847 20.7258C6.14194 20.7258 2.82258 18.8629 2.82258 17.1976C2.82258 15.5323 6.14194 13.6694 10.5847 13.6694ZM10.5847 32.0162C6.14194 32.0162 2.82258 30.1533 2.82258 28.4879V27.2022C4.74194 28.4343 7.48831 29.1936 10.5847 29.1936C13.681 29.1936 16.4274 28.4343 18.3468 27.2022V28.4879C18.3468 30.1533 15.0274 32.0162 10.5847 32.0162ZM23.2863 27.7823C22.5637 27.7823 21.8552 27.7329 21.1694 27.6369V24.8369C21.8609 24.9174 22.5694 24.9597 23.2863 24.9597C26.3827 24.9597 29.129 24.2004 31.0484 22.9684V24.2541C31.0484 25.9194 27.729 27.7823 23.2863 27.7823Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">營收</p>
        </a>
      </li>
      <li>
        <a
          @if($active == "bapages" || $active == "bapages_add" || $active == "bapages_update" || $active == "banews" || $active == "banews_add" || $active == "banews_update")
            class="active"
          @endif
        >
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
              <g clip-path="url(#clip0_582_270)">
              <path d="M24.0833 14.3278C18.615 14.3278 14.1667 18.7761 14.1667 24.2445C14.1667 29.7128 18.615 34.1611 24.0833 34.1611C29.5517 34.1611 34 29.7128 34 24.2445C34 18.7761 29.5517 14.3278 24.0833 14.3278ZM24.0833 31.3278C20.1733 31.3278 17 28.1545 17 24.2445C17 20.3345 20.1733 17.1611 24.0833 17.1611C27.9933 17.1611 31.1667 20.3345 31.1667 24.2445C31.1667 28.1545 27.9933 31.3278 24.0833 31.3278ZM26.2083 20.7028C26.2083 21.8786 25.2592 22.8278 24.0833 22.8278C22.9075 22.8278 21.9583 21.8786 21.9583 20.7028C21.9583 19.527 22.9075 18.5778 24.0833 18.5778C25.2592 18.5778 26.2083 19.527 26.2083 20.7028ZM25.5 25.6611V28.4945C25.5 29.2736 24.8625 29.9111 24.0833 29.9111C23.3042 29.9111 22.6667 29.2736 22.6667 28.4945V25.6611C22.6667 24.882 23.3042 24.2445 24.0833 24.2445C24.8625 24.2445 25.5 24.882 25.5 25.6611ZM12.75 29.9111C12.75 30.6903 12.1125 31.3278 11.3333 31.3278H7.08333C3.17333 31.3278 0 28.1545 0 24.2445V7.24447C0 3.33447 3.17333 0.161133 7.08333 0.161133H15.2433C16.7308 0.161133 18.19 0.770299 19.2525 1.81863L23.8425 6.40863C24.7917 7.3578 25.3725 8.61863 25.4858 9.9503C25.5425 10.7295 24.9617 11.4095 24.1825 11.4803C24.14 11.4803 24.1117 11.4803 24.0692 11.4803C23.3325 11.4803 22.7233 10.9136 22.6525 10.177C22.6525 10.1345 22.6525 10.1061 22.6525 10.0636H18.4308C16.8725 10.0636 15.5975 8.78863 15.5975 7.2303V3.0228C15.4842 3.0228 15.3708 2.99447 15.2575 2.99447H7.08333C4.74583 2.99447 2.83333 4.90697 2.83333 7.24447V24.2445C2.83333 26.582 4.74583 28.4945 7.08333 28.4945H11.3333C12.1125 28.4945 12.75 29.132 12.75 29.9111Z" fill="#8595A8"/>
              </g>
              <defs>
                <clipPath id="clip0_582_270">
                  <rect width="34" height="34" fill="#8595A8" transform="translate(0 0.161133)"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="text">官網</p>
        </a>
        <ul>
          <li>
            <a href="{{ URL::asset('banews') }}">最新消息</a>
            <a href="{{ URL::asset('bapages') }}">站內網頁</a>
          </li>
        </ul>
      </li>
      <li>
        <a
          @if($active == "bamanager" || $active == "bamanager_add" || $active == "bamanager_update")
            class="active"
          @endif
        >
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34" fill="none">
              <path d="M17.4994 11.333C16.3456 11.333 15.2178 11.6654 14.2585 12.288C13.2992 12.9107 12.5516 13.7957 12.1101 14.8311C11.6685 15.8666 11.553 17.006 11.7781 18.1052C12.0032 19.2044 12.5588 20.2141 13.3746 21.0066C14.1904 21.7991 15.2298 22.3388 16.3613 22.5575C17.4929 22.7761 18.6658 22.6639 19.7317 22.235C20.7976 21.8061 21.7086 21.0798 22.3496 20.1479C22.9906 19.216 23.3327 18.1204 23.3327 16.9997C23.3327 15.4968 22.7181 14.0554 21.6241 12.9927C20.5302 11.93 19.0464 11.333 17.4994 11.333ZM17.4994 19.833C16.9225 19.833 16.3586 19.6668 15.8789 19.3555C15.3993 19.0442 15.0255 18.6017 14.8047 18.0839C14.5839 17.5662 14.5262 16.9965 14.6387 16.4469C14.7513 15.8973 15.0291 15.3925 15.437 14.9962C15.8449 14.6 16.3646 14.3301 16.9303 14.2208C17.4961 14.1115 18.0826 14.1676 18.6155 14.382C19.1485 14.5965 19.604 14.9596 19.9245 15.4256C20.245 15.8915 20.416 16.4393 20.416 16.9997C20.416 17.7511 20.1087 18.4718 19.5617 19.0031C19.0148 19.5345 18.2729 19.833 17.4994 19.833Z" fill="#8595A8"/>
              <path d="M31.0548 19.6917L30.4073 19.329C30.6988 17.7883 30.6988 16.2089 30.4073 14.6682L31.0548 14.3055C31.5527 14.0264 31.9892 13.6548 32.3393 13.2119C32.6894 12.769 32.9462 12.2634 33.0952 11.7241C33.2441 11.1847 33.2823 10.6221 33.2074 10.0685C33.1326 9.5148 32.9462 8.98087 32.6589 8.49717C32.3717 8.01346 31.9891 7.58946 31.5332 7.24937C31.0772 6.90928 30.5568 6.65976 30.0016 6.51505C29.4464 6.37035 28.8672 6.3333 28.2973 6.40601C27.7273 6.47872 27.1777 6.65977 26.6798 6.93883L26.0308 7.30292C24.8051 6.28563 23.3966 5.49702 21.876 4.97675V4.25C21.876 3.12283 21.4151 2.04183 20.5946 1.2448C19.7741 0.447767 18.6613 0 17.501 0C16.3407 0 15.2279 0.447767 14.4074 1.2448C13.5869 2.04183 13.126 3.12283 13.126 4.25V4.97675C11.6055 5.49889 10.1975 6.28943 8.97268 7.30858L8.3208 6.94167C7.31519 6.37808 6.12029 6.22564 4.99898 6.51789C3.87767 6.81013 2.92179 7.52312 2.34163 8.5C1.76147 9.47688 1.60455 10.6376 1.90539 11.7269C2.20623 12.8162 2.94019 13.7447 3.9458 14.3083L4.5933 14.671C4.30179 16.2117 4.30179 17.7911 4.5933 19.3318L3.9458 19.6945C2.94019 20.2581 2.20623 21.1867 1.90539 22.2759C1.60455 23.3652 1.76147 24.526 2.34163 25.5028C2.92179 26.4797 3.87767 27.1927 4.99898 27.4849C6.12029 27.7772 7.31519 27.6248 8.3208 27.0612L8.96976 26.6971C10.1959 27.7145 11.6049 28.5031 13.126 29.0232V29.75C13.126 30.8772 13.5869 31.9582 14.4074 32.7552C15.2279 33.5522 16.3407 34 17.501 34C18.6613 34 19.7741 33.5522 20.5946 32.7552C21.4151 31.9582 21.876 30.8772 21.876 29.75V29.0232C23.3965 28.5011 24.8046 27.7106 26.0293 26.6914L26.6812 27.0569C27.6868 27.6205 28.8817 27.7729 30.003 27.4807C31.1243 27.1884 32.0802 26.4755 32.6604 25.4986C33.2406 24.5217 33.3975 23.3609 33.0966 22.2717C32.7958 21.1824 32.0618 20.2538 31.0562 19.6903L31.0548 19.6917ZM27.3389 14.3423C27.8328 16.0807 27.8328 17.9165 27.3389 19.6548C27.2527 19.9574 27.2724 20.2792 27.3948 20.5697C27.5173 20.8603 27.7357 21.103 28.0156 21.2599L29.5964 22.1467C29.9316 22.3346 30.1762 22.6441 30.2764 23.0072C30.3766 23.3702 30.3243 23.7571 30.1309 24.0826C29.9375 24.4082 29.6189 24.6458 29.2452 24.7432C28.8715 24.8405 28.4732 24.7897 28.1381 24.6018L26.5543 23.7122C26.2742 23.5545 25.948 23.492 25.6272 23.5343C25.3064 23.5766 25.0092 23.7214 24.7825 23.9459C23.4844 25.2332 21.8491 26.1516 20.0531 26.6022C19.7396 26.6805 19.4618 26.8578 19.2635 27.1064C19.0653 27.3549 18.9577 27.6605 18.9579 27.9749V29.75C18.9579 30.1257 18.8042 30.4861 18.5308 30.7517C18.2573 31.0174 17.8863 31.1667 17.4996 31.1667C17.1128 31.1667 16.7418 31.0174 16.4684 30.7517C16.1949 30.4861 16.0412 30.1257 16.0412 29.75V27.9763C16.0414 27.6619 15.9338 27.3563 15.7356 27.1078C15.5373 26.8593 15.2595 26.6819 14.946 26.6036C13.1498 26.1512 11.515 25.2308 10.2181 23.9417C9.99136 23.7172 9.69417 23.5724 9.37336 23.53C9.05256 23.4877 8.72637 23.5503 8.44622 23.7079L6.86538 24.5962C6.69947 24.6907 6.51595 24.7523 6.3254 24.7776C6.13485 24.8029 5.94102 24.7914 5.75509 24.7436C5.56915 24.6959 5.39477 24.6129 5.242 24.4994C5.08922 24.3859 4.96106 24.2442 4.8649 24.0824C4.76873 23.9206 4.70646 23.7419 4.68167 23.5566C4.65688 23.3714 4.67006 23.1832 4.72045 23.0029C4.77084 22.8225 4.85745 22.6537 4.97529 22.5061C5.09312 22.3584 5.23986 22.2348 5.40705 22.1425L6.98788 21.2557C7.26781 21.0988 7.48616 20.856 7.60864 20.5655C7.73112 20.275 7.75078 19.9531 7.66455 19.6506C7.1707 17.9122 7.1707 16.0764 7.66455 14.3381C7.74923 14.0362 7.72862 13.7155 7.60595 13.4262C7.48327 13.1368 7.26543 12.8951 6.98643 12.7387L5.40559 11.8518C5.07045 11.664 4.82586 11.3545 4.72563 10.9914C4.62539 10.6284 4.67773 10.2415 4.87111 9.91596C5.0645 9.59039 5.3831 9.35279 5.75682 9.25542C6.13055 9.15805 6.52879 9.20889 6.86393 9.39675L8.44768 10.2864C8.72706 10.4444 9.05256 10.5077 9.37303 10.4664C9.69349 10.4251 9.99075 10.2816 10.2181 10.0583C11.5161 8.77107 13.1514 7.85261 14.9475 7.40208C15.2619 7.32355 15.5404 7.14532 15.7388 6.89563C15.9372 6.64594 16.0441 6.33908 16.0427 6.02367V4.25C16.0427 3.87428 16.1963 3.51394 16.4698 3.24827C16.7433 2.98259 17.1142 2.83333 17.501 2.83333C17.8878 2.83333 18.2587 2.98259 18.5322 3.24827C18.8057 3.51394 18.9593 3.87428 18.9593 4.25V6.02367C18.9592 6.33811 19.0667 6.64366 19.265 6.8922C19.4633 7.14073 19.7411 7.31812 20.0546 7.39642C21.8512 7.84855 23.4866 8.769 24.7839 10.0583C25.0107 10.2828 25.3079 10.4276 25.6287 10.47C25.9495 10.5123 26.2757 10.4497 26.5558 10.2921L28.1366 9.40383C28.3026 9.30935 28.4861 9.24767 28.6766 9.22236C28.8672 9.19705 29.061 9.20861 29.2469 9.25636C29.4329 9.30411 29.6072 9.38712 29.76 9.50061C29.9128 9.6141 30.041 9.75582 30.1371 9.91762C30.2333 10.0794 30.2956 10.2581 30.3204 10.4434C30.3451 10.6286 30.332 10.8168 30.2816 10.9971C30.2312 11.1775 30.1446 11.3463 30.0267 11.4939C29.9089 11.6416 29.7622 11.7652 29.595 11.8575L28.0141 12.7443C27.7357 12.9012 27.5184 13.1431 27.3963 13.4324C27.2742 13.7217 27.254 14.0421 27.3389 14.3438V14.3423Z" fill="#8595A8"/>
            </svg>
          </div>
          <p class="text">設定</p>
        </a>
        <ul>
          <li>
            <a href="{{ URL::asset('bamanager') }}">帳戶設定</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="bottomDiv_tac_wi100">
    <div class="_dif_aic_jcc_mb8">
      <div class="customImg_dif_aic_jcc">
        <img class="_fluid" src="{{ URL::asset('/img/home_commodity2.png') }}" alt="">
      </div>
    </div>
    <a class="_dif_aic_jcc" href="{{ URL::asset('basignout')}}">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <g clip-path="url(#clip0_582_238)">
          <path d="M9.99733 0C10.6873 0 11.2466 0.559329 11.2466 1.24929V5.41359C11.2466 6.10355 10.6873 6.66288 9.99733 6.66288C9.30738 6.66288 8.74805 6.10355 8.74805 5.41359V1.24929C8.74805 0.559329 9.30734 0 9.99733 0Z" fill="#9A9FAC"/>
          <path d="M12.9123 4.11421C12.9061 4.53358 13.1176 4.92625 13.4711 5.15194C16.6112 7.07049 17.6014 11.1714 15.6828 14.3114C13.7642 17.4514 9.66345 18.4417 6.52337 16.5231C3.38328 14.6046 2.39307 10.5037 4.31166 7.36365C4.85986 6.46642 5.61264 5.71166 6.50841 5.16108C6.86801 4.93538 7.08516 4.53955 7.08227 4.11499C7.08418 3.42503 6.52641 2.86418 5.83645 2.86227C5.59948 2.86161 5.36719 2.92836 5.16672 3.05478C0.868584 5.7245 -0.451484 11.373 2.2182 15.6711C4.88789 19.9692 10.5364 21.2893 14.8345 18.6196C19.1326 15.9499 20.4526 10.3014 17.783 6.00329C17.0398 4.8069 16.0309 3.79795 14.8345 3.05482C14.249 2.68546 13.4749 2.86067 13.1056 3.44615C12.9794 3.64612 12.9124 3.87774 12.9123 4.11421Z" fill="#9A9FAC"/>
          </g>
          <defs>
          <clipPath id="clip0_582_238">
          <rect width="20" height="20" fill="white"/>
          </clipPath>
          </defs>
        </svg>
      </div>
      <p class="text">登出</p>
    </a>
  </div>
</div>
