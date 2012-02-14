<tr>
	<td rowspan="2">
		<input
			type="checkbox"
			data-poll_id="<?=$answer->poll->id?>"
			data-id="<?=$answer->id?>"
			data-value="<?=$answer->title?>"
			data-max_answers="<?=$answer->poll->max_answers_per_vote?>"/>
	</td>
	<td>
		<?=$answer->title?>
	</td>
</tr>
<tr>
	<td>
		<?=$answer->description?>
	</td>
</tr>
