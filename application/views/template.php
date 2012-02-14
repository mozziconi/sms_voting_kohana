<?php
if(!isset($nt))
	$nt = false;
if(!$nt)
{
?>
<!doctype html>
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
		<script>
			// get array of attribute values by selector
			function getAttrValues(selector, attrname)
			{
				return $(selector).map(function(){return $(this).attr(attrname);}).get();
			}
			// 
			function check_max_answers_per_vote()
			{
				var poll_id = $(this).attr('data-poll_id');
				var max_answers = parseInt($(this).attr('data-max_answers'));
				var checked_count = $('input:checkbox:checked[data-poll_id="'+poll_id+'"]').length;
				$('button[data-poll_id="'+poll_id+'"]').button(checked_count?"enable":"disable");
				var checkboxes = $('input:checkbox:not(:checked)[data-poll_id="'+poll_id+'"]');
				if(checked_count >= max_answers)
					checkboxes.each(function(){$(this).attr("disabled",true);})
				else
					checkboxes.each(function(){$(this).removeAttr("disabled");})							
			}
			// voting		
			function vote(poll_id)
			{
				var checked_ids = getAttrValues('input:checkbox:checked[data-poll_id="'+poll_id+'"]', 'data-id');
				$('#answer_ids').val(checked_ids.join(','));
				var checked_values = getAttrValues('input:checkbox:checked[data-poll_id="'+poll_id+'"]',"data-value");
				var html = "";
				for(var i = 0; i < checked_values.length; i++)
					html += "<li>"+checked_values[i]+"</li>";
				$('#choise_list').html(html);
				$('#poll_id').val(poll_id);
				$('#phone').val('');
				$('#code').val('');
				$('#step1_button').button('disable');
				$('#step2_button').button('disable');
				$('#step1').hide();
				$('#step2').hide();
				$('#step0').show();
				$("#poll_dialog").dialog({modal:true,autoResize:true});				
			}
			// voting step 1
			function vote_step1()
			{
				$('#step0').hide();
				$('#step1').show();
				$('#phone').focus();
			}
			// voting step 2
			function vote_step2()
			{
				$.ajax(
					{
						url: '/ajax/get_pin_code',
						data:
							{
								phone: $('#phone').val().replace(/[^\d]+/g,''),
								poll_id: $('#poll_id').val(),
							},
						dataType:'json',
						type:'POST',
						success: function(data)
						{
							if(data.success || data.errorcode == 7)
							{								
								$('#step1').hide();
								$('#step2').show();
								$('#code').focus();
								if(data.error)
									alert(data.error);
								else
									alert(data.result.message);
							}
							else
							{
								alert(data.error);
								if(data.errorcode >= 3 && data.errorcode <= 6)
									$('#poll_dialog').dialog('close');
								else
									$('#phone').focus();
							}
						}
					}
				);
			}
			// voting step 3
			function vote_step3()
			{
				$.ajax(
					{
						url: '/ajax/vote',
						data:
							{
								phone: $('#phone').val().replace(/[^\d]+/g,''),
								poll_id: $('#poll_id').val(),
								code: $('#code').val(),
								answers: $('#answer_ids').val()
							},
						dataType:'json',
						type:'POST',
						success: function(data)
						{
							$('#poll_dialog').dialog('close');
							if(data.success)
							{								
								alert(data.result.message);								
							}
							else
							{
								alert(data.error);
							}
						}
					}
				);
			}
			// validators
			function testPhone(values)
			{
				if(/^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/.test(values.phone))
				{
					$('#step1_button').button('enable');
					return {valid: true};
				}
				else
				{
					$('#step1_button').button('disable');
					return {valid: false, message: "Введите номер телефона в формате '+7 (999) 999-99-99'"};
				}
			}
			function testCode(values)
			{
				if(/^[a-zA-Z\d]{8}$/.test(values.code))
				{
					$('#step2_button').button('enable');
					return {valid: true};
				}
				else
				{
					$('#step2_button').button('disable');
					return {valid: false, message: "Код подтверждения должен состоять ровно из восьми латинских букв и цифр"};
				}
			}
			// polls accordion content loader
			function poll_accordion_content_loader(event, ui)
			{
				if(ui.newContent.html()=="")
					ui.newContent.load('/poll/'+ui.newContent.attr('data-poll_id')+'?nt=1');
                //var clicked = $(this).find('.ui-state-active');
                //alert(clicked.html());
                //var contentDiv = clicked.next("div");
                //var poll_id = contentDiv.attr('data-poll_id');
                //contentDiv.load('/poll/'+poll_id);
			}			
			// make ui accordion
			function make_poll_accordion()
			{
				var options = {
					clearStyle:true,
					collapsible:true,
					icons: false,
					//					
					active:false,
					change:poll_accordion_content_loader,
					autoHeight: false,
					//active: false,
					//changestart:poll_accordion_content_loader
				}; 
				$(this).accordion(options);
			}
			// go!
			$(document).ready(
				function()
				{
					// enable checkboxses in accordion headers
					//$(".accordion .accordion_header input").click(function(evt){evt.stopPropagation();});
					// init ui components
					// accordions
					//$('.answer_list').each(make_accordion);
					$('.poll_list').each(make_poll_accordion);
					// buttons
					$('button').button();
					$('button').button('disable');
					$('#step0_button').button('enable');
					$("#step0_button").button().click(vote_step1);
					$("#step1_button").button().click(vote_step2);
					$("#step2_button").button().click(vote_step3);
					// checkboxes
					$("input:checkbox").bind("change",check_max_answers_per_vote);
					// inputs
					$("#phone").mask("+7 (999) 999-99-99");
					$('#phone').valid8(
						{
							'jsFunctions': [
								{
									function: testPhone, 
									values: function() {return {phone: $('#phone').val()}}
								}
							]
						}
					);
					$('#code').valid8(
						{
							'jsFunctions': [
								{
									function: testCode, 
									values: function() {return {code: $('#code').val()}}
								}
							]
						}
					);
				}
			);
		</script>
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
					<p class="center"><span class="button">Помочь деньгами или пивом :)</a></p>
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
</html>
<?php
}
?>
