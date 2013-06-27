<div name="top" class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
			<!--Sidebar content-->
			<div class="well">
				<ul class="nav nav-list">
				  <li class="nav-header">Dashboard</li>
				  <li class="active"><a href="#top">Home</a></li>
				  <li><a href="#state">Inschrijfstatus</a></li>
				  <li><a href="#exams">Toetsen</a></li>
				  <li><a href="#homework">Huiswerk</a></li>
				</ul>
			</div>
    </div>
    <div class="span10">
			
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
			echo "</table>";
			?>
			
			<h2 name="exams">Toetsen</h2>
			<p>De toetsen die hier staan vermeld kunnen online worden gemaakt. Werkt u liever van papier, vul dan achteraf de antwoorden online in.</p>
			<?php
			echo "<table class='table table-striped table-hover table-bordered' style='width:auto; background:white;'>";
			$toetsen = ORM::factory('Exam')->find_all();
			if($toetsen->count())
			foreach($toetsen as $toets){
				echo "<tr><td>$toets->name</td><td><a href='".URL::site("user/exam/$toets->id")."'>Maak online</a></td><td><a href='".URL::site($toets->pdf)."' title='download'>PDF</a></td></tr>";
			} else {
				echo "<tr><td colspan=3>Er zijn nog geen toetsen beschikbaar.</td></tr>";
			}
			echo "</table>";
			?>
			
			<h2 name="homework">Huiswerk</h2>
			<p>Er is nog geen huiswerk beschikbaar.</p>
    </div>
  </div>
</div>
