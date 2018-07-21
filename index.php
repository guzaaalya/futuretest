<!DOCTYPE html>
<html lang="ru-RU">
<html>
<head>
	<meta charset="utf-8">
	<title>Future</title>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=1100">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="wrapper">
	<header class="header">
		<div class="container clearfix">
		<div class="header__left">
			<div class="header__left-contacts">
			Телефон: (499) 340-94-71 <br>
			Email: info@future-group.ru
			</div>

			<div class="text">
				Комментарии
			</div>
		</div>
		<div class="header__right">
			<div class="img">
				<img src="pic/future.png">
			</div>
		</div>
	</div>



</header>
<section class="page">
	<div class="container clearfix">
	 <div class="posts">
           
		<?php
		include ("bd.php");
		$q = mysqli_query($db,"SELECT * FROM comments ORDER BY id DESC ");
		$row = mysqli_fetch_array($q);
		do {
			echo 
				'<article class="posts__item">
                <div class="posts__text">
                  <span class="posts__name"><strong>'.$row['name'].'</strong></span>
                  <span class="posts__date">'.$row['time'].' '.$row['date'].'</span><br>
                  <p class="posts__com">'.$row['comment'].'</p>
                </div>
              </article>';
          } while ($row = mysqli_fetch_array($q));
		?>
	</div>
	 <div class="form">
              <div class="form__title">
                Оставить комментарий
              </div>
              <div class="form__fields">
                <form class="form__elem" action="save_comment.php" method="post">
                  <div class="form__row clearfix">
                    <label class="form__cell">
                      <div class="form__field-title">
                        Ваше имя
                      </div>
                      <input type="text" name="name" class="form__input-text" placeholder="Введите имя" >
                    </label>
                  </div>
                  <div class="form__row">
                    <label class="form__textarea-label">
                      <div class="form__field-title">
                        Ваш комментарий
                      </div>
                      <input type="text" name="comment" class="form__textarea" placeholder="Введите сообщение"></input>
                    </label>
                  </div>
                  <div class="form__btns">
                    <div class="form__controls">
                      <div class="form__controls-left">
                        
                      </div>
                      <div class="form__controls-right">
                        <input type="submit" value="Отправить" class="form__submit">
                      </div>
                    </div>
                  </div>
                </form>
            </div>
</div>
</div>
</section>
</div>

<footer class="footer">
	<div class="container clearfix">
		<div class="footer__logo">
          <img src="pic/future.png" alt="" class="logo">
        </div>
         <div class="footer__info">
          <strong>Телефон: (499) 340-94-71</strong><br>
          <strong>Email: <ins>info@future-group.ru</ins></strong><br>
          <strong>Адрес: <ins>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</ins></strong><br>
          © 2010 - 2014 Future. Все права защищены<br>
        </div>
	</div>
</footer>

</body>
</html>