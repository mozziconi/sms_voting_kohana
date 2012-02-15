<div class="answer" data-poll_id="<?=$answer->poll->id?>" data-title="<?=$answer->title?>" data-rating="<?=$answer->rating?>">
	<table class="answer" width="100%">
		<tr>
			<td rowspan="2">
			<?php
			if($answer->image_url)
			{
			?>
				<img src="<?=$answer->image_url?>" class="answer_image"/>
			<?php
			}
			?>
			</td>
			<td width="100%">
				<?=$answer->title?>
			</td>
			<td rowspan="2">
				<h3><?=$answer->rating?></h3>
			</td>
			<td rowspan="2">
				<input
					type="checkbox"
					data-poll_id="<?=$answer->poll->id?>"
					data-id="<?=$answer->id?>"
					data-value="<?=$answer->title?>"
					data-max_answers="<?=$answer->poll->max_answers_per_vote?>"/>
			</td>
		</tr>
		<tr>
			<td width="100%">
				<?=$answer->description?>
			</td>
		</tr>
	</table>
</div>
