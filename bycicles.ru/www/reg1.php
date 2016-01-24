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
	 <hr>
	 <form class="reg" name="reg1" method="post" action="reg1.php">
	  Фамилия:<input type="text" name="firstname"></input>
	  <br>
	  <?php
	  if (!$_POST['firstname'])
	   {
        echo "Фамилия не введена";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$firstname=$_POST['firstname'];
	   }
	  ?>
	  <br>
	  Имя:<input type="text" name="name"></input><br>
	   <?php
	  if (!$_POST['name'])
	   {
        echo "Имя не введено";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$name=$_POST['name'];
	   }
	  ?>
	  <br>
	  Отчество:<input type="text" name="papaname"></input><br>
	   <?php
	  if (!$_POST['papaname'])
	   {
        echo "отчество не введено";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$papaname=$_POST['papaname'];
	   }
	  ?>
	  <br>
	  Страна:<input type="text" name="country"></input><br>
	   <?php
	  if (!$_POST['country'])
	   {
        echo "Страна не введена";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$country=$_POST['country'];
	   }
	  ?>
	  <br>
	  Родной город:<input type="text" name="city"></input><br>
	   <?php
	  if (!$_POST['city'])
	   {
        echo "Город не введен";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$city=$_POST['city'];
	   }
	  ?>
	  <br>
	  дата рождения(пример:01.01.2014):<input type="text" name="born"></input><br>
	   <?php
	  if (!$_POST['born'])
	   {
        echo "Дата рождения не введена";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$born=$_POST['born'];
	   }
	  ?>
	  <br>
	  E-mail:<input type="text" name="email"></input><br>
	   <?php
	  if (!$_POST['email'])
	   {
        echo "E-mail не введен";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$email=$_POST['email'];
	   }
	  ?>
	  <br>
	  Логин:<input type="text" name="login"></input><br>
	   <?php
	  if (!$_POST['login'])
	   {
        echo "Логин не введен";
	   }	
		else  
	   {
	    echo "пункт выполнен";
		$login=$_POST['login'];
	   }
	  ?>
	  <br>
	  Пароль:<input type="password" name="password1"></input><br>
	   <?php
	  if (!$_POST['password1'])
	   {
        echo "Пароль не введен";
	   }	
		else  
	   {
	    echo "пункт выполнен";
	   }
	  ?>
	  <br>
	  Повторите Пароль:<input type="password" name="password"></input><br>
	   <?php
	  if (!$_POST['password'])
	   {
        echo "Повторный пароль не введен";
	   }	
		elseif(strlen($_POST['password'])<6)
       {
	    echo "Пароль слишком короткий";
	   }
	    elseif($_POST['password1']!=$_POST['password'])
	   {
	    echo "Введенные пароли не совпадают";
	   }
	    else
		{
	    echo "пункт выполнен";
		$password=$_POST['password'];
		}
	    
	  ?>
	  <br>
	  <?php
	  $i=0;
	  if($firstname)
	   $i++;
	  if($name)
	   $i++;
	  if($papaname)
	   $i++;
      if($country)
	   $i++;
      if($city)
	   $i++;
      if($born)
	   $i++;	
      if($email)
	   $i++;
      if($login)
	   $i++;	 
      if($password1)
	   $i++;
      if($password)
       $i++;
      if($i=9){
      echo "<h3>Поздравляем,вы успешно прошли регистрацию</h3>";
	  $hostname="localhost";
	  $username="filatovsa";
	  $password="258147";
	  $dbName="users_bycicles";
	  $userstable="users";
	  mysql_connect($hostname,$username,$password) or die("не возможно создать соединение");
	  mysql_select_db($dbName) or die("база данных не выбрана");
	  $query="INSERT INTO users(firstname,name) values ('" . $_POST ["firstname"] . "','" . $_POST ["name"] . "')";
	  mysql_query($query) or die("данные не занесены");
	  echo"Чтобы окончательно зарегистрироваться,пройдите по ссылке в письме ,отправленного вам на почту";
	  mysql_close();
	  }
     ?>
	  <input type="submit" name="botton1" value="Хочу проверить , введённые мною, данные"></input>;
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