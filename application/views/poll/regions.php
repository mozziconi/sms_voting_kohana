<h3>Это голосование проводится для следующих регионов</h3>
<ul>
<?php
foreach ($poll->regions->order_by('name','asc')->find_all() as $region)
{
	?>
	<li><?=$region->name?></li>
	<?php
}
?>
</ul>
