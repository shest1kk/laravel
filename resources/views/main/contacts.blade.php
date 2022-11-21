@extends ('index/index')

@section ('title')
<title>Контакты</title>
@endsection

@section ('header')
<header class="contacts_header">
  <nav class="contacts_header__nav">
    <a href="/" class="contacts_header__home">Домой</a>
    <a href="/shest1k" class="contacts_header__logo">Shest1k</a>
    <a href="/about" class="contacts_header__about">О нас</a>
  </nav>
</header>
@endsection

@section ('main')
<main class="contacts_main">
    <div class="contacts_main__promo">
        <ul class="contacts_contacts__list">
            @foreach ($contacts as $contact)
            <li class="contacts_contacts__number">
                <img src="https://www.svgrepo.com/show/77324/phone-call.svg" alt="" class="number__svg">
                <a href="tel:+79998569598" class="contacts_number_link">{{$contact['phone']}}</a>
            </li>
            <li class="contacts_contacts__email">
                <img src="https://www.svgrepo.com/show/75552/email.svg" alt="" class="email__svg">
                <a href="mailto:tux703404@gmail.com" class="contacts_email_link">{{$contact['email']}}</a>
            </li>
            <li class="contacts_contacts__street">
                <img src="https://www.svgrepo.com/show/225213/street-map.svg" alt="" class="street__svg">
                <address class="contacts_address_link">{{$contact['address']}}</address>
            </li>
            <li class="contacts_contacts__telegram">
                <img src="https://www.svgrepo.com/show/354443/telegram.svg" alt="" class="telegram__svg">
                <a href="https://telegram.me/pakkkharev" class="contacts_telegram_link" target="__blank">{{$contact['telegram']}}</a>
            </li>
            <li class="contacts_contacts__vk">
                <img src="https://www.svgrepo.com/show/197946/vk-vk.svg" alt="" class="vkontakte__svg">
                <a href="https://vk.com/axaxaaxaxaxaxxaxaaxxa" class="contacts_vk_link" target="__blank">{{$contact['vk']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</main>
@endsection