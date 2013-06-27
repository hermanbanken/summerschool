<h2>Deelnemers</h2>
<table class="table table-bordered table-striped table-hover" style="background:white">
	<thead>
		<tr><th>#</th><th>Naam</th><th>Email</th><th>Telefoon</th><th>Opl.</th><th>Studienummer</th><th>Vooropleiding</th><th>CE</th><th>Opmerkingen</th><th></th></tr>
	</thead>
	<?php
	$users = ORM::factory("User")->with("usermeta")->find_all();
	foreach($users as $u){
		$default = array("phone", "education", "snumber", "preeducation", "grade", "comments");
		$meta = array_merge(
			array_combine($default, array_fill(0, count($default), "")), 
			$u->usermeta->find_all()->as_array('key', 'value')
		);
		echo "<tr><td>$u->id</td><td>$u->username</td><td>$u->email</td><td>$meta[phone]</td></td>";
		echo "<td>$meta[education]</td><td>$meta[snumber]</td><td>$meta[preeducation]</td>";
		echo "<td>$meta[grade]</td><td>$meta[comments]</td>";
		echo "<th>".
			"<a href='".URL::site("admin/user/$u->id")."' class='btn btn-mini'>Edit</a> ".
			"<a href='".URL::site("admin/target/$u->id")."' class='btn btn-mini'>Target</a>".
			"</th></tr>";
	} ?>
</table>