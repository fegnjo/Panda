<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/registration.css">
</head>
<body>
<div class="container">
    <h1>Регистрация</h1>
    <form action="layuots/newUser.php" method="post" class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Введите ФИО"><br>
        <input type="text" class="form-control" name="login" placeholder="Введите логин"><br>
        <input type="password" class="form-control" name="password" placeholder="Введите пароль"><br>
        <input type="password" class="form-control" name="password_confirm" placeholder="Подвердите Ваш пароль"><br>
        <input class="btn btn-primary" type="submit" id="button" value="Зарегистрироваться">
    </form>
    <a href="auth.php">Уже зарегистрированы?</a>
</div>
</body>
</html>
