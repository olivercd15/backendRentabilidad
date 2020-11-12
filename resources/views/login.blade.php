<!doctype html>
<html lang="es">
<head >
    <meta charset="utf-8">
    <title>Software De Rentabilidad</title>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo2.svg')}}"/>
</head>
<body>

<div class="login-box">
    <img src="{{asset('images/logo.png')}}"  class="avatar" alt="Avatar Image">
    <h1>Login </h1>
    <form action="" method="">
        @csrf

        <!-- USERNAME INPUT -->
        <label for="username">Email: </label>
        <input type="text" name="email" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
            <a  href="index" type="submit" id="loguear">Loguear</a>
        <a href="#">Lost your Password?</a><br>
        <a href="registrar">Don't have An account?</a>
    </form>
</div>
</body>
</html>
