		

		<!-- presentation -->

		<div id="presentation"  class="row">  

			<div class="col-xs-12">

				<p>
					&nbsp; &nbsp; Nous vous remercions de prendre de votre temps pour répondre à ce questionnaire. Il est constitué de <span>10</span> étapes permettant d'étudier votre rapport à votre poids. Vous êtes prêt(e), c'est parti, cliquez sur le smiley.

				</p>
 
				<br> 
			 

				<strong style=" font-size: 3em ; "> <i id="smile"  class="fa fa-smile-o smile_close_presentation" aria-hidden="true"></i></strong>

			</div>
			


		</div>

		<!-- presentation2 -->

		<div id="presentation2"  class="row"> 

			<div class="col-xs-12">

				<p>
					&nbsp; &nbsp; Après avoir cliqué sur le bouton suivant, vous aurez <span>20</span> secondes pour lire la consigne. Vous aurez par la suite <span>40</span> secondes pour lister un maximum de <span>10</span> mots. Inscrivez votre premier mot dans la case, validez-le. Inscrivez votre deuxième mot dans la même case, validez-le de la même façon, et ainsi de suite pour les suivants.

				</p>

				<br> 
			 

				<button id="suivantPresentation2" class="btn btn-warning">Suivant</button>

			</div>
			


		</div>

		<!-- aspects -->

		<div id="aspects"  class="row">

			<div class="col-xs-12">

				<p>
				<span>1 / 10 )</span> Quels sont, selon vous, les aspects de votre vie les plus impactés par votre poids ? Indiquez <span>10</span> aspects maximum qui peuvent se retrouver impactés par votre poids en 40 secondes. Pour valider chaque aspect, il faut cliquer sur envoyer.
				</p>

				<div id="chrono">

					40 secondes restantes
					

				</div> 

				<br>

				<form id="formAspects" > 

					<fieldset>

						<div class="form-group"> 

							<input type="text" name="aspectpsy" id="aspectpsy" class="form-control  " placeholder="Aspect" size="60"  required>
						

						</div>

        				<button type="submit" class="btn btn-warning">Envoyer</button> 
    
					
					</fieldset>

				
    			</form>

    			<br>

    			<p id="aspectsResultats">

    				
    				

    			</p>

    			<span id="aspectsMax10">Merci pour les 10 aspects</span>
				

			</div>
			


		</div>

		<!-- importance -->

		<div id="importance"  class="row">

			<div class="col-xs-12">

				<p>
					
					<span>2 / 10 )</span> Classez du plus important au moins important les aspects que vous avez inscrits précédemment (1 = le plus important).
				</p>
				<br>

				<div id="aspects&Importance" class="table-responsive">

					<form id="formAspects&Importance">
						

						<fieldset>
							
							<table id="aspect&ImportanceTable" class="table table-bordered table-striped">





							</table>

							<button type="submit" class="btn btn-warning center-block">Envoyer</button> 


						</fieldset>


					</form>

					<br>

			

				</div>
				

			</div>
			


		</div>

		<!-- valence -->

		<div id="valence"  class="row">

			<div class="col-xs-12">

				<p>
					<span>3 / 10 )</span> Indiquez si chaque aspect est affecté positivement ou négativement par votre poids.

				</p>

				<br>

				<div id="aspects&Valence" class="table-responsive">

					<form id="formAspects&Valence">

						<fieldset>

							<table id="aspect&Importance&ValenceTable" class="table table-bordered table-striped">
								

							</table>

							<button type="submit" class="btn btn-warning center-block">Envoyer</button>
							


						</fieldset>
						

					</form>

					<br>
					


				</div>
				

			</div>
	

		</div>

		<!-- protocole chirurgie obésité -->

		<div id="protocoleChirurgieObesite" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>4 / 10 )</span> Avez-vous déjà envisagé de rentrer dans le protocole de chirurgie de l'obésité (anneau péri-gastrique, Sleeve ou Bypass) ?
					
				</p>

				<br>

				<form id="formprotocoleChirurgieObesite">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameprotocoleChirurgieObesite" value="Oui (J'y ai déjà eu recours)" id="oui1">
							<br>
							<label for="oui1">Oui (J'y ai déjà eu recours)</label>

							<br>

							<input type="radio" name="nameprotocoleChirurgieObesite" value="Oui (J'ai entrepris des démarches.)" id="oui2">
							<br>
							<label for="oui2">Oui (J'ai entrepris des démarches)</label>

							<br>

							<input type="radio" name="nameprotocoleChirurgieObesite" value="Oui (Je n'ai pas entrepris de démarche.)" id="oui3">
							<br>
							<label for="oui3">Oui (Je n'ai pas entrepris de démarche)</label>

							<br>

							<input type="radio" name="nameprotocoleChirurgieObesite" value="Non" id="non">
							<br>
							<label for="non">Non</label>
							

						</div>

						<button type="submit" class="btn btn-warning">Envoyer</button>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- avez vous déjà été opérée ? -->

		<div id="operation" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>5 / 10 )</span> Avez-vous déjà été opérée ? Si oui, une date exacte ou approximative est nécessaire.
					
				</p>

				<br>

				<form id="formOperation">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameOperation" value="Oui" id="ouiOperation">
							<label for="ouiOperation">Oui</label>

							<br>

							

							<input type="radio" name="nameOperation" value="Non" id="nonOperation">
							<label for="nonOperation">Non</label>

							
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button> 

						<br>

						<span id="aucunChoixOperation"> S'il vous plaît, il faut cliquer sur Oui ou Non.</span>
						

					</fieldset> 
					

				</form>   

				<form id="formOperationDate">

					<fieldset>

						<div  class="form-group">

							

							<input type="text" name="dateOperation" id="dateOperation" maxlength="10" title="Jour/Mois/Année" pattern="([0-9]{1,2})(\/)([0-9]{1,2})(\/)([0-9]{1,4})" class="form-control  " placeholder="Quand ?" size="60" required >
							

						</div>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucuneDateOperation"> S'il vous plaît, il faut choisir une date.</span>

						<br>

						<span id="dateOperationIncorrecte"> S'il vous plaît, il faut choisir une date correcte.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- poids perdu  -->

		<div id="poidsPerdu" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>6 / 10 )</span> Combien de poids (en kg) avez-vous perdu ? Une quantité exacte ou approximative est nécessaire.
					
				</p>

				<br>

				

				<form id="formPoidsPerdu">

					<fieldset>

						<div  class="form-group">

							

							<input type="number" name="namePoidsPerdu" id="namePoidsPerdu" class="form-control  " placeholder="poids perdu" size="60" required>
							

						</div>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucunPoidsPerdu"> S'il vous plaît, il faut saisir une quantité.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- satisfaction opération  -->

		<div id="satisfactionOperation" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>7 / 10 )</span> Êtes-vous satisfait(e) de cette opération  ?
					
				</p>

				<br>

				

				<form id="formSatisfactionOperation">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameSatisfactionOperation" value="Je suis très insatisfait(e)" id="insatisfaction+">
							<br>
							<label for="insatisfaction+">Je suis très insatisfait(e)</label>

							<br>

							<input type="radio" name="nameSatisfactionOperation" value="Je suis insatisfait(e)" id="insatisfaction">
							<br>
							<label for="insatisfaction">Je suis insatisfait(e)</label>

							<br>

							<input type="radio" name="nameSatisfactionOperation" value="Je suis neutre" id="neutre">
							<br>
							<label for="neutre">Je suis neutre</label>

							<br>

							<input type="radio" name="nameSatisfactionOperation" value="Je suis satisfait(e)" id="satisfaction">
							<br>
							<label for="satisfaction">Je suis satisfait(e)</label>

							<br>

							<input type="radio" name="nameSatisfactionOperation" value="Je suis très satisfait(e)" id="satisfaction+">
							<br>
							<label for="satisfaction+">Je suis très satisfait(e)</label>

						

						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucuneSatisfactionOperation"> S'il vous plaît, il faut faire un choix parmi ces 5 valeurs.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- sexe  -->

		<div id="sexe" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>8 / 10 )</span> Quel est votre sexe ?
					
				</p>

				<br>

				

				<form id="formSexe">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameSexe" value="Femme" id="femme">
							
							<label for="femme">Femme</label>

							<br>

							<input type="radio" name="nameSexe" value="Homme" id="homme">
							
							<label for="homme">Homme</label>

							
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucunSexe"> S'il vous plaît, il faut faire un choix parmi ces 2 valeurs.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- age  -->

		<div id="age" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>8 / 10 )</span> Quel est votre âge ?
					
				</p>

				<br>

				

				<form id="formAge">

					<fieldset>

						<div  class="form-group">

							<input type="number" name="nameAge" id="nameAge" class="form-control  " placeholder="âge" size="60" required>
							
						
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucunAge"> S'il vous plaît, il faut saisir votre âge.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- taille -->

		<div id="taille" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>8 / 10 )</span> Quel est votre taille en cm (Note : 1,70 m = 170 cm)
					
				</p>

				<br>

				

				<form id="formTaille">

					<fieldset>

						<div  class="form-group">

							<input type="number" name="nameTaille" id="nameTaille" class="form-control  " placeholder="taille" size="60" required>
							
						
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucuneTaille"> S'il vous plaît, il faut saisir votre taille.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- poids de la personne -->

		<div id="poidsPersonne" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>8 / 10 )</span> Quel est votre poids en kg
					
				</p>

				<br>

				

				<form id="formPoidsPersonne">

					<fieldset>

						<div  class="form-group">

							<input type="number" name="namePoidsPersonne" id="namePoidsPersonne" class="form-control  " placeholder="votre poids" size="60" required>
							
						
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucunPoidsPersonne"> S'il vous plaît, il faut saisir votre poids.</span>
						

					</fieldset>
					

				</form>
				

			</div>
			


		</div>

		<!-- situation familaile -->

		<div id="situationFamiliale" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>9 / 10 )</span> Situation familiale
					
				</p>

				<br>

				<form id="formSituationFamiliale">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameSituationFamiliale" value="Célibataire" id="celibataire">
							<br>
							<label for="celibataire">Célibataire</label>

							<br>

							<input type="radio" name="nameSituationFamiliale" value="En couple" id="encouple">
							<br>
							<label for="encouple">En couple</label>

							<br>

							<input type="radio" name="nameSituationFamiliale" value="En concubinage" id="enconcubinage">
							<br>
							<label for="enconcubinage">En concubinage</label>

							<br>

							<input type="radio" name="nameSituationFamiliale" value="Mariée" id="mariee">
							<br>
							<label for="mariee">Mariée</label>

							
							
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button> 

						<br>

						<span id="aucuneSituationFamiliale"> S'il vous plaît, il faut faire un choix parmi ces 4 valeurs.</span>
						

					</fieldset> 
					

				</form>

				
			</div>
			


		</div>

		<!-- enfants -->

		<div id="enfants" class="row"> 

			<div class="col-xs-12">

				<p>

					<span>9 / 10 )</span> Avez-vous des enfants ?
					
				</p>

				<br>

				<form id="formEnfants1">

					<fieldset>

						<div  class="form-group">

							<input type="radio" name="nameEnfants1" value="Oui" id="ouiEnfants1">
							
							<label for="ouiEnfants1">Oui</label>

							<br>

							

							<input type="radio" name="nameEnfants1" value="Non" id="nonEnfants1">

							<label for="nonEnfants1">Non</label>

							
						</div>

						<br>

						<button  type="submit" class="btn btn-warning">Envoyer</button> 

						<br>

						<span id="aucunChoixEnfants1"> S'il vous plaît, il faut cliquer sur Oui ou Non.</span>
						

					</fieldset> 
					

				</form>

				<form id="formEnfants2">

					<fieldset>

						<div  class="form-group">

							

							<input type="number" name="nameEnfants2" id="nameEnfants2" min="1" class="form-control  " placeholder="Combien ?" size="60" required  >
							

						</div>

						<button  type="submit" class="btn btn-warning">Envoyer</button>

						<br>

						<span id="aucunEnfants2"> S'il vous plaît, il faut saisir au moins 1</span>
						

					</fieldset>
					

				</form> 


				<br>

				<span id="echecEnvoiForm">Nous sommes désolés car le formulaire n'a pas été enregistré. Nous vous prions de réessayer l'envoi. Merci de votre compréhension.</span>
				

			</div>
			


		</div>

		<!-- conclusion -->

		<div id="conclusion"  class="row">   

			<div id="wrapConclusion" class="col-xs-12">
				
				<p id="motConclusion">&nbsp; &nbsp; Nous vous remercions d'avoir rempli ce questionnaire. Grâce à votre contribution, notre étude va pouvoir avancer ! Afin de poursuivre ensemble ce beau projet de développement d'un outil numérique pour les femmes, laissez-nous votre mail en cliquant ci-dessous. (Votre adresse email ne sera aucunement utilisée à des fins commerciales.)
				</p>

				

				<strong id="smileConclusion" style=" font-size: 2em ; "> <i class="fa fa-smile-o smile_close_presentationbis" aria-hidden="true"></i></strong>

				<br>

				<a href="/email" class="btn btn-warning">Email</a> 

			</div>
	
		</div> 

		<br>
