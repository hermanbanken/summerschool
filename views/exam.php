<?php
function formatQuestion($text, $id){
	$text = preg_replace(array(
		"/\r?\n\r?\n\r?/",
		"/\n(([a-z])\.? ([^\n]+)\n)*([a-z])\.? ([^\n]+)/",
		"/^([a-z])\.? ([^\n]+)$/m",
		"/^/",
		"/$/"
	), array(
		"</p><p>\n",
		"<div class='multiplechoice row'>$0</div>",
		"<label class='inline span radio multiplechoice'><span>$1<input type='radio' value='$1' name='answer[$id]'></span>. <span>$2</span></label>",
		"<p>",
		"</p>",
	), $text);
	return $text;
}
?><form method="post" class="exam">
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
    <div class="span7">
			<div class="well">
				<h3>Vragen</h3>
				<ol>
				<?php foreach($questions as $question): ?>
					<li class="container-fluid" name="q-<?php echo $question->id ?>"><?php echo formatQuestion($question->question, $question->id) ?></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
		<div class="span3">
			<div class="well">
				<h3>Hoe te antwoorden</h3>
				<p>Als er gevraagd wordt om een formule in te voeren dan kan je gebruik maken van "LaTeX". Hieronder staan wat voorbeelden van veelvoorkomende elementen:</p>
				<table class="table table-bordered table-condensed" style="background:white;">
					<tr><th>Voorbeeld</th><th>LaTeX</th></tr>
					<tr><td>$x^2$</td><td><code>x^2</code></td></tr>
					<tr><td>$t_{start}$</td><td><code>t_{start}</code></td></tr>
					<tr><td>som</td><td></td></tr>
					<tr><td>integraal</td><td></td></tr>
					<tr><td>$\pi$</td><td><code>\pi</code></td></tr>
				</table>
			</div>
		</div>
  </div>
</div>
</form>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
      processEscapes: true
    },
    "HTML-CSS": { availableFonts: ["TeX"] }
  });
</script>
<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js"></script>