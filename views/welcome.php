<div class="jumbotron">
		<h1><?php echo __("Beloon je docent voor zijn harde werk"); ?></h1>
	  <p class="lead"><?php echo __("De docenten van EWI werken hard om jou kennis en vaardigheden bij te brengen. Doe iets terug door op hen te stemmen en je waardering te uiten!"); ?></p>
	  <form method="post" action="auth/login">
				<input type="email" name="mail" size="5" placeholder="E-mailadres" class="token" value="" />
				<input
				 type="submit" 
				 class="btn btn-large btn-success" 
				 value="<?php echo __("Stem nu"); ?>" 
				 data-toggle="popover" 
				 data-content="<?php echo __("De persoonlijke token die u per mail heeft ontvangen is de code om mee in te loggen."); ?>" 
				 data-original-title="<?php echo __("Aanmelden"); ?>" />
			<input type="hidden" name="redirect" value="Docenten" />
		</form>
</div>

<hr>

<div class="row-fluid">
  <div class="span6">
    <h4>Verhaal</h4>
    <p>
			Verhaaltje over iets.
		</p>
	</div>

  <div class="span6">
    <h4>Ervaringen</h4>
    <blockquote>
			<p>"Lang heb ik getwijfeld."</p>
			<small>Persoontje A, <cite>student TW</cite></small>
		</blockquote>
  </div>
</div>