<!-- h3 class="poll_header"><a href="/poll/<?=$poll->id?>"><?=$poll->title?></a></h3>
<p class="date">Начало - <?=date('d.m.Y H:i:s', strtotime($poll->start_date))?></p>
<?=$poll->end_date?"<p class=\"date\">Окончание - ".date('d.m.Y H:i:s', strtotime($poll->end_date))."</p>":''?> -->
<div id="poll_<?=$poll->id?>_tabs" class="poll_tabs">
	<ul>
		<li><a href="/poll/<?=$poll->id?>/description">Описание</a></li>
		<li><a href="/poll/<?=$poll->id?>/answers">Голосование</a></li>
		<li><a href="/poll/<?=$poll->id?>/regions">Регионы</a></li>
		<li><a href="/poll/<?=$poll->id?>/log">Лог голосования</a></li>
	</ul>
</div>
<script>
	$( "#poll_<?=$poll->id?>_tabs" ).tabs();
</script>
