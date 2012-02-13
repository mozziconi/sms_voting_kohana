<h3 class="accordion_header"><?=$poll->title?>, <?=$poll->region->name?></h3>
<div>
	<div id="poll_<?=$poll->id?>" class="poll_item accordion" data-active="1">
		<!-- h3 class="accordion_header">Answers</h3 -->
		<div>
			<?php
				$answers = $poll->answers->order_by(DB::expr('RAND()'))->find_all();
				echo View::factory('answer/list') ->bind('answers', $answers);
			?>
			<button onclick="vote(<?=$poll->id?>);" data-poll_id="<?=$poll->id?>">Vote</button>
		</div>
		<h3>Description</h3>
		<div><?=$poll->description?></div>
	</div>
</div>
