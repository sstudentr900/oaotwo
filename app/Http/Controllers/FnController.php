<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Banews as db_news;
// use Illuminate\Support\Str;
use App\Http\Controllers\CustomFn;//自訂函數
use Illuminate\Support\Facades\Mail;//寄信
use Illuminate\Support\Facades\Validator;//驗證資料
// use Datomon\LaravelNewebpay\Library\NewebPay;
use Illuminate\Support\Facades\Http;
class FnController extends Controller
{
  // 首頁---------------------------------------
  // public function fnindex($placard = 0) {
  //   $qaList = db_qu::where('release','y')->orderBy('sort', 'asc')->limit(6)->get();
  //   dd($qaList);
  //   // return view('fnindex', $qaList);
  // }

  // 最新消息---------------------------------------
  public function fnnew($pageNow = 1) {
    $array = [
      'active'=>'fnnew',//class
      'title'=>'最新消息',//title
      'title_en'=>'NEWS',//title
      'end'=>12,//顯示數量
      'pageNow'=>$pageNow,//設定第一頁
    ];
    $array['breads'] =array(
      ['name'=>'商店','url'=>''],
      ['name'=>$array['title'],'url'=>$array['active']],
    );
    //取得pageStart,pageTotle;nowDB::count()=>取得資料總數
    $values= CustomFn::search(db_news::count(), $array['end'], $array['pageNow']);
    $array['pageStart'] =  $values['pageStart'];
    $array['pageTotle'] =  $values['pageTotle'];
    // dd($values);
    //取得資料
    $results = db_news::where('releases','y')->offset($values['startValue'])->limit($values['endValue'])->orderBy('sort', 'asc')->get();
    //修改資料
    foreach ($results as $result) {
      //updated
      $result->updated = explode(" ", $result->updated_at)[0];
      //assort
      $assorts = array('最新資訊','優惠活動','新品登場');
      $result->assort = $assorts[($result->assort)-1];
    }
    $array['datas'] = $results;
    // dd($results);
    // dd($result['pageStart'],$result['pageTotle']);
    // dd($array);
    return view( $array['active'], $array);
  }
  public function fnnews($pageNow = 1) {
    $array = [
      'active'=>'fnnew',//class
      'title'=>'最新消息',//title
      'title_en'=>'NEWS',//title
      // 'end'=>1,//顯示數量
      // 'pageNow'=>$pageNow,//設定第一頁
    ];
    $array['breads'] =array(
      ['name'=>'商店','url'=>''],
      ['name'=>$array['title'],'url'=>$array['active']],
    );
    //取得pageStart,pageTotle;nowDB::count()=>取得資料總數
    $values= CustomFn::search(db_news::count(), $array['end'], $array['pageNow']);
    $array['pageStart'] =  $values['pageStart'];
    $array['pageTotle'] =  $values['pageTotle'];
    // dd($values);
    //取得資料
    $results = db_news::where('releases','y')->offset($values['startValue'])->limit($values['endValue'])->orderBy('sort', 'asc')->get();
    //修改資料
    foreach ($results as $result) {
      //updated
      $result->updated = explode(" ", $result->updated_at)[0];
      //assort
      $assorts = array('最新資訊','優惠活動','新品登場');
      $result->assort = $assorts[($result->assort)-1];
    }
    $array['datas'] = $results;
    // dd($results);
    // dd($result['pageStart'],$result['pageTotle']);
    // dd($array);
    return view( $array['active'], $array);
  }
}
