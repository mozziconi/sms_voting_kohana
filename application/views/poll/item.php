<!-- h3 class="poll_header"><a href="/poll/<?=$poll->id?>"><?=$poll->title?></a></h3>
<p class="date">Начало - <?=date('d.m.Y H:i:s', strtotime($poll->start_date))?></p>
<?=$poll->end_date?"<p class=\"date\">Окончание - ".date('d.m.Y H:i:s', strtotime($poll->end_date))."</p>":''?> -->
<div id="poll_<?=$poll->id?>_tabs" class="poll_tabs">
	<!-- ul>
		<li><a href="/poll/<?=$poll->id?>/description">Описание</a></li>
		<li><a href="/poll/<?=$poll->id?>/answers">Голосование</a></li>
		<li><a href="/poll/<?=$poll->id?>/regions">Регионы</a></li>
		<li><a href="/poll/<?=$poll->id?>/log">Лог голосования</a></li>
	</ul -->
	<ul>
		<li><a href="#tabs_<?=$poll->id?>_description">Описание</a></li>
		<li><a href="#tabs_<?=$poll->id?>_answers">Голосование</a></li>
		<li><a href="#tabs_<?=$poll->id?>_regions">Регионы</a></li>
		<li><a href="#tabs_<?=$poll->id?>_log">Лог голосования</a></li>
	</ul>
  <div class="poll_tab" id="#tabs_<?=$poll->id?>_description">
    <?php echo View::factory('poll/description')->bind('poll',$poll); ?>
  </div>
  <div class="poll_tab" id="#tabs_<?=$poll->id?>_answers">
    <?php echo View::factory('poll/answers')->bind('poll',$poll); ?>
  </div>
  <div class="poll_tab" id="#tabs_<?=$poll->id?>_regions">
    <?php echo View::factory('poll/regions')->bind('poll',$poll); ?>
  </div>
  <div class="poll_tab" id="#tabs_<?=$poll->id?>_log">
    <?php echo View::factory('poll/log')->bind('poll',$poll); ?>
  </div>
</div>
<script>
	$( "#poll_<?=$poll->id?>_tabs" ).tabs();
</script>
