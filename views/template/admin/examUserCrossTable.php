<div name="top" class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
			<!--Sidebar content-->
			<div class="well">
				<ul class="nav nav-list">
				  <li class="nav-header">Kruistabel</li>
  				<li class="divider"></li>
					<li><a href="<?php echo URL::site("user") ?>">Terug</a></li>
				</ul>
			</div>
    </div>
    <div class="span10">
<?php
$exam = ORM::factory("Exam", Request::current()->param('id'));
echo "<h2>$exam->name</h2>";

echo "<table class='table table-bordered table-striped'><tr><th>Vraag</th>";

$first_user = $crosstable->current();
foreach($crosstable as $i => $row){
	if($row['user'] != $first_user['user']){ $crosstable->rewind(); break; }
	echo "<th>".($i+1)."</th>";
}
echo "</tr><tr>";

$last = false;
$needsClose = false;
$i = 0;
//print_r($crosstable->as_array());
foreach($crosstable as $row){
	if($row['user'] !== $last){
		$last = $row['user'];
		$i = 0;
		if($needsClose){
			echo "</tr><tr>";
		}
		$needsClose = true;
		echo "<th>$row[username]</th>";
	}
	$i++;
	echo "<td>".($row['made'] ? ($row['correct'] ? '&#x2713;' : '&#x2717;') : '-')."</td>";
} 
if($needsClose){
	echo "</tr>";
}
echo "</table>";
?>
</div>
</div>
</div>