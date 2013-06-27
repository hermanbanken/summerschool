<form class="form-horizontal form-user form-subscribe" method="post" action="<?php echo URL::site('user/subscribe') ?>">
  <h2 class="form-signin-heading">Inschrijven</h2>
	<p>Na inschrijving wordt je op een wachtlijst gezet. We zullen handmatig studenten selecteren. Je ontvangt per mail of je bent geselecteerd of niet.</p>
	
	<?php if(isset($errors) && is_array($errors)): foreach($errors as $field => $error): ?>
		<div class="alert alert-error">
			<strong><?php echo __("field.".$field); ?></strong>. <?php echo __("error.".$error[0]); ?>
		</div>
	<?php endforeach; endif; ?>
	
	<div class="control-group">
    <label class="control-label" for="inputName">Naam deelnemer*</label>
    <div class="controls">
      <input type="text" id="inputName" name="username" placeholder="Voornaam Achternaam" value="<?php echo @htmlentities($username); ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email*</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="email" placeholder="Email" value="<?php echo @htmlentities($email); ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPhone">06-nummer*</label>
    <div class="controls">
      <input type="text" id="inputPhone" name="meta[phone]" placeholder="Waarop kunnen we de cursist bereiken." value="<?php echo @htmlentities($meta['phone']); ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="edu">Opleiding*</label>
    <div class="controls">
      <select name="meta[education]" id="edu"><?php
      	$select = array(
					"TI"=>"Technische Informatica", 
					"EE"=>"Electrical Engineering", 
					"TW"=>"Technische Wiskunde"
				);
					
				foreach($select as $val => $text)
					echo "<option value=\"$val\" ".(isset($meta) && $meta['education']==$val ? 'selected':'').">$text</option>";
      ?></select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputSNumber">Studienummer</label>
    <div class="controls">
      <input type="text" id="inputSNumber" name="meta[snumber]" placeholder="Je studienummer (begint met een 4)" value="<?php echo @htmlentities($meta['snumber']); ?>">
			<span class="help-block">Optioneel, alleen als je hem al weet.</span>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="preed">Vooropleiding*</label>
    <div class="controls">
      <select name="meta[preeducation]" id="preed"><?php
      	$select = array(
					"VWO, NT", "VWO, NG", "VWO NT+NG", "VWO EM/CM", "Hbo","Anders"
				);
				
				foreach($select as $text)
					echo "<option value=\"$text\" ".(isset($meta) && $meta['preeducation']==$text ? 'selected':'').">$text</option>";
      ?></select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputGrade">Wiskunde-B CE cijfer*</label>
    <div class="controls">
      <input type="number" min="1" max="10" step="0.1" id="inputGrade" name="meta[grade]" value="<?php echo @htmlentities($meta['grade']); ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="comments">Opmerkingen</label>
    <div class="controls">
      <textarea id="comments" name="meta[comments]" placeholder="Moeten we nog iets weten? Allergieen?" rows="3"><?php echo @htmlentities($meta['comments']); ?></textarea>
    </div>
  </div>
	<div class="form-actions">
	  <button type="submit" class="btn btn-primary">Inschrijven</button>
	  <a class="btn" href="<?php echo URL::site() ?>">Annuleren</a>
	</div>
</form>