<form class="form-password form-user" method="post">
  <h2 class="form-signin-heading">Wachtwoord wijzigen</h2>
	<?php
		$flash = Session::instance()->get("flash", false);
		if($flash && $flash['source'] == "password"){
			echo "<div class='container-narrow'><div class='alert alert-$flash[type]'>$flash[message]</div></div>";
			Session::instance()->delete("flash");
		}	
	?>
	<?php if($s = Request::current()->query('success')): ?>
		<div class="alert alert-success"><?php echo $s; ?></div>	
	<?php elseif(isset($message)): ?>
		<div class="alert alert-error">
		  <strong>Fout</strong>. <?php echo $message; ?>
		</div>
	<?php endif; ?>
  <input type="password" name="old_password" class="input-block-level" placeholder="Uw huidige wachtwoord" value="">
	<input type="password" name="password" class="input-block-level" placeholder="Nieuw wachtwoord">
	<input type="password" name="password_confirm" class="input-block-level" placeholder="Nieuw wachtwoord nogmaals">
  <button class="btn btn-large btn-primary" type="submit">Wijzigen</button>
</form>