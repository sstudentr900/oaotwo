@once
@push('customStyle')
<style>
  [class^='title3']{
    color: #212121;
    font-size: 36px;
    font-weight: 400;
    letter-spacing: 2px;
    padding-bottom: 16px;
    padding-right: 16px;
    border-bottom: 1px solid #212121;
    display: inline-flex;
    align-items: end;
    font-family: 'Noto Serif TC','Noto Sans TC',serif;
    margin-bottom: 60px;
  }
  [class^='title3'] span{
    font-size: 18px;
    margin-left: 16px;
    font-family: 'Noto Sans TC','Noto Serif TC',serif;
  }
</style>
@endpush
@endonce
{{-- @once
@push('customScript')
<script>
</script>
@endpush
@endonce --}}
<div class="publichyperlink_coGray900_text14_mb16_dif_aic_jcs">
  <div class="bread_dif">
    @foreach ($breads as $bread)
    <div class="_dif">
      <a href="{{ $bread['url']?URL::asset($bread['url']):'' }}">{{ $bread['name'] }}</a>
      <div class="icon_pal8_par8" v-if="(json.length-1)!=index">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="6"
          height="12"
          viewBox="0 0 7 12"
          fill="none"
        >
          <path
            d="M1 11L5.92929 6.07071C5.96834 6.03166 5.96834 5.96834 5.92929 5.92929L1 1"
            stroke="#A4A4A4"
            stroke-width="2"
            stroke-linecap="round"
          />
        </svg>
      </div>
    </div>
    @endforeach
  </div>
  <!-- 登入顯示 -->
  {{-- <div class="_dif" v-if="LoginShowMenu">
    <a class="_mr6_ml6" @click="logout">登出</a>
    <a href="{ name: 'forget' }" class="_mr6_ml6">修改密碼</a>
    <a href="{ name: 'info' }" class="_mr6_ml6">個人資訊</a>
    <a href="{ name: 'order' }" class="_mr6_ml6">訂單查詢</a>
    <a href="{ name: 'collect' }" class="_mr6_ml6">我的收藏</a>
  </div> --}}
</div>
<div class="title3">
  <p>{{ $title_en }}</p>
  <span>{{ $title }}</span>
</div>