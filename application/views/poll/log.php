<table width="100%">
	<tr>
		<th align="center">Маркер голоса</th>
		<th align="center">Кандидат</th>
		<th align="center">Дата и время</th>
	</tr>
<?php
	$votes = $poll->votes->order_by('created','desc')->limit(100)->find_all();
	foreach($votes as $vote)
	{
	?>
	<tr>
		<td align="center"><?=$vote->md5_sign?></td>
		<td align="center"><?=$vote->canceled?'<s>':''?><?=$vote->answer->title?><?=$vote->canceled?'</s>':''?></td>
		<td align="center"><?=$vote->created?></td>
	</tr>
	<?php
	}
?>
</table>
