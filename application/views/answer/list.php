<table class="answers_header" width="100%">
	<tr>
		<td>
			<input id="poll_<?=$poll->id?>_search" type="text" placeholer="Поиск кандадата"/>
			<button onclick="searchAnswer(<?=$poll->id?>)">Поиск</button>
		</td>
		<td>
			<label for="poll_<?=$poll->id?>_sort">Сортировать по</label>
			<select id="poll_<?=$poll->id?>_sort" data-poll_id="<?=$poll->id?>">
				<option value="0">алфавиту</option>
				<option value="1">рейтингу</option>
			</select>
			в 
			<select id="poll_<?=$poll->id?>_sort_order" data-poll_id="<?=$poll->id?>">
				<option value="0">прямом</option>
				<option value="2">обратном</option>
			</select>
			порядке
		</td>
	</tr>
	<tr>
		<td width="100%" align="right" colspan="2">
			<button onclick="vote(<?=$poll->id?>);" data-poll_id="<?=$poll->id?>">Голосую</button>
		</td>
	</tr>
</table>
<div class="answers" id="poll_<?=$poll->id?>_answers">
	<?php
	foreach($answers as $answer)
	{
		echo View::factory('answer/item')->bind('answer', $answer);
	}
	?>
</div>
<script>
	$("#poll_<?=$poll->id?>_sort").change(sortAnswers);
	$("#poll_<?=$poll->id?>_sort_order").change(sortAnswers);
</script>
