<?php
	$answers = $poll->answers->order_by('title','asc')->find_all();
	echo View::factory('answer/list') ->bind('answers', $answers)->bind('poll',$poll);
?>
