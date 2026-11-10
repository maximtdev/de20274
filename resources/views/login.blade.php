@extends('layout')

@section('title', 'Авторизация')
@section('content')
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="login" placeholder="Введите логин" required>
        <button type="submit">Войти</button>
        @error('login')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </form>
@endsection




