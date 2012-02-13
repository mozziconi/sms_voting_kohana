<div class="accordion_header">
	<!-- переделать по-человечески -->
	<table width="100%">
		<tr>
			<td width="100%"><?=$answer->title?></td>
			<td>
				<input
					type="checkbox"
					data-poll_id="<?=$answer->poll->id?>"
					data-id="<?=$answer->id?>"
					data-value="<?=$answer->title?>"
					data-max_answers="<?=$answer->poll->max_answers_per_vote?>"/>
			</td>
		</tr>
	</table>
</div>
<div>
	<?=$answer->description?>
</div>
