<!DOCTYPE html>
<html lang="en">
<head>
	  <!-- Важная техническая информация для браузера -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Информация об Авторе и описание проекта -->
		<meta name="description" content=" Веб-портфолио карьерного продвижения Ксении Красельниковой">
		<meta name="author" content="Ксения Красельникова">
		<!-- Шрифты от Google -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

		<!-- Иконка, которая будет на вкладке в браузере -->
		<link rel="icon" href="/favicon.ico">
		<!-- Заголовок на вкладке в браузере -->
		<title>Ксения Красельникова - веб-портфолио</title>
		
		<!-- Подключаем наш файл со стилями, который находится в папке css-->
		<!--<link rel="stylesheet" href="css/bootstrap-grid.min.css">-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
			function lookMore(id){
				alert(id);
			}
		</script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/animate.css">
</head>

<body>
	<div class="modal fade" id="modal1">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			        <h4 class="modal-title">Учебный план</h4>
			    </div>
			    <div class="modal-body">
			    <?php

					$mysqli = new mysqli("localhost", "root", "", "kursovaya");
					if ($mysqli->connect_errno) {
					    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
					    exit;
					}
					mysqli_set_charset($mysqli, "utf8");
					$res = $mysqli->query("SELECT * FROM StudyPlan");

					echo "<div class='table-responsive'><table  class='table'><thead><tr><td>Индекс</td><td>Наименование</td><td>Учебная нагрузка</td><td>Курс</td><td>Семестр</td><td>Оценка</td></tr></thead><tbody>";
				    while ($row = mysqli_fetch_assoc($res)) {
				    	echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["StudLoad"]."</td><td>".$row["Cours"]."</td><td>".$row["Semester"]."</td><td>".$row["Grade"]."</td></tr>";
					}
				    echo "</tbody></table></div>";

					$mysqli->close();
				?>
			    </div>
			</div>
		</div>
	</div>

 <!-- Тут будет содержимое будущего сайта -->
 <header>
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-7">
 				<img class="header-img wow zoomIn" src="img/main-img.png" alt="монитор">
 			</div>
 			 			<!-- /.col-7 --> 
 			<div class="col-lg-5">
 				<p class="header-pretitle wow zoomIn " data-wow-delay="0.1s">Web-портфолио карьерного продвижения</p>
 				<h1 class="header-title wow zoomIn" data-wow-delay="0.2s">Ксении Красельниковой</h1>
 				<p class="header-subtitle wow zoomIn" data-wow-delay="0.3s">Разработка сайтов <br>
 					Web-дизайн
 				</p>
 				<div class="header-button-bloc wow zoomIn" data-wow-delay="0.4s">
 					<a href="https://vk.me/k_vorron" class="header-button"> Связаться </a>
 				</div>
 			</div>
 					<!-- /.col-5 -->		
 		</div>
 		<!-- /.row -->
 	</div>
 	<!-- /.container -->
 </header>
 <section class="portfolio">
 		<div class="about-me">
	 		<div class="container">
	 			<div class="info-portfolio wow zoomIn" data-wow-delay="0.1s">
	 				<h1>Обо мне</h1>
	 				<div class="info-portfolio-2">
						<div  class="row">
							<div class="col-md-4"><h2>Обо мне</h2>
							 	<p class="info-text"> Доброго времени суток, меня зовут Ксения Красельникова. Род моей деятельности - разработка сайтов с нуля, под ключ. Я являюсь специалистом по CMS WordPress. Осуществляю верстку и программирование сайтов. Желаете сделать ваш сайт идеальным для всех устройств? Я знаю, как вам помочь, с помощью адаптивной верстки на Bootstrap.  Я постоянно совершенствую свои профессиональные навыки.Так же, вы можете заказать у меня разработку сайта с нуля,или связаться со мной для сотрудничества. </p>
							 </div>
							<div class="col-md-4">
								<div class="info-photo">
									<img src="img/avatar.jpg" alt="Фото"  width="70%">
								</div>
							</div>
	 						<div class="col-md-4"><h2>Персональная информация</h2>
								<p class="info-text-2"> Номер телефона: 8-902-652-35-66<br>
									e-mail: ksyushenka98kseniya@gmail.com<br>
									
								</p>
	 						</div>
	 					</div>
	 				
	 				</div>
	 			
	 			</div>
	 		</div>
 		</div>
 		<div class="works">
 			<div class="container">
		 		<div class="portfolio-blok wow zoomIn" data-wow-delay="0.2s">
		 		<h2 class="portfolio-title"> Портфолио </h2>
		 		<p class="portfolio-subtitle"> мои работы </p>
		 		<div class="row">
		 			<div class="col-md-6">
		 				<div class="portfolio-col-1">
		 					<img src="img/01.jpg" alt="роспись">
		 				<h3>Роспись</h3>
		 				<p class="portfolio-text">Изображение «роспись»  выполнено в графическом редакторе CorelDRAW....</p>
		 		
		 				</div>
		 			</div>
		 			<!-- /.col-6 -->
		 			<div class="col-md-6">
		 				<div class="portfolio-col-2">
		 					<img src="img/02.jpg" alt="Мир">
		 				<h3>Разбитая табличка</h3>
		 				<p class="portfolio-text" >Разбитая табличка выполнена в графическом редакторе CorelDRAW...</p>
		 			
		 			</div>
		 			</div>
		 			<!-- /.col-6 -->
		 			<div class="col-md-6">
		 				<div class="portfolio-col-1">
		 					<img src="img/03.jpg" alt="Мир">
		 				<h3>Ледяная надпись</h3>
		 				<p class="portfolio-text" >Ледяная налпись выполнена в графическом редакторе CorelDRAW...</p>
		 			</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="portfolio-col-2">
		 					<img src="img/04.jpg" alt="Мир">
		 				<h3>Кровавая надпись</h3>
		 				<p class="portfolio-text" >Кровавая надпись выполнена в графическом редакторе CorelDRAW...</p>
		 			</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="portfolio-col-1">
		 					<img src="img/05.jpg" alt="Мир">
		 				<h3>Колючая надпись</h3>
		 				<p class="portfolio-text" >Колючая надпись выполнена в графическом редакторе CorelDRAW...</p>
		 			</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="portfolio-col-2">
		 					<img src="img/06.jpg" alt="Мир">
		 				<h3>Изображение «слон»</h3>
		 				<p class="portfolio-text" >Изображение «слон»  выполнено в графическом редакторе CorelDRAW...</p>
		 				</div>
		 			</div>

		 		</div>
		 		
		 		<h2 class="portfolio-title-2"> Достижения </h2>
	<!-- Карусель -->
				<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
	<!-- Индикаторы для карусели -->
				  <ol class="carousel-indicators">
	<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
				    <li data-target="#myCarousel" data-slide-to="1"></li>
	<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>   
	<!-- Слайды карусели -->
				  <div class="carousel-inner">
	<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
				    <div class="active item">
				     <img src="img/Shablon.jpg" alt="1 слайд">
				      <div class="carousel-caption">
				      </div>
				    </div>
	<!-- Слайд №2 -->
				    <div class="item">
				    <img src="img/готовый.jpg" alt="1 слайд">
				      <div class="carousel-caption">		
				      </div>
				    </div>
				  </div>
	<!-- Навигация для карусели -->
	<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
	<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
		</div>
	 </div>
 </div>
	  		<div class="about-me">
	 	 		<div class="container">
	 	 			<div class="info-portfolio wow zoomIn" data-wow-delay="0.2s">
	 	 				<h1>Учебный план</h1>
	 	 				<a class="button" data-toggle="modal" data-target="#modal1">Посмотреть</a>
				 		<div class="row">
				 			<div class="col-md-6">
				 				<div class="pm">
				 				<h3>ПМ 01.</h3>
				 				<p class="pm-text">Разработка программных модулей программного обеспечения для компьютерных систем</p>
				 				<a class="pmButton" id="1">Посмотреть</a>
				 				</div>
				 			</div>
				 			<div class="col-md-6 ">
				 				<div class="pm">
				 				<h3>ПМ 02.</h3>
				 				<p class="pm-text" >Разработка баз данных и их администрирование.</p>
				 				<a class="pmButton" id="2">Посмотреть</a>
				 				</div>
				 			</div>
				 			<div class="col-md-6">
				 				<div class="pm">		 				
				 				<h3>ПМ 03.</h3>
				 				<p class="pm-text" >Участие в интеграции программных модулей.</p>
				 				<a class="pmButton" id="3">Посмотреть</a>
				 				</div>
				 			</div>
				 			<div class="col-md-6">
				 				<div class="pm">
				 				<h3>ПМ 04.</h3>
				 				<p class="pm-text" >Выполнение работ по одной или нескольким профессиям рабочих, должностям служащих.</p>
				 				<a class="pmButton" id="4">Посмотреть</a>
				 				</div>
				 			</div>
				 			<div class="col-md-6 col-md-offset-3">
				 				<div class="pm-1">
				 				<h3>ПМ 05.</h3>
				 				<p class="pm-1-text" >Разработка графических и пользовательских интерфейсов.</p>
				 				<a class="pmButton" id="5">Посмотреть</a>
				 				</div>
				 			</div>
			 	 		</div>
	 	 			</div>
	 	 		</div>
	 	 </div>
 </section>
 <footer>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4">
 				<h4 class="footer-author">Ксения Красельникова</h4>
 				<p class="footer-text">Разработка сайтов</p>
 			</div>
 			<div class="col-md-4">
 				<div class="footer-cta-block  wow bounce" data-wow-delay="0.1s">
 					<p class="footer-cta">Напишите мне:</p>
 					<form method="post" action="mail.php">
						<fieldset>
										<strong>Ваше имя:</strong><br />
										<input type="text" name="name" size="30"/>
							<br />
										<strong>Ваш e-mail:</strong><br />
										<input name="email" type="text" size="30" />
							<br />
										<strong>Ваше сообщение:</strong><br />
										<textarea name="mess" rows="3" cols="25"></textarea>
										<a href="" class="footer-button">Написать</a>
						</fieldset>
					</form>
 				</div>
 			</div>
 			<div class="col-md-4">
 				<div class="social-block">
 					<p>Подпишитесь:</p>
 					<a href="https://www.facebook.com/ksyushenka.kseniya?ref=bookmarks"><img class="wow bounce" src="img/socials/facebook-logo-button.png" alt="Фейсбук" data-wow-delay="0.1s"></a>
 					<a href="https://t.me/vor_ron"><img class="wow bounce" src="img/socials/telegram-symbol.png" alt="Телеграм" data-wow-delay="0.2s"></a>
 					<a href="https://vk.com/k_vorron"><img class="wow bounce" src="img/socials/vk-social-logotype.png" alt="ВК" data-wow-delay="0.3s"></a>
 					<a href="#"><img class="wow bounce" src="img/socials/youtube-symbol.png" alt="Ютуб" data-wow-delay="0.4s"></a>
 				</div>
 			</div>
 		</div>

 		<!-- /.row -->
 	</div>
 	<!-- /.container -->
</footer>
<script src="js/wow.min.js"></script>

<script>
	new WOW().init();
</script>

<script>
    $('.pmButton').on('click', function(){
        var val = 44 + Number($(this).attr('id'));
        if($("div").is("#pm" + val)){
            $("#pm" + val).modal("show");
        }
        else{
            $.ajax({
                type:"POST",
                url:'main.php',
                data:{pm_id: val},
                success:function(data){
                	$('#modal1').before(data);
                    $("#pm" + val).modal("show");
                },
                error:function(){
                    alert("Для данного модуля компетенции не найдены!");
                }
            });   
        }
    });
</script>

</body>
</html>