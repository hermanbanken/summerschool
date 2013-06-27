<form class="form-signin form-user" method="post">
  <h2 class="form-signin-heading">Inloggen</h2>
	<p>Na <a href="<?php echo URL::site("user/subscribe") ?>">inschrijving</a> ontvangt u op uw e-mailadres uw logingegevens.</p>
	<?php if($s = Request::current()->query('success')): ?>
		<div class="alert alert-success"><?php echo $s; ?></div>	
	<?php elseif(isset($message)): ?>
		<div class="alert alert-error">
		  <strong>Fout</strong>. <?php echo $message; ?>
		</div>
	<?php endif; ?>
  <input type="text" name="username" class="input-block-level" placeholder="Gebruikersnaam of e-mailadres" value="<?php echo htmlentities($username); ?>">
	<input type="password" name="password" class="input-block-level" placeholder="Wachtwoord">
  <button class="btn btn-large btn-primary" type="submit">Inloggen</button>
	<a class='pull-right' id="forgot" onclick="javascript:toggleForms()">Wachtwoord vergeten</a>
</form>

<script>
var toggleForms = function(){
	$(".form-signin").hide();
	$(".form-forgot").show();
}
</script>

<form class="form-forgot form-user" action="<?php echo URL::site("user/forgot") ?>" method="post" style="display:none">
  <h2 class="form-signin-heading">Wachtwoord vergeten</h2>
	<p>U ontvangt een nieuw wachtwoord als u hieronder uw e-mailadres invult.</p>
	<input type="text" name="email" class="input-block-level" placeholder="E-mailadres" value="<?php echo htmlentities($username); ?>">
	<button class="btn btn-large btn-primary" type="submit">Verzend</button>
</form>