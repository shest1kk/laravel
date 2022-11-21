@extends ('index/index')

@section ('title')
<title>shest1k</title>
@endsection

@section ('header')
<header class="shest1k_header">
  <nav class="shest1k_header__nav">
    <a href="/" class="shest1k_header__home">Домой</a>
    <a href="/about" class="shest1k_header__about">О нас</a>
    <a href="/contacts" class="shest1k_header__contacts">Контакты</a>
  </nav>
</header>
@endsection

@section ('main')
<main class="shest1k_main">
        <div class="shest1k_main__image__wrapper">
            <img src="{{ asset ('images/7zCT0Cvi2wrYeetmBZKAxFmpaeOdtHhcQrUeua9RUOuSCJZHOlFnnU9lgwSGsqvY7fZwy1kAjQeoiwtKe3x3vzNs.jpg') }}" 
            alt=""
            class="shest1k_main__image">
        </div>
    </main>
@endsection