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

<div class="section material" id="about">
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

<div class="section why programme" id="program">
	<div class="container-narrow">
		<div class="heading">
	    <h2 class="bigger">Programma</h2>
	    <p>Hoe ziet de summerschool er uit?</p>
	  </div>
	<div class="row-fluid card">
	  <div class="span12">
			<div class="info">
				<p>De summerschool bestaat uit drie bijeenkomsten en tussendoor online hulp van dezelfde assistenten die bij de bijeenkomsten aanwezig zijn. Op die manier hoef je niet elke dag op en neer naar Delft.</p>
				<br><div id="timeline" width="100%" height="20"></div>
				<dl>
					<dt>Eerste bijeenkomst <small>maandag 5 augustus</small></dt><dd>Tijdens de eerste bijeenkomst krijg je het materiaal dat je nodig hebt uitgereikt. Het programma van de dag is als volgt: 
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 12:00 uur</td><td>Instructie en samen oefenen</td></tr>
							<tr><td>12:00 - 13:30 uur</td><td>Lunch en mini-excursie</td></tr>
							<tr><td>13:30 - 17:00 uur</td><td>Instructie en samen oefenen</td></tr>
						</table></dd>
					<dt>Thuis aan de slag</dt><dd>Na de eerste bijeenkomst ga je thuis aan de slag met de opgaven en het oefenmateriaal dat je meekrijgt. Er is voor elke dag minimaal 2 uur aan oefenopgaven beschikbaar. Als je vragen hebt dan staan de assistenten voor je klaar op Google Hangout of Skype.</dd>
					<dt>Tweede bijeenkomst <small>vrijdag 9 augustus</small></dt><dd>Programma:
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 10:30 uur</td><td>Wat ging er goed, wat ging er minder</td></tr>
							<tr><td>10:30 - 12:30 uur</td><td>Extra uitleg op moeilijke onderwerpen</td></tr>
							<tr><td>12:30 - 14:00 uur</td><td>Lunch en mini-excursie</td></tr>
							<tr><td>14:00 - 17:00 uur</td><td>Instructie (nieuwe onderwerpen) en samen oefenen</td></tr>
						</table></dd>
					<dt>Thuis aan de slag</dt><dd>Wederom ga je thuis aan de slag met de opgaven en het oefenmateriaal dat je meekrijgt. Er is voor elke dag minimaal 2 uur aan oefenopgaven beschikbaar. Als je vragen hebt dan staan de assistenten voor je klaar op Google Hangout of Skype.</dd>
					<dt>Derde bijeenkomst <small>dinsdag 13 augustus</small></dt><dd>Alle besproken onderwerpen worden nog een keer op een rijtje gezet. Er is een toets, om te kijken wat je niveau is geworden, en na afloop krijg je een certificaat.
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 10:00 uur</td><td>Wat ging er goed, wat ging er minder</td></tr>
							<tr><td>10:00 - 12:00 uur</td><td>Extra uitleg op moeilijke onderwerpen</td></tr>
							<tr><td>12:00 - 13:00 uur</td><td>Lunch</td></tr>
							<tr><td>13:30 - 14:30 uur</td><td>Samen oefenen</td></tr>
							<tr><td>14:30 - 15:30 uur</td><td>Eindtoets</td></tr>
						</table></dd>
				</dl>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="section material" id="material">
	<div class="container-narrow">
	<div class="heading">
    <h2 class="bigger">Materiaal</h2>
    <p>Welke stof behandelen we, is er nog een boek nodig?</p>
  </div>
	<div class="card">
	  <div class="info">
			<img class='right' width="200" height="300" />
			<p>Het boek Calculus van Stewart is een begrip op de universiteit. Het is een gerenomeerd boek over de fundamentele onderdelen van de wiskunde. Gedurende het eerste jaar wordt dit boek nog vaker gebruikt. Om het nu al aan te schaffen kan dus geen kwaad.</p>
			<p>In de kosten van de summerschool is het boek inbegrepen. Het boek wordt geleverd door de studievereniging W.I.S.V. "Christiaan Huygens". Vanaf de eerste week kan je hier ook alle andere boeken kopen van het actuele kwartaal. Studenten Elektrotechniek kunnen de boeken dan kopen bij de Elektrotechnische Vereniging. Beide studieverenigingen zijn gevestigd in de faculteit.</p>
			<p>Meer informatie van de auteur: <a href="http://www.stewartcalculus.com/">www.stewartcalculus.com</a>
		</div>
	</div>
	</div>
</div>

<div class="section why" id="contact">
	<div class="container-narrow">
	<div class="heading">
    <h2 class="bigger">Contact</h2>
    <p>Heb je nog vragen? Stel ze hier</p>
  </div>
	<div class="card">
	  <div class="info">
			<textarea placeholder="Type hier je vraag..." style="width: 100%"></textarea>
			<input class="btn btn-primary right" type="submit" value="Stel je vraag" />
			<div class="clearfix"></div>
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