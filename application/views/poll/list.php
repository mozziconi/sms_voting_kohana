<div id="poll_list" class="poll_list accordion">
	<?php
	foreach($polls as $poll)
	{
		?>
		<h2 class="accordion_header"><?=$poll->title?>, <?=$poll->region->name?>, <?=$poll->start_date?> - <?=$poll->end_date?></h2>
		<div data-poll_id="<?=$poll->id?>"></div>
		<?php
	}
	?>
</div>
