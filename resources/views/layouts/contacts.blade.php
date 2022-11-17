<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <title>Контакты</title>
</head>
<body>
<header class="contacts_header">
  <nav class="contacts_header__nav">
    <a href="/" class="contacts_header__home">Домой</a>
    <a href="/shest1k" class="contacts_header__logo">Shest1k</a>
    <a href="/about" class="contacts_header__about">О нас</a>
  </nav>
</header>

<main class="contacts_main">
    <div class="contacts_main__promo">
        <ul class="contacts_contacts__list">
            <li class="contacts_contacts__number">
                <img src="https://www.svgrepo.com/show/77324/phone-call.svg" alt="" class="number__svg">
                <a href="tel:+79998569598" class="contacts_number_link">+7 (999) 856-95-98</a>
            </li>
            <li class="contacts_contacts__email">
                <img src="https://www.svgrepo.com/show/75552/email.svg" alt="" class="email__svg">
                <a href="mailto:tux703404@gmail.com" class="contacts_email_link">tux703404@gmail.com</a>
            </li>
            <li class="contacts_contacts__street">
                <img src="https://www.svgrepo.com/show/225213/street-map.svg" alt="" class="street__svg">
                <address class="contacts_address_link">г. Москва, ул. Павла Корчагина, 20Ак3</address>
            </li>
            <li class="contacts_contacts__telegram">
                <img src="https://www.svgrepo.com/show/354443/telegram.svg" alt="" class="telegram__svg">
                <a href="https://telegram.me/pakkkharev" class="contacts_telegram_link">Телеграмм</a>
            </li>
            <li class="contacts_contacts__vk">
                <img src="https://www.svgrepo.com/show/197946/vk-vk.svg" alt="" class="vkontakte__svg">
                <a href="https://vk.com/axaxaaxaxaxaxxaxaaxxa" class="contacts_vk_link">ВКонтакте</a>
            </li>

        </ul>
    </div>
</main>

<footer class="footer">
    <div class="footer__content">
        <div class="footer__content__group">211-323</div>
        <div class="footer__content__full-name">Пахарев Егор Вячеславович</div>
    </div>
</footer>
</body>
</html>