@extends ('layouts/index')

@section ('title')
<title>Index</title>
@endsection

@section ('header')
<header class="layout_header">
  <nav class="layout_header__nav">
    <a href="/shest1k" class="layout_header__logo">Shest1k</a>
    <a href="/about" class="layout_header__about">О нас</a>
    <a href="/contacts" class="layout_header__contacts">Контакты</a>
  </nav>
</header>
@endsection

@section ('main')
@foreach ($results as $blablabla)

<div class="layout_date">{{$blablabla['date']}}</div>
<div class="layout_name">{{$blablabla['name']}}</div>
<img src="{{ asset('/images/'.$blablabla['preview_image'])}}" alt="">
<div class="layout_image"><a href="#" class="preview_image">{{$blablabla['preview_image']}}</a></div>
<div class="layout_full_image"><a href="" class="full_image">{{$blablabla['full_image']}}</a></div>
<div class="layout_shortDesc">{{$blablabla['shortDesc']}}</div>
<div class="layout_desc">{{$blablabla['desc']}}</div>

@endforeach
@endsection