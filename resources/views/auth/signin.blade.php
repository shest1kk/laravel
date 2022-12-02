@extends ('index/index')

@section ('title')
<title>Авторизация</title>
@endsection

@section ('header')

@endsection

@section ('main')
<div class="signin_body_wrapper">
@if($errors->any())
<div class="signin_errors_alert">
    <ul class='signin_errors_ul'>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="signin_wrapper">
    <form action="/signin/check" class="signin_form" method="post">
        @csrf
        <div class="signin_username">
            Имя
            <input type="text" name="username" id="signin_username" placeholder="Введите ваше имя">
        </div>
        <div class="signin_email">
            Почта
            <input type="email" name="email" id="signin_email" placeholder="Введите вашу почту">
        </div>
        <div class="signin_password">
            Пароль
            <input type="password" name="password" id="signin_password" placeholder="Введите ваш пароль">
        </div>
        <button class="signin_btn_submit" type="submit" name="form_signin_submit" onclick="submitData()">Войти</button>
    </form>
</div>
</div>
@endsection