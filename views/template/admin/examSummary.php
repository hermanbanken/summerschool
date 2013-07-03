<?php 
$last = false;
$needsClose = false;
$i = 0;
foreach($crosstable as $row){
	if($row['exam'] !== $last){
		$last = $row['exam'];
		$i = 0;
		if($needsClose){
			echo "</table>";
		}
		echo "<h2>$row[examname] ";
		echo "<a href='".URL::site("user/crosstable/$row[exam]")."' class='btn btn-mini'>Kruistabel</a> ";
		echo "<a href='".URL::site("admin/exam/$row[exam]")."' class='btn btn-mini'>Edit</a></h2>";
		echo "<table class='table table-bordered table-striped'>";
		echo "<tr><th>Vraag</th><th>Gemaakt</th><th>Goed</th><th>Percentage</th></tr>";
		$needsClose = true;
	}
	$i++;
	echo "<tr><td>$i</td><td>$row[made]</td><td>$row[correct]</td><td>".($row['made'] > 0 ? ($row['correct'] / $row['made'] * 100)."%" : '-')."</td></tr>";
} 
if($needsClose){
	echo "</table>";
}
?>