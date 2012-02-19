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
	if(/^\d{8}$/.test(values.code))
	{
		$('#step2_button').button('enable');
		return {valid: true};
	}
	else
	{
		$('#step2_button').button('disable');
		return {valid: false, message: "Код подтверждения должен состоять ровно из восьми цифр"};
	}
}
// polls accordion content loader
function poll_accordion_content_loader(event, ui)
{
	if(ui.newContent.html()=="")
		ui.newContent.load('/poll/'+ui.newContent.attr('data-poll_id')+'?nt=1');
}			
// make ui accordion
function make_poll_accordion()
{
	var options = {
		clearStyle:true,
		collapsible:true,
		icons: false,	
		active:false,
		change:poll_accordion_content_loader,
		autoHeight: false,
		//active: false,
	}; 
	$(this).accordion(options);
}
// search and scroll to answer
function searchAnswer(poll_id)
{
	var str = $('#poll_'+poll_id+'_search').val();
	var selector = 'div[data-poll_id='+poll_id+'][data-title*="'+str+'"]';
	var answers = $(selector);
	if(answers.length)
		$("html,body").animate({scrollTop: $(answers.first()).offset().top}, 1000);
	else
		alert('Не удалось найти "'+str+'"');
}
//sort answers
function sortAlphAsc(a, b)
{
	return $(a).attr('data-title') > $(b).attr('data-title') ? 1 : -1;
}
function sortRatingAsc(a, b)
{
	return $(a).attr('data-rating') > $(b).attr('data-rating') ? 1 : -1;
}
function sortAlphDesc(a, b)
{
	return $(a).attr('data-title') < $(b).attr('data-title') ? 1 : -1;
}
function sortRatingDesc(a, b)
{
	return $(a).attr('data-rating') < $(b).attr('data-rating') ? 1 : -1;
}

function sortAnswers()
{
	var poll_id = $(this).attr('data-poll_id');
	var type = parseInt($('#poll_'+poll_id+'_sort').val());
	var order = parseInt($('#poll_'+poll_id+'_sort_order').val());
	var f = null;
	switch(type+order)
	{
		case 0:
			f = sortAlphAsc;
			break;
		case 1:
			f = sortRatingAsc;
			break;
		case 2:
			f = sortAlphDesc;
			break;
		case 3:
			f = sortRatingDesc;
			break;
	};
	if(f)
	{
		$('div[data-poll_id="'+poll_id+'"]').sortElements(f);
	}
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
