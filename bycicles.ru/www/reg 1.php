<html>
 <head>
  <title>Всё о велосипедах</title>
  <link rel="stylesheet" type="text/css" href="file.css">
 </head>
 <body background="1.jpg">
   <div class="string1"><H1>Всё о велосипедах </H1>
   </div>
   <div class="string2">
    <div class="box1">
	 <table class="table2" width="100%" border="2" cellpadding="35">
      <tr>
       <th class="box4"><a href="index.php">Главная</a></th>
      </tr>
      <tr>
       <th class="box5"><a href="history.php">Устройство Велосипеда</a></th>
      </tr>
      <tr>
       <th class="box6"><a href="properties.php">Основные типы</br> велосипедов</th>
      </tr>
      <tr>
       <th class="box6"><a href="reg.php">Регистрация</a></th>
      </tr>
      <tr>
       <th class="box7"><a href="contacts.php">Контакты</th>
      </tr>
     </table> 
	</div>
	<div class="box2">
	 <H2>Регистрация</H2>
	 <form class="reg" name="reg1" method="post" action="reg1.php">
	  Фамилия:<input type="text" name="firstname"></input>
	  <?php
	  $firstname=$_POST["firstmame"];
	  if (!$firstmame)
        echo "Фамилия не введена";
		else "пункт выполнен";
		
	  ?>
	  <br>
	  Имя:<input type="text" name="name"></input><br>
	  Отчество:<input type="text" name="papaname"></input><br>
	  Страна:<input type="text" name="country"></input><br>
	  Родной город:<input type="text" name="city"></input><br>
	  дата рождения(пример:01.01.2014):<input type="text" name="born"></input><br>
	  Логин:<input type="text" name="papaname"></input><br>
	  Пароль:<input type="password1" name="papaname"></input><br>
	  Повторите Пароль:<input type="password" name="papaname"></input><br>
	  <input type="submit" name="botton1" value="Да,я хочу зарегистрироваться"></input>
	 </form> 
	</div>
	<div class="box3">
	 <div class="enter">
	 </div>
	</div>
	</div>
   <div class="string3">
	 <p class="author">Филатов Степан ИУ4-13</p>
   </div>
 </body>
</html> 