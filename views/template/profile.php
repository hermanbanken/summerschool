<h2 name="state">Inschrijfstatus</h2>
<p>Stuur een email via het contactformulier als u onderstaande gegevens wilt laten wijzigen.</p>
<?php
$user = Auth::instance()->get_user();
$meta = array_merge(
	array("username" => $user->username, "email" => $user->email), 
	$user->usermeta->find_all()->as_array('key', 'value')
);
echo "<table class='table table-striped table-hover table-bordered' style='width:auto; background:white;'>";
if(count($meta) > 0){
	foreach($meta as $key => $val) echo "<tr><th>".__("field.".$key)."</th><td>".htmlentities($val)."</td></tr>";
}
echo "<tr><th>Status</th><td>".__($user->state)."</td></tr>";
echo "<tr><th>Wachtwoord</th><td><a class='btn' href='".URL::site("user/password")."'>Wijzig wachtwoord</a></td></tr>";
echo "</table>";
?>