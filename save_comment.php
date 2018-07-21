<?php
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['comment'])) { $comment=$_POST['comment']; if ($comment =='') { unset($comment);} }

    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

 if (empty($name) or empty($comment)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }   
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $comment = stripslashes($comment);
    $comment = htmlspecialchars($comment);


 //удаляем лишние пробелы
    $name = trim($name);
    
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином

 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($db,"INSERT INTO comments (name,time,date,comment) VALUES('$name',CURTIME(),curdate(), '$comment')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        header('Location:index.php');
    // echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>