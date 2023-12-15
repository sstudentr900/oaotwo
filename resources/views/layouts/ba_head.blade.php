<meta charset="UTF-8" />
<!-- <base href="{{ URL::to('/') }}/">{{-- #基本路徑 --}} -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
<!-- <meta name="format-detection" content="telephone=no" /> -->
{{--  強制https --}}
{{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
<title>@yield('title')</title>
<meta name="description" content="" />{{--  頁面描述　--}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('/favicon.ico?').time()}}">
<link href="{{ URL::asset('css/zero.css').'?'.rand() }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/baapp.css').'?'.rand() }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/basis.css').'?'.rand() }}" rel="stylesheet" type="text/css">
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/tinymce/tinymce.min.js').'?'.rand() }}"></script>