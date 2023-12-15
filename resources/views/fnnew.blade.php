{{-- 指定繼承 layouts.fn 母模板  --}}
@extends('layouts.fn')
@section('title')@endsection
{{-- 傳送資料到母模板，並指定變數為content --}}
@section('content')
  {{-- 引入fn_nav模板 --}}
  @include('layouts.fn_nav')
  {{-- CSS --}}
  @once
  @push('customStyle')
  <style>
    .fnserviceContent{
      background: rgba(202, 206, 219, 0.30);
      padding: 80px 0 40px;
    }
    .fnserviceContent .topContent{
      text-align: center;
    }
    .fnserviceContent .topContent .retitle{
      color: #62678E;
      font-size: 21px;
      font-weight: 500;
    }
    .fnserviceContent .topContent .title{
      color: #282938;
      font-size: 48px;
      font-weight: 600;
    }
    .fnserviceContent .publicPage li a{
      font-size: 16px;
    }
    .fnserviceContent .publicPage li a.pre,
    .fnserviceContent .publicPage li a.next{
      background: #ffffff;
    }
    .fnserviceContent .publicPage li a.pre:hover,
    .fnserviceContent .publicPage li a.next:hover {
      background: #EA6200;
    }
    .fnserviceContent .itemDiv{
      background: #FFF;
      padding: 50px 70px;
      margin-top: 65px;
      display:grid;
      grid-template-columns: repeat(3,1fr);
      gap: 30px;
      margin-bottom: 20px;
      /* min-height: 800px; */
    }
    .fnserviceContent .item{
      border: 1px solid #CDD1DA;
    }
    .fnserviceContent .item img{
      width: 100%;
      height: auto;
    }
    .fnserviceContent .item .text{
      padding: 18px 16px;
      background: #fff;
    }
    .fnserviceContent .item .title{
      color: #181C25;
      font-size: 21px;
      margin-bottom: 8px;
    }
    .fnserviceContent .item .control{
      display:flex;
      align-items: end;
    }
    .fnserviceContent .item .price{
      display: flex;
      width: 60%;
      align-items: baseline;
    }
    .fnserviceContent .item .price h5{
      color: #DD703F;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.48px;
    }
    .fnserviceContent .item .price span{
      color: #898989;
      font-size: 16px;
      font-weight: 400;
      margin-left: 12px;
      text-decoration:line-through;
    }
    .fnserviceContent .item .buy{
      width: 40%;
      background: #CD5B26;
      color: #FFF;
      font-size: 14px;
      font-weight: 700;
      padding: 12px;
      text-align: center;
      cursor: pointer;
    }
    .fnserviceContent .item .nobuy{
      width: 40%;
      background: #8796A1;
      color: #FFF;
      font-size: 14px;
      font-weight: 700;
      padding: 12px;
      text-align: center;
      cursor: pointer;
    }
    /*pop*/
    .fnservicePop{
      position: fixed;
      top: 0;
      left: 0;
      background: rgba(0,0,0,0.7);
      width: 100vw;
      height: 100vh;
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 99;
      padding: 40px;
    }
    .fnservicePop.active{
      display: flex;
    }
    .fnservicePop .box{
      background: #fff;
      padding: 60px;
      max-width: 1120px;
      display: grid;
      grid-template-columns: repeat(2,1fr);
      gap: 30px;
      position: relative;
    }
    .fnservicePop .close{
      position: absolute;
      top: 18px;
      right: 24px;
      width: 36px;
      height: 36px;
      opacity: .3;
      cursor: pointer;
    }
    .fnservicePop img{
      width: 100%;
      height: auto;
    }
    .fnservicePop .title{
      color: #232536;
      font-size: 32px;
      font-weight: 600;
      margin: 25px 0;
    }
    .fnservicePop .text{
      color: #727272;
      font-size: 16px;
      font-weight: 400;
      margin-bottom: 40px;
    }
    .fnservicePop .price{
      display: flex;
      align-items: baseline;
      margin-bottom: 60px;
    }
    .fnservicePop .price h5{
      color: #DD703F;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.48px;
    }
    .fnservicePop .price span{
      color: #898989;
      font-size: 16px;
      font-weight: 400;
      margin-left: 12px;
      text-decoration:line-through;
    }
    .fnservicePop .control{
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 20px;
    }
    .fnservicePop .buy{
      /* width: 100%; */
      background: #CD5B26;
      color: #FFF;
      font-size: 14px;
      font-weight: 700;
      padding: 12px;
      text-align: center;
      cursor: pointer;
    }
    .fnservicePop .nobuy{
      /* width: 40%; */
      background: #8796A1;
      color: #FFF;
      font-size: 14px;
      font-weight: 700;
      padding: 12px;
      text-align: center;
      cursor: pointer;
    }
    
  </style>
  @endpush
  @endonce
  {{--  html --}}
  <div class="new_bgGray200_patb140_pageMh">
    <div class="_mw980">
      @include('layouts.fn_title')
      {{-- @php
        dd($datas);
      @endphp --}}
      @if($datas->isEmpty())
        <div class="newsContent">
          <div class="_fs32_tac_pa48_mt48">找不到資料...</div>
        </div>
      @else
      <div class="newsContent">
        <div class="items">
          @foreach ($datas as $data)
          <div class="item">
            <div class="_dif_gap32">
              <div class="img_wi40">
                <img class="_cover" src="{{ URL::asset(env('MIX_IMGPREFIX')).'/'.$data['cover'].'?'.rand() }}">
              </div>
              <div class="textDiv_wi60">
                <div class="title_dif_aic">
                  <div class="date_fs24_fw400_coGray900_mr8">{{ $data['updated'] }}</div>
                  <div class="icon_btn_noho_coGray900_bgTran_bcGray900_pat3b6">{{ $data['assort'] }}</div>
                </div>
                <div class="text_text18_coGray900_ellipsis1">{{ $data['title'] }}</div>
                <hr class="_ma8">
                <div class="text_text16_coGray900_ellipsis2">{!! $data['content'] !!}</div>
                <a class="more_text16_ls2_coGray900_mt8" href="{{ URL::asset('news') }}">
                  SEE ALL...
                </a>
              </div>
            </div>
            <hr class="_ma32_op02">
          </div>
          @endforeach
        </div>
        @include('layouts.fn_page')
      </div>
      @endif
    </div>
  </div>
  {{-- 引入fn_footer模板 --}}
  @include('layouts.fn_footer')
  {{-- js --}}
  {{-- <script>
    function fnservice(){
      const buys = document.querySelectorAll('.fnserviceContent .bottomContent .buy')
      const pop = document.querySelector('.fnservicePop')
      const pop_close = pop.querySelector('.close')
      const pop_img = pop.querySelector('img')
      const pop_title = pop.querySelector('.title')
      const pop_text = pop.querySelector('.text')
      const pop_price = pop.querySelector('.price span')
      const pop_offer = pop.querySelector('.price h5')
      const pop_nobuy = pop.querySelector('.nobuy')
      const pop_buy = pop.querySelector('.buy')
      const pop_input = pop.querySelector('input[type="number"]')
      const src = "{{ URL::asset('images/') }}"
      pop_close.addEventListener('click',function(){
        // console.log(`關彈窗`)
        pop.classList.remove('active')
      })
      buys.forEach(item=>{
        item.addEventListener('click',function(){
          // console.log(`打開彈窗`)
          pop.classList.add('active')
          pop_img.setAttribute('src',src+'/'+item.dataset.cover )
          pop_title.innerText = item.dataset.title
          pop_text.innerText = item.dataset.text
          pop_price.innerText = '$'+item.dataset.price
          pop_offer.innerText = '$'+item.dataset.offer
          pop_nobuy.dataset.id = item.dataset.id
          pop_buy.dataset.id = item.dataset.id
          pop_input.value = 1 //數量保持1
        })
      })
      pop_nobuy.addEventListener('click',function(){
        // console.log(`加入購物車,${this.dataset.id},${pop_input.value}`)
        car_add({obj:'car',array:[this.dataset.id,Number(pop_input.value)]})
        // console.log(`car_search:${car_search({obj:'car'})}`)
        pop.classList.remove('active')
        car_number()
      })
      pop_buy.addEventListener('click',function(){
        // console.log(`立即購物車,${this.dataset.id},${pop_input.value}`)
        car_add({obj:'car',array:[this.dataset.id,Number(pop_input.value)]})
        // console.log(`car_search:${car_search({obj:'car'})}`)
        // window.location = "route('fncar')";
        pop.classList.remove('active')
        car_number()
      })
      //add number
      quantity();
    }
    window.onload = fnservice
  </script> --}}
@endsection