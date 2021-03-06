<div class="secton navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-narrow">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo URL::site() ?>">TU Delft</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?php echo URL::site() ?>#about">Waarom</a></li>
          <li><a href="<?php echo URL::site() ?>#program">Programma</a></li>
          <li><a href="<?php echo URL::site() ?>#material">Deelname</a></li>
          <?php if(!Auth::instance()->logged_in()): ?>
					<li><a href="<?php echo URL::site() ?>#subscribe">Inschrijven</a></li>
					<?php endif; ?>
          <li><a href="<?php echo URL::site() ?>#contact">Contact</a></li>
        </ul>
        <ul class="nav pull-right">
          <?php if(Auth::instance()->logged_in()): ?>
					<li><a href="<?php echo URL::site("user") ?>">Dashboard</a></li>
					<li><a href="<?php echo URL::site("user/logout") ?>">Logout</a></li>
					<?php else: ?>
					<li><a href="<?php echo URL::site("user/login") ?>">Login</a></li>
					<?php endif; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>