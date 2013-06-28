<form method="post" class="exam">
<div name="top" class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
			<!--Sidebar content-->
			<div class="well">
				<ul class="nav nav-list">
				  <li class="nav-header">Toets: <?php echo $exam->name; ?></li>
					<?php foreach($questions as $key => $question): ?>
				  <li><a href="#q-<?php echo $question->id ?>">Vraag <?php echo $key+1 ?></a></li>
					<?php endforeach; ?>
  				<li class="divider"></li>
					<input type="submit" value="Opslaan" class="btn-primary btn" />
				  <li><a href="<?php echo URL::site("user") ?>">Terug naar Dashboard</a></li>
				</ul>
			</div>
    </div>
    <div class="span10">
			<div class="well">
				<h3>Vragen <button class="btn btn-primary">Opslaan</button></h3>
				<ol>
				<?php foreach($questions as $i => $question): ?>
					<li class="container-fluid" id="q-<?php echo $question->id ?>">
						<p>De LaTeX source van de vraag:</p>
						<textarea rows="10" name="question[<?php echo $question->id ?>]"><?php 
							echo $question->question; 
						?></textarea>
						<p>Antwoord:</p>
						<input class="input-block-level" name="answer[<?php echo $question->id ?>]" value="<?php 
							echo $question->validation;
						?>">
					</li>
				<?php 
					endforeach;
					$question = (object) array("id"=>"", "validation"=>"", "question"=>"Nieuwe vraag");
				?>
				</ol>
				<h3>Nieuwe vragen <button class="btn btn-primary">Opslaan</button></h3>
				<ol>
				<?php if(Request::current()->post("new")): 
					for($i = 0; $i < Request::current()->post("new"); $i++): ?>
				<li class="container-fluid" id="q-<?php echo $question->id ?>">
					<p>De LaTeX source van de vraag:</p>
					<textarea rows="10" name="question[<?php echo $question->id ?>]"><?php 
						echo $question->question; 
					?></textarea>
					<p>Antwoord:</p>
					<input class="input-block-level" name="answer[<?php echo $question->id ?>]" value="<?php 
						echo $question->validation;
					?>">
				</li>
				<?php endfor; else: ?>
					<label class="form-inline">
						Voeg <input type="number" class="input-mini" name="new" size="2" /> nieuwe vragen toe.
						<button class="btn btn-primary">Toevoegen</button>
				</label>
				<?php endif; ?>
				</ol>
			</div>
		</div>
  </div>
</div>
</form>