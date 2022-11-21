@extends ('index/index')

@section ('title')
<title>Index</title>
@endsection

@section ('header')
<header class="layout_header">
  <nav class="layout_header__nav">
    <a href="/shest1k" class="layout_header__logo">Shest1k</a>
    <a href="/about" class="layout_header__about">О нас</a>
    <a href="/contacts" class="layout_header__contacts">Контакты</a>
    <a href="/signin" class="layout_header_signin">Авторизация</a>
  </nav>
</header>
@endsection

@section ('main')
<section class="layout_section">
@foreach ($results as $blablabla)
<div class="layout_main">
  <div class="layout_main_grid">
    <div class="layout_info">
      <div class="layout_date">{{$blablabla['date']}}</div>
      <div class="layout_name">{{$blablabla['name']}}</div>
    </div>
  <a href="{{ asset('/images/'.$blablabla['full_image']) }}" class="full_image" target="__blank">
    <img src="{{ asset('/images/'.$blablabla['preview_image'])}}"
      alt="" 
      class="layout_preview_image"
      title="{{$blablabla['shortDesc']}}">
  </a>
<div class="layout_desc">{{$blablabla['desc']}}</div>
  </div>
</div>
@endforeach
</section>
@endsection