<style type="text/css">
     .footer {display: none; }

     .form-signin {
       max-width: 300px;
       padding: 19px 29px 29px;
       margin: 100px auto 100px;
       background-color: #fff;
       border: 1px solid #e5e5e5;
       -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
               border-radius: 5px;
       -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
          -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
               box-shadow: 0 1px 2px rgba(0,0,0,.05);
     }
     .form-signin .form-signin-heading,
     .form-signin .checkbox {
       margin-bottom: 10px;
     }
     .form-signin input[type="text"],
     .form-signin input[type="password"] {
       font-size: 16px;
       height: auto;
       margin-bottom: 15px;
       padding: 7px 9px;
     }

   </style>

<form class="form-signin" method="post">
  <h2 class="form-signin-heading">Inloggen</h2>
	<p>Na <a href="<?php echo URL::site() ?>">inschrijving</a> ontvangt u op uw e-mailadres uw logingegevens.</p>
	<?php if(isset($message)): ?>
		Error! <?php echo $message; ?>
	<?php endif; ?>
  <input type="text" name="username" class="input-block-level" placeholder="Gebruikersnaam" value="<?php isset($username) ? esc_attr($username) : ""; ?>">
  <input type="password" name="password" class="input-block-level" placeholder="Wachtwoord">
  <button class="btn btn-large btn-primary" type="submit">Inloggen</button>
</form>