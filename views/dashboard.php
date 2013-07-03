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
			
			<?php 
				$user = Auth::instance()->get_user();
				if($user->state == 'admin') include "template/admin/users.php";
				else include "template/profile.php" ?>
			
			<?php
				if($user->state == 'admin') echo Request::factory('user/crosstable')->execute();
				else include "template/exams.php" ?>
			
			<h2 name="homework">Huiswerk</h2>
			<p>Er is nog geen huiswerk beschikbaar.</p>
    </div>
  </div>
</div>
