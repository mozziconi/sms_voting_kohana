<div id="poll_list" class="poll_list accordion">
	<?php
	foreach($polls as $poll)
	{
		echo View::factory('poll/item')->bind('poll', $poll);
	}
	?>
</div>
