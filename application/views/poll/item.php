<h3 class="poll_header"><?=$poll->title?>, <?=$poll->start_date?> - <?=$poll->end_date?></h3>
<div id="poll_<?=$poll->id?>_tabs" class="poll_tabs">
	<ul>
		<li><a href="#poll_<?=$poll->id?>_tabs-1">Варианты</a></li>
		<li><a href="#poll_<?=$poll->id?>_tabs-2">Описание</a></li>
		<li><a href="#poll_<?=$poll->id?>_tabs-3">Регионы</a></li>
		<li><a href="#poll_<?=$poll->id?>_tabs-4">Лог голосования</a></li>
	</ul>
	<div id="poll_<?=$poll->id?>_tabs-1">
		<?php
			$answers = $poll->answers->order_by('title','asc')->find_all();
			echo View::factory('answer/list') ->bind('answers', $answers)->bind('poll',$poll);
		?>
	</div>
	<div id="poll_<?=$poll->id?>_tabs-2">
		<?=$poll->description?>
	</div>
	<div id="poll_<?=$poll->id?>_tabs-3">
		<h3>Это голосование проводится для следующих регионов</h3>
		<ul>
		<?php
		foreach ($poll->regions->order_by('name','asc')->find_all() as $region)
		{
			?>
			<li><?=$region->name?></li>
			<?php
		}
		?>
		</ul>
	</div>
	<div id="poll_<?=$poll->id?>_tabs-4">
		<table width="100%">
			<tr>
				<th align="center">Хэш номера телефона</th>
				<th align="center">Кандидат</th>
				<th align="center">Дата и время</th>
			</tr>
		<?php
			foreach($votes as $vote)
			{
			?>
			<tr>
				<td align="center"><?=$vote->phone->md5_phone?></td>
				<td align="center"><?=$vote->canceled?'<s>':''?><?=$vote->answer->title?><?=$vote->canceled?'</s>':''?></td>
				<td align="center"><?=$vote->created?></td>
			</tr>
			<?php
			}
		?>
		</table>
	</div>
</div>
<script>
	$( "#poll_<?=$poll->id?>_tabs" ).tabs();
	$("input:checkbox").bind("change",check_max_answers_per_vote);
	$('button').button();
</script>
