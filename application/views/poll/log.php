<table width="100%">
	<tr>
		<th>Маркер голоса</th>
		<th>Кандидат</th>
		<th>Дата и время</th>
	</tr>
<?php
	$votes = $poll->votes->order_by('created','desc')->limit(100)->find_all();
	foreach($votes as $vote)
	{
	?>
	<tr>
		<td><?=$vote->md5_sign?></td>
		<td><?=$vote->canceled?'<s>':''?><?=$vote->answer->title?><?=$vote->canceled?'</s>':''?></td>
		<td><?=$vote->created?></td>
	</tr>
	<?php
	}
?>
</table>
