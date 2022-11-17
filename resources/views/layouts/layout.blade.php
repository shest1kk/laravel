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
<main class="layout_main">
  <div class="layout_main__promo">Приветствуем на нашей странице!<br/>
Здесь вы можете узнать все последение новости мирового сообщества!</div>
</main>
@endsection