@extends ('index/index')

@section ('title')
<title>Авторизация</title>
@endsection

@section ('header')

@endsection

@section ('main')
<div class="signin_wrapper">
    <form action="/signin" class="signin_form" method="post">
        @csrf
        <div class="signin_username">
            Имя
            <input type="text" name="" id="signin_username" placeholder="Введите ваше имя">
        </div>
        <div class="signin_email">
            Почта
            <input type="email" name="" id="signin_email" placeholder="Введите вашу почту">
        </div>
        <div class="signin_password">
            Пароль
            <input type="password" name="" id="signin_password" placeholder="Введите ваш пароль">
        </div>
        <button class="signin_btn_submit" type="submit" name="form_signin_submit">Войти</button>
    </form>
</div>
@endsection