<h2 name="exams">Toetsen</h2>
<p>De toetsen die hier staan vermeld kunnen online worden gemaakt. Werkt u liever van papier, vul dan achteraf de antwoorden online in.</p>
<?php
echo "<table class='table table-striped table-hover table-bordered' style='width:auto; background:white;'>";
echo "<thead><tr><th>Naam</th><th colspan=2>Opties</th></tr></thead>";
$toetsen = ORM::factory('Exam')->find_all();
if($toetsen->count())
foreach($toetsen as $toets){
	echo "<tr><td>$toets->name</td><td><a href='".URL::site("user/exam/$toets->id")."'>Maak online</a></td><td><a href='".URL::site($toets->pdf)."' title='download'>PDF</a></td>";
	if($user->has("roles", 2))
		echo "<td><a href='".URL::site("admin/exam/$toets->id")."' class='btn btn-mini'>Edit</a></td>";
	echo "</tr>";
} else {
	echo "<tr><td colspan=3>Er zijn nog geen toetsen beschikbaar.</td></tr>";
}
echo "</table>";
?>