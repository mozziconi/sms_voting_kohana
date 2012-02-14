<h3 class="poll_header"><?=$poll->title?>, <?=$poll->region->name?>, <?=$poll->start_date?> - <?=$poll->end_date?></h3>
<div id="poll_<?=$poll->id?>_tabs" class="poll_tabs">
	<ul>
		<li><a href="#poll_<?=$poll->id?>_tabs-1">Варианты</a></li>
		<li><a href="#poll_<?=$poll->id?>_tabs-2">Описание</a></li>
		<li><a href="#poll_<?=$poll->id?>_tabs-3">Лог голосования</a></li>
	</ul>
	<div id="poll_<?=$poll->id?>_tabs-1">
		<?php
			$answers = $poll->answers->order_by(DB::expr('RAND()'))->find_all();
			echo View::factory('answer/list') ->bind('answers', $answers)->bind('poll',$poll);
		?>
		<div>
			<button onclick="vote(<?=$poll->id?>);" data-poll_id="<?=$poll->id?>">Vote</button>
		</div>
	</div>
	<div id="poll_<?=$poll->id?>_tabs-2">
		<?=$poll->description?>
	</div>
	<div id="poll_<?=$poll->id?>_tabs-3">
		Здесь будет лог голосования
	</div>
</div>
<script>
	$( "#poll_<?=$poll->id?>_tabs" ).tabs();
	$("input:checkbox").bind("change",check_max_answers_per_vote);
	$('button').button();
</script>
