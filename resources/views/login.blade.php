<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в систему</title>
</head>
<body>
<h2>Авторизация</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($errors->has('login'))
    <p style="color: red;">{{ $errors->first('login') }}</p>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Логин:</label>
    <input type="text" name="login" value="{{ old('login') }}" required>
    <button type="submit">Войти</button>
</form>
</body>
</html>
