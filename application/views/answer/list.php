<table class="answers_header">
	<tr>
		<td>
			<input id="poll_<?=$poll->id?>_search" type="text" placeholer="Поиск кандадата"/>
			<button onclick="searchAnswer($poll->id)">Поиск</button>
		</td>
		<td>
			<label for="poll_<?=$poll->id?>_sort">Сортировать по</label>
			<select id="poll_<?=$poll->id?>_sort">
				<option>алфавиту</option>
				<option>рейтингу</option>
			</select>
			в 
			<select id="poll_<?=$poll->id?>_sort_order">
				<option>прямом</option>
				<option>обратном</option>
			</select>
			порядке
		</td>
	</tr>
</table>
<table class="answers">
	<?php
	foreach($answers as $answer)
	{
		echo View::factory('answer/item')->bind('answer', $answer);
	}
	?>
</table>
