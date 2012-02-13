<div>
	<ul>
	<?php
	foreach($ranges as $range)
	{
		?>
		<li><?=$range->network->name?>,<?=$range->region->name?>,<?=$range->code?>,<?=$range->range_start?></li>
		<?php
	}
	?>
	</ul>
</div>
