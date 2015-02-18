<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title></title>
	<link rel="shortcut icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<? echo $prefix; ?>css/style.css" />
	<script>
		document.addEventListener("DOMContentLoaded",function(){
			var canvas = document.getElementById("canvas");
			var ctx = canvas.getContext("2d");
			var timer = 0;
			var shom = function(){
				ctx.clearRect(0,0,canvas.width,canvas.height);
				ctx.save();
				ctx.fillStyle = "rgb(184,184,184)";
				ctx.fillRect(0,0,canvas.width,canvas.height);
				ctx.restore();
				for(var i=0;i<10000;i++){
					ctx.fillRect(Math.random()*canvas.width,Math.random()*canvas.height,1,1);
				}
				setTimeout(shom,50);
			}
			shom();
		},false);
	</script>
</head>
<body>
	<div class="menus">
		<div class="wrapp">
			<div class="menu cl">
				<a class="lg1" href="javascript:void(0);"><span class="lg1"></span></a>
				<a class="lg2" href="javascript:void(0);"><span class="lg2"></span></a>
				<a class="lg3" href="javascript:void(0);"><span class="lg3"></span></a>
			</div>
		</div>
	</div>
	<div class="c1">
		<div class="wrapp">
			<h1>
				Совершенство изображения и звука<br>в Вашем новом телевизоре LG
			</h1>
			<div class="monitors cl">
				<div class="left">
					<span>Цифровое вещание</span>
				</div>
				<div class="right">
					<span>Аналоговое вещание</span>
				</div>
			</div>
		</div>
	</div>
	<div class="c2">
		<div class="wrapp">
			<div class="warning">
				<span>Смена цифрового формата вещания</span><br>
				C 15 января Россия перешла к новому цифровому стандарту DVB-T2
			</div>
			<div class="newold">
				<div class="new">
					<span>Новый формат</span>
					<div class="img sky" data-sky="2">
						<div class="block sky1" id="bg1"></div>
						<div class="block sky2" id="bg2"></div>
					</div>

					<i>
						Новые телевизоры LG<br>
						продолжают радовать своих<br>
						владельцев идельным цифровым<br>
						изображением 
					</i>
				</div>
				<div class="old">
					<span>Старый формат</span>
					<img src="img/old.png" height="175" width="234" alt="">
					<canvas id="canvas" width="222" height="118"></canvas>
					<i>
						Телевизоры предыдущего поколения<br>
						(без поддержки DVB-T2) перестали<br> 
						показывать цифровые эфирные каналы
					</i>
				</div>
			</div>
		</div>
	</div>
	<div class="c0">
		<div class="wrapp">
			<div class="title_h1">
				Во всех моделях телевизоров LG<br>
				встроена функция приема цифрового сигнала DVB-T2
			</div>
			<div class="tv"></div>
		</div>
	</div>
	<div class="c3">
		<div class="wrapp">
			<div class="content cl">
				<div class="left_block scroll">
					<!-- <div class="eye slideRight"></div> -->
					<img src="img/line.png" alt="" class="line fadeUp">
					<div class="line_eye slideRight"></div>
				</div>
				<div class="right_block">
					<span>Идеальное качество</span>
					<p>Цифровое эфирное телевидение гарантирует изображение<br>
					без помех и идеальное качество звука, что особенно оценят<br>
					владельцы современных ЖК и плазменных телевизоров.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="c4">
		<div class="wrapp">
			<div class="content cl">
				<div class="left_block">
					<span>Электронный телегид</span>
					<p>
						Расписание телепрограмм с возможностью навигации по<br>
						времени, названию, каналу и жанру. Установка напоминаний<br>
						о передаче или о событии – все это доступно вам по нажатию<br>
						всего одной кнопки.
					</p>
				</div>
				<div class="right_block"></div>
			</div>
		</div>
	</div>
	<div class="c5 scroll">
		<div class="wrapp">
			<div class="content cl">
				<div class="left_block">
					<div class="chanel-1 slideRight"></div>
					<div class="chanel-2 slideRightRight"></div>
				</div>
				<div class="right_block">
					<span>
						Эфирное Цифровое<br>
						Телевидение в моем регионе
					</span>
					<p>
						Уже сегодня Вы имеете возможность просматривать до 40<br>
						телеканалов* без помех в вещании, а совсем скоро добавятся<br>
						каналы в HD разрешении, а также каналы с поддержкой 3D.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="c6">
		<div class="wrapp">
			<div class="content cl">
				<div class="left_block">
					<span>
						Бесплатно.<br>
						Без дополнительного оборудования
					</span>
					<p>
						Для просмотра цифрового ТВ, которое включает в себя 20 каналов<br>
						без абонентской платы, вам не нужно покупать дополнительное<br>
						оборудование. Достаточно установить маленькую комнатную<br>
						антенну длиной не более 15 см или коллективную антенну, которая<br>
						до сих пор используется для аналогового вещания.
					</p>
				</div>
				<div class="right_block"></div>
			</div>
		</div>
	</div>
	<div class="c7">
		<div class="wrapp">
			<div class="h1">
				<span>О ходе цифровизации телевещания России</span>
				Узнать,какие пакеты каналов доступны в вашем регионе, вы можете по телефону горячей линии РТРС: 8-800-220-20-02<br>
				(звонок по России бесплатный) или на сайте: ртрс.рф/when/
			</div>
			<div class="img scroll">
				<div class="circle cir1 fadeUp"></div>
				<div class="circle cir2 fadeUp"></div>
				<div class="circle cir3 fadeUp"></div>
				<div class="circle cir4 fadeUp"></div>
				<div class="circle cir5 fadeUp"></div>
				<div class="circle cir6 fadeUp"></div>
			</div>
			<div class="text_center">
				<span>2015 год</span>
				83 региона РФ<br>
				4956 пунктов вещания
				<i>
					*20	каналов уже сейчас вещают на большей части территории России. Еще 20 каналов пока доступны только в Москве, в остальных регионах России согласно заявленному  плану<br>правительства РФ о переходе на цифровое телевидение, они должны появиться до конца 2015 г.  (http://digital-tv-dvbt2.ru/tretijj-multipleks/)
				</i>
			</div>
		</div>
	</div>
	<div class="c8">
		<div class="wrapp">
			<div class="h5">Рекомендованные 
			<br/><span>модели</span></div>
			<a href="/ru/tv-audio-video/infographics" target="_blank" class="compare" alt="Сравните основные характеристики телевизоров LG"></a>
			<div class="items cl">
				<div class="item">
					<a class="photo" href="/ru/televisions/lg-65UB980V-ultra-hd-televisions"><img src="img/item.png"/></a>
					<div class="item__text">
						<p>Флагманский 4K 3D ULTRA HD телевизор 2014 года с функцией Smart TV на новой платформе webOS</p>
						<p class="model">65UB980V</p>
					</div>
					<a href="/ru/televisions/lg-65UB980V-ultra-hd-televisions" class="buy">Узнать больше</a>
				</div>

				<div class="item">
					<a class="photo" href="/ru/televisions/lg-60LB870V-lcd-led-televisions"><img src="img/item.png"/></a>
					<div class="item__text">
						<p>Телевизор 2014 года со встроенным спикербаром и функцией Smart TV, CINEMA 3D на новой платформе webOS</p>
						<p class="model">60LB870V</p>
					</div>
					<a href="/ru/televisions/lg-60LB870V-lcd-led-televisions" class="buy">Узнать больше</a>
				</div>

				<div class="item">
					<a class="photo" href="/ru/televisions/lg-55UB850V-ultra-hd-televisions"><img src="img/item.png"/></a>
					<div class="item__text">
						<p>Новый 4K 3D ULTRA HD телевизор с функцией Smart TV на новой платформе webOS</p>
						<p class="model">55UB850V</p>
					</div>
					<a href="/ru/televisions/lg-55UB850V-ultra-hd-televisions" class="buy">Узнать больше</a>
				</div>
				<div class="item">
					<a class="photo" href="/ru/televisions/lg-49LB860V-lcd-led-televisions"><img src="img/item.png"/></a>
					<div class="item__text">
						<p>Телевизор 2014 года с встроенным спикербаром, Cinema 3D и функцией Smart TV на новой платформе webOS</p>
						<p class="model">49LB860V</p>
					</div>
					<a href="/ru/televisions/lg-49LB860V-lcd-led-televisions" class="buy">Узнать больше</a>
				</div>
			</div>
		</div>
	</div>
	<div class="c9">
		<div class="wrapp">
			<div class="h1">
				<span>Подробнее о стандарте DVB-T2</span>
				<p>
					DVB-T2 (Digital Video Broadcasting) —  это новое поколение стандарта эфирного цифрового телевидения. Благодаря этому стандарту возможно<br>
					увеличить на 30—50% ёмкость сетей эфирного цифрового телевидения по сравнению со старым аналогом - DVB-T. В DVB-T2 используется другой<br>
					тип модуляции, обеспечивающий более устойчивый сигнал. Новый стандарт отличается гибкостью и позволяет использовать большое количество<br>
					различных режимов работы. Превосходное качество и устойчивый сигнал, даже при высоком уровне шума, в DVB-T2 обеспечивается за счет<br>
					другого типа кодирования. В телевизорах нового стандарта используется новый метод, названный «поворот сигнального созвездия», который<br>
					даже в сложных эфирных условиях обеспечивает достаточный уровень устойчивости сигнала. Чтобы обеспечить необходимые условия приема<br>
					цифрового телевидения, в DVB-T2 предусмотрен механизм раздельной настройки устойчивости сигнала в пределах канала для каждой<br>
					предоставляемой службы, что в том числе позволяет экономить энергию, декодируя только одну программу, а не весь пакет программ.
				</p>
				<p>
					Ключевые особенности характеристик DVB-T2:
				</p>
				<ul>
					<li>на 30% больше пропускная способность по сравнению с DVB-T;</li>
					<li>передача программ на мобильные и стационарные приёмники;</li>
					<li>нет необходимости заново строить инфраструктуру;</li>
					<li>уменьшение затрат на эксплуатацию.</li>
				</ul>
				<p>
					С DVB-T2 появляются новые цифровые сервисы и услуги:
				</p>
				<ul>
					<li>Возможность приема большего количества каналов;</li>
					<li>Вещание в форматах соотношения сторон экрана 4:3 и 16:9;</li>
					<li>Прием каналов с высокой чёткостью HDTV; </li>
					<li>Прием каналов со сверхвысокой чёткостью UHDTV;</li>
					<li>3D-телевидение;</li>
					<li>Доставка видео-контента по запросу пользователя;</li>
					<li>Телегид;</li>
					<li>Телетекст;</li>
					<li>Субтитры;</li>
					<li>Стереозвук;</li>
					<li>Объёмный звук;</li>
					<li>Звук Dolby Digital;</li>
					<li>Мультизвук (выбор языка вещания);</li>
					<li>Цифровое радио;</li>
					<li>Синхронизация времени и даты с цифровым телевещанием;</li>
					<li>Широкополосный доступ в Интернет;</li>
					<li>Система оповещения.</li>
				</ul>
			</div>
		</div>
	</div>

	<input type="hidden" name="prefix" class="prefix" value="<? echo $prefix; ?>">	
	<script type="text/javascript" src="<? echo $prefix; ?>js/plugins.js"></script>
</body>
</html>