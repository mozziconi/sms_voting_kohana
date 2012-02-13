<div class="answer_list accordion">
	<?php
	foreach($answers as $answer)
	{
		echo View::factory('answer/item')->bind('answer', $answer);
	}
	?>
</div>
