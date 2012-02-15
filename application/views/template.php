<?php
if(!isset($nt))
	$nt = false;
if(!$nt)
{
?><!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
		<title>SMS Voting</title>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/flick/jquery-ui.css">
		<link rel="stylesheet" href="http://cssr.ru/simpliste/css/isimple.css">
		<link rel="stylesheet" href="/valid8.css">
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
		<script src="/jquery.maskedinput.min.js"></script>
		<script src="/jquery.valid8.js"></script>
		<script src="/jquery.sorting.js"></script>
		<script src="/jquery.scrollTo-min.js"></script>		
		<script src="/voting.js"></script>
</head>
<body>
	<div class="container">
		<header class="header clearfix">
			<div class="logo">SMS Votings</div>
			<div class="menu_main">
				<a href="/">Текущие голосования</a>
				<a href="/archive">Архив голосований</a>
				<a href="/about">О проекте</a>
			</div>
		</header>
		<div class="info">
			<article class="hero clearfix">
				<div class="col_66" id="content">
<?php
}
echo $content;
if(!$nt)
{
?>
				</div>
				<div class="col_33" id="stat">
					<ol>
						<li>выбрать голосование</li>
						<li>выбрать варианты</li>
						<li>ввести свой номер телефона</li>
						<li>дождаться смс с кодом подтверждения</li>
						<li>ввести код</li>
						<li>PROFIT!!!111</li>
					</ol>
					<div class="not_for_profit">
						<table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="padding: 0.6em; background-color: #DAE6F2; border: 1px solid #B8CFE6; border-radius: 7px; -moz-border-radius: 7px;"><a href="https://money.yandex.ru/embed/?from=sbal" title="Виджеты Яндекс.Денег" style="width: 200px; height: 100px; display: block; margin-bottom: 0.6em; background: url('https://money.yandex.ru/share-balance.xml?id=153598173&key=0006EE96EE457DEA') 0 0 no-repeat; -background: none; -filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://money.yandex.ru/share-balance.xml?id=153598173&key=0006EE96EE457DEA', sizingMethod = 'crop');"></a><form action="https://money.yandex.ru/direct-payment.xml" method="post"><input type="hidden" name="receiver" value="410011287869310"/><input type="hidden" name="sum" value="0"/><input type="hidden" name="destination" value="Яндекс.Деньги &#8212; на хорошее дело не жалко!"/><input type="hidden" name="FormComment" value="Пожертвование через виджет &#171Мой баланс&#187;"/><input type="submit" value="Поддержать проект" style="margin-top: 0.6em; width: 100%;"/></form></div></td></tr></table>
					</div>
				</div>
			</article>
		</div>
		<footer class="footer clearfix">
			<div class="copyright">
				Keep it simplest 
				<div class="fb-like" data-href="http://cssr.ru/simpliste/ru.html" data-send="true" data-layout="button_count" data-width="100" data-show-faces="false" data-font="arial"></div>
			</div>
			<ul class="menu_bottom">
				<li class="active"><a href="#main">Текущие голосования</a></li>
				<li><a href="#archive">Архив голосований</a></li>
				<li><a href="#about">О проекте</a></li>         
			</ul>
		</footer>
	</div>
	<div id="poll_dialog" style="display:none" title="Голо сование :)">
		<input type="hidden" id="poll_id" value=""/>
		<input type="hidden" id="answer_ids" value=""/>
		<div id="step0">
			<h3>Ваш выбор:</h3>
			<ul id="choise_list"></ul>
			<!-- captcha here!!! -->
			<button id="step0_button">Да, я в здравом уме и твердой памяти</button>
		</div>
		<div id="step1" class="form" style="display:none;">
			<p>
				<label for="phone">Введите номер вашего сотового телефона</label>
				<span class="w">
					<input class="input" type="tel" id="phone" name="phone" placeholder="Номер телефона" required/>
				</span>
			</p>
			<button id="step1_button">Получить код подтверждения</button>
		</div>
		<div id="step2" class="form" style="display:none;">
			<p>
				<label for="code">Введите код подтверждения</label>
				<span class="w">
					<input class="input" type="text" id="code" name="code" placeholder="Код подтверждения" required/>
				</span>
			</p>
			<button id="step2_button">Да, я человек, и это мой голос!</button>
		</div>	
	</div>
</body>
<script type="text/javascript">
    var reformalOptions = {
        project_id: 55522,
        project_host: "egolosovanie.reformal.ru",
        tab_orientation: "left",
        tab_indent: 300,
        tab_bg_color: "#0071ea",
        tab_border_color: "#FFFFFF",
        tab_image_url: "http://tab.reformal.ru/T9GC0LfRi9Cy0Ysg0Lgg0L%252FRgNC10LTQu9C%252B0LbQtdC90LjRjw==/FFFFFF/4bfb34d91c8d7fb481972ca3c84aec38/left/0/tab.png",
        tab_border_width: 2
    };
    
    (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript'; script.async = true;
        script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'media.reformal.ru/widgets/v2/reformal.js';
        document.getElementsByTagName('head')[0].appendChild(script);
    })();
</script>
</html>
<?php
}
?>
