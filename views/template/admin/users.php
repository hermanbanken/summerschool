<?php
$users = ORM::factory("User")->where('state', '<>', 'admin')->with("usermeta")->find_all();
$state = array("interest" => "Wachtlijst", "paid" => "Betaald", "invited" => "Geselecteerd", "admin" => "Admin", "" => "-");
?><h2>Profiel</h2>
<a class="btn" href="<?php echo URL::site("user/password") ?>">Wijzig wachtwoord</a>
<h2>Deelnemers (<?php echo $users->count(); ?>)</h2>
<table class="table table-bordered table-striped table-hover" style="background:white">
	<thead>
		<tr><th>#</th><th>Naam</th><th>Email</th><th>Telefoon</th><th>Opl.</th><th>Studienummer</th><th>Vooropleiding</th><th>CE</th><th>Opmerkingen</th><th></th></tr>
	</thead>
	<?php
	foreach($users as $u){
		if($u->has("roles", 2)) continue;
		
		$default = array("phone", "education", "snumber", "preeducation", "grade", "comments");
		$meta = array_merge(
			array_combine($default, array_fill(0, count($default), "")), 
			$u->usermeta->find_all()->as_array('key', 'value')
		);
		echo "<tr><td>$u->id</td><td>$u->username</td><td>$u->email</td><td>$meta[phone]</td></td>";
		echo "<td>$meta[education]</td><td>$meta[snumber]</td><td>$meta[preeducation]</td>";
		echo "<td>$meta[grade]</td><td>$meta[comments]</td><td>".$state[$u->state]."</td>";
		echo "<th>".
			"<a href='".URL::site("admin/user/$u->id")."' class='btn btn-mini'>Edit</a> ".
			"<a href='".URL::site("admin/target/$u->id")."' class='btn btn-mini'>Target</a>".
			"</th></tr>";
	} ?>
</table>