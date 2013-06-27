<div class="section welcome">
	<div class="container-narrow jumbotron">
	<div class="row-fluid">
	  <div class="span12">
			<h1><?php echo __("Wiskunde-B Summerschool"); ?></h1>
		  <p class="lead"><?php echo __("Begin je studie met een vliegende start"); ?></p>
      <?php if(Auth::instance()->logged_in()): ?>
				<a class="btn btn-large btn-success" href="<?php echo URL::site("user"); ?>">Dashboard</a>
			<?php else: ?>
				<a class="btn btn-large btn-success" href="#subscribe">Inschrijven<br><small style="font-size:.6em">deadline 15 juli</small></a>
			<?php endif; ?>
		</div>
	</div>
	</div>
</div>

<div class="section material" id="about">
	<div class="container-narrow">
	<div class="heading">
    <h2 class="bigger">Waarom</h2>
    <p>Je hebt je examen gehaald, waarom zou je nog naar de Wiskunde-B summerschool komen?</p>
  </div>
	<div class="card">
	  <div class="info">
			<canvas class='right' width="200" height="200" id="pieChartCanvas">Je browser ondersteunt geen 'canvas'. Slechts 40% van de studenten haalt Analyse 1 (Wiskunde) de eerste keer.</canvas>
			<ol><li>Slechts de helft van de studenten die geen summerschool gevolgd hebben haalt de wiskunde vakken de eerste keer.</li>
			<li>Huidige studenten geven aan dat ze zich op de middelbare school niet voldoende hebben voorbereid op universitaire wiskunde.</li>
			<li>Wiskunde vormt een belangrijk onderdeel van je opleiding en ligt aan het fundament van bijna elk vak.</li>
			<li>Beginnen met een vliegende start zorgt er voor dat je zometeen in september niet meteen achter loopt en daardoor in de problemen komt.</li></ol>
			<p>Op de middelbare school heb je trucjes geleerd om sommen op te lossen. Tijdens de summerschool leer je hoe wiskunde werkt.</p>
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
					<dt>Eerste bijeenkomst <small>maandag 5 augustus</small></dt><dd>Tijdens de eerste bijeenkomst krijg je het materiaal dat je nodig hebt uitgereikt. Daarna word je in groepjes van 5 a 6 studenten ingedeeld. Het programma van de dag is als volgt: 
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 12:00 uur</td><td>Instructie en samen oefenen</td></tr>
							<tr><td>12:00 - 13:30 uur</td><td>Lunch en mini-excursie</td></tr>
							<tr><td>13:30 - 17:00 uur</td><td>Instructie en samen oefenen</td></tr>
						</table></dd>
					<dt>Thuis aan de slag</dt><dd>Na de eerste bijeenkomst ga je thuis aan de slag met de opgaven en het oefenmateriaal dat je meekrijgt. Dat kost elke dag zo'n 2 uur. Als je vragen hebt bespreek je die eerst met je groepje. Komen jullie er niet uit dan staan de assistenten voor je klaar op Google Hangout of Skype.</dd>
					<dt>Tweede bijeenkomst <small>vrijdag 9 augustus</small></dt><dd>Programma:
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 10:30 uur</td><td>Wat ging er goed, wat ging er minder</td></tr>
							<tr><td>10:30 - 12:30 uur</td><td>Extra uitleg op moeilijke onderwerpen</td></tr>
							<tr><td>12:30 - 14:00 uur</td><td>Lunch en mini-excursie</td></tr>
							<tr><td>14:00 - 17:00 uur</td><td>Instructie (nieuwe onderwerpen) en samen oefenen</td></tr>
						</table></dd>
					<dt>Thuis aan de slag</dt><dd>Wederom ga je thuis aan de slag met de opgaven en het oefenmateriaal dat je meekrijgt.</dd>
					<dt>Derde bijeenkomst <small>dinsdag 13 augustus</small></dt><dd>Alle besproken onderwerpen worden nog een keer op een rijtje gezet. Er is een toets om te kijken wat je niveau is geworden en na afloop krijg je een certificaat.
						<table class="table table-condensed table-striped">
							<tr><td>09:00 - 10:00 uur</td><td>Wat ging er goed, wat ging er minder?</td></tr>
							<tr><td>10:00 - 12:00 uur</td><td>Extra uitleg op moeilijke onderwerpen</td></tr>
							<tr><td>12:00 - 13:00 uur</td><td>Lunch</td></tr>
							<tr><td>13:30 - 14:30 uur</td><td>Samen oefenen</td></tr>
							<tr><td>14:30 - 15:30 uur</td><td>Eindtoets</td></tr>
							<tr><td>15:30 - 16:00 uur</td><td>Afsluiting en uitreiking</td></tr>
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

<div class="section material" id="subscribe">
	<div class="container-narrow">
	<div class="heading">
    <h2 class="bigger">Inschrijven</h2>
		<p>Inschrijven kan tot 15 juli. Na inschrijving wordt je op een wachtlijst gezet. We zullen handmatig studenten selecteren. Je ontvangt per mail of je bent geselecteerd of niet.</p>
	</div>
	<div class="card">
	  <div class="info">
		<?php if(Auth::instance()->logged_in()): ?>
			<p>Je staat op de wachtlijst of bent al ingeschreven. <a href="<?php echo URL::site("user/logout") ?>">Log uit</a> om iemand anders in te schrijven.</p>
			<p>Ga naar het <a href="<?php echo URL::site("user") ?>">dashboard</a>.</p>
		<?php else: include("subscribe.php"); endif; ?>
		</div>		
	</div>
	</div>
</div>