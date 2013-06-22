<div class="section welcome">
	<div class="container-narrow jumbotron">
	<div class="row-fluid">
	  <div class="span12">
			<h1><?php echo __("Wiskunde Summerschool"); ?></h1>
		  <p class="lead"><?php echo __("Begin je studie met een vliegende start"); ?></p>
			<form method="post" action="subscribe/interest">
				<?php if(Request::current()->query('success')): ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Gelukt!</strong> We hebben je e-mailadres opgeslagen. Zodra we meer informatie hebben updaten we deze pagina en ontvang je een e-mail.
					</div>
				<?php endif; ?>
					<input type="email" name="mail" placeholder="E-mailadres" class="token" value="" />
					<input
					 type="submit" 
					 class="btn btn-large btn-success" 
					 value="<?php echo __("Houd me op de hoogte"); ?>" 
					 data-toggle="popover" 
					 data-content="<?php echo __("De persoonlijke token die u per mail heeft ontvangen is de code om mee in te loggen."); ?>" 
					 data-original-title="<?php echo __("Aanmelden"); ?>" />
				<input type="hidden" name="redirect" value="Docenten" />
			</form>
			
		</div>
	</div>
	</div>
</div>

<div class="section why">
	<div class="container-narrow">
	<div class="heading">
    <h2 class="bigger">Waarom</h2>
    <p>Je hebt je examen gehaald, waarom zou je nog naar de summerschool moeten?</p>
  </div>
	<div class="card">
	  <div class="info">
			<canvas class='right' width="200" height="200" id="pieChartCanvas">Je browsers ondersteunt geen 'canvas'. Slechts 40% van de studenten haalt Analyse 1 (Wiskunde) de eerste keer.</canvas>
			<ol><li>Slechts 56% van de studenten (zonder summerschool) haalt het wiskunde vak Calculus de eerste keer.</li>
			<li>Huidig studenten geven aan dat de middelbare school ze niet voldoende heeft voorbereid op universitaire wiskunde.</li>
			<li>Wiskunde vormt een belangrijk onderdeel van de opleiding en ligt aan het fundament van bijna elk vak.</li>
			<li>Beginnen met een vliegende start zorgt er voor dat je zometeen in september niet meteen schrikt van de hoeveelheid stof en daardoor in de problemen komt.</li></ol>
			<p>Op de middelbare school heb je trucjes geleerd om sommen op te lossen. Op de universiteit leer je hoe wiskunde werkt.</p>
		</div>
	</div>
	</div>
</div>

<div class="section material">
	<div class="container-narrow">
		<div class="heading">
	    <h2 class="bigger">Programma</h2>
	    <p>Hoe ziet de summerschool er uit?</p>
	  </div>
	<div class="row-fluid card">
	  <div class="span12">
			<div class="info">
				<div id="timeline" width="100%" height="20"></div>
				De summerschool bestaat uit 2 bijeenkomsten en online hulp van dezelfde assistenten die bij de bijeenkomsten aanwezig zijn in de tussen tijd. Op die manier hoef je niet elke dag op en neer naar Delft.
				<dl>
					<dt>Eerste bijeenkomst</dt><dd>Tijdens de eerste bijeenkomst krijg je het materiaal dat je nodig hebt uitgereikt. Hierna maak je een toets zodat we weten waar je ongeveer staat en aan de hand daarvan wordt bepaald in welke groep je komt. Er zijn 2 momenten om deel te nemen aan de eerste bijeenkomst, op &lt;moment 1&gt; en op &lt;moment 2&gt;.</dd>
					<dt>Thuis aan de slag</dt><dd>Na de eerste bijeenkomst ga je thuis aan de slag met de opgaven en het oefenmateriaal dat je meekrijgt. Als je vragen hebt dan staan de assistenten voor je klaar op Google Hangout of Skype.</dd>
					<dt>Afsluiting</dt><dd>Alle besproken onderwerpen worden nog een keer op een rijtje gezet. Er komt een weer een toets, om te kijken of je beter bent geworden, en na afloop krijg je een certificaat.</dd>
				</dl>
			</div>
		</div>
	</div>
	</div>
</div>

<!--
<div class="section">
	<div class="container-narrow">
	<div class="row-fluid card">
	  <div class="span4">
			Book
		</div>
	  <div class="span8">
			Uitleg waarom, waar te kopen...
		</div>
	</div>
	</div>
</div>

<div class="section material">
	<div class="container-narrow">
	<div class="row-fluid card">
	  <div class="span4">
	    <h4>Verhaal</h4>
	    <p>
				Verhaaltje over iets.
			</p>
		</div>

	  <div class="span4">
	    <h4>Ervaringen</h4>
	    <blockquote>
				<p>"Lang heb ik getwijfeld."</p>
				<small>Persoontje A, <cite>student TW</cite></small>
			</blockquote>
	  </div>

	  <div class="span4">
	    <h3>Agenda</h3>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" data-src="holder.js/64x64">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">5 augustus</h4>
			    Mogelijkheid 1
			  </div>
			</div>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" data-src="holder.js/64x64">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">9 augustus</h4>
			    Mogelijkheid 2
			  </div>
			</div>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" data-src="holder.js/64x64">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">13 augustus</h4>
			    Afsluitende dag
			  </div>
			</div>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" data-src="holder.js/64x64">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">16 augustus</h4>
			    Begin Eerstejaarweekend en OWee
			  </div>
			</div>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" data-src="holder.js/64x64">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">2 september</h4>
			    Eerste collegedag
			  </div>
			</div>
	  </div>
	</div>

</div>
</div>-->