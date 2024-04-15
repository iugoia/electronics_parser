@extends('layouts.header-footer')

@section('title')
    Регистрация
@endsection

@section('content')
    <section class="register_form">
        <div class="container">
            <h1>Регистрация</h1>
            <form action="{{route('registration')}}" method="post" class="form">
                <fieldset class="form_group">
                    <label>
                        <p>Почта</p>
                        <input type="text" name="email" class="form_control">
                    </label>
                </fieldset>
                <fieldset class="form_group">
                    <label>
                        <p>Пароль</p>
                        <input type="password" name="password" class="form_control">
                    </label>
                </fieldset>
                <fieldset class="form_group">
                    <label>
                        <p>Повтор пароля</p>
                        <input type="password" name="password_confirmation" class="form_control">
                    </label>
                </fieldset>
                <button type="submit" class="btn btn_primary">Регистрация</button>
            </form>
        </div>
    </section>
@endsection
