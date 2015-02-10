<?php

	class User
	{


		//LES VALEURS DE L'OBJET USER :
		private $_id;
		private $_nom;
		private $_prenom;
		private $_ddn;
		private $_email;
		private $_tel;



		//LES SETTERS :

		public function setId($value){$this->_id = $value;}			//ENREGISTRE L'ID DANS LA VALEUR $_id
		public function setNom($value){$this->_nom = $value;}		//ENREGISTRE LE NOM DANS LA VALEUR $_nom
		public function setPrenom($value){$this->_prenom = $value;}	//ENREGISTRE LE PRENOM DANS LA VALEUR $_prenom
		public function setDdn($value){$this->_ddn = $value;}		//ENREGISTRE LA DDN DANS LA VALEUR $_ddn
		public function setEmail($value){$this->_email = $value;}	//ENREGISTRE L'EMAIL DANS LA VALEUR $_email
		public function setTel($value){$this->_tel = $value;}		//ENREGISTRE LE TEL DANS LA VALEUR $_tel



		//LES GETTTERS :

		public function getId(){return $this->_id;}			//RETOURNE L'ID
		public function getNom(){return $this->_nom;}		//RETOURNE LE NOM
		public function getPrenom(){return $this->_prenom;}	//RETOURNE LE PRENOM
		public function getDdn(){return $this->_ddn;}		//RETOURNE LA DATE DE NAISSANCE
		public function getEmail(){return $this->_email;}	//RETOURNE L'EMAIL
		public function getTel(){return $this->_tel;}		//RETOURNE LE N° DE TEL



		



		//FONCTION d'AJOUT D'UTILISATEUR DANS LA BDD :

		public function addUser()
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', 'bris4usa'); //On essaye de se connecter à la bdd
			}
			catch (Exception $e)
			{
		        die('Erreur : ' . $e->getMessage()); // Si la connection ne passe pas, on renvoie un message d'erreur et tout s'arrête
			}

			$reponse = $bdd->query('INSERT INTO users (id, nom, prenom, ddn, email, tel) 
			VALUES 	("", "'.$this->getNom().'", 
					 "'.$this->getPrenom().'",
					 "'.$this->getDdn().'",
					 "'.$this->getEmail().'", 
					 "'.$this->getTel().'")'); // On envoie la requête

		}


		//FONCTION DE RECUPERATIONS D'INFORMATION D'UTILISATEUR

		public function takeUser($value) //$value correspond à l'id de l'utilisateur
		{
			$this->_id = $value;

			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', 'bris4usa'); //On essaye de se connecter à la bdd
			}
			catch (Exception $e)
			{
		        die('Erreur : ' . $e->getMessage()); // Si la connection ne passe pas, on renvoie un message d'erreur et tout s'arrête
			}

			$reponse = $bdd->query('SELECT * FROM users WHERE id="'.$this->getId().'"'); //On récupère un utilisateur grâce à son id
			foreach($reponse as $recup):	//On parcours le tableau récupéré avec la requête
			
				$id = $recup['id'];			//On attribue la valeur de la colonne d'id de la bdd à la variable $id
				$nom = $recup['nom'];		//On attribue la valeur de la colonne de nom de la bdd à la variable $nom
				$prenom = $recup['prenom'];	//On attribue la valeur de la colonne de prenom de la bdd à la variable $prenom
				$ddn = $recup['ddn'];		//On attribue la valeur de la colonne de ddn de la bdd à la variable $ddn
				$email = $recup['email'];	//On attribue la valeur de la colonne d'email de la bdd à la variable $email
				$tel = $recup['tel'];		//On attribue la valeur de la colonne de tel de la bdd à la variable $tel
			
				?>	<!-- On quitte le php pour lancer le formulaire html où les value serons préremplies par les valeurs récupérées dans la bdd -->
					<form action='changeUser.class.php' method='POST'>
					<input type='hidden' name='id' value='<?= $id ?>'>
					Nom : <input type='text' name='nom' value='<?= $nom; ?>'><br/><br/>
					Prenom : <input type='text' name='prenom' value='<?= $prenom ?>'><br/><br/>
					Ddn : <input type='text' name='ddn' value='<?= $ddn ?>'><br/><br/>
					Email : <input type='text' name='email' value='<?= $email ?>'><br/><br/>
					Tel : <input type='text' name='tel' value='<?= $tel ?>'><br/><br/>
					<input type='submit' value='submit' name='submit'>
					</form>

				<?php //On relance le php

				endforeach; //On termine le foreach
		}


		//FONCTION DE MODIFICATION D'UTILISATUER DANS LA BDD :

		public function changeUser()
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', 'bris4usa'); //On essaye de se connecter à la bdd
			}
			catch (Exception $e)
			{
		        die('Erreur : ' . $e->getMessage()); // Si la connection ne passe pas, on renvoie un message d'erreur et tout s'arrête
			}

			$reponse = $bdd->query('REPLACE INTO users (id, nom, prenom, ddn, email, tel) 
			VALUES 	("'.$this->getId().'", 
					 "'.$this->getNom().'",
					 "'.$this->getPrenom().'",
					 "'.$this->getDdn().'",
					 "'.$this->getEmail().'", 
					 "'.$this->getTel().'")'); // On envoie la requête, on remplace les données dans la base si l'id existe, sinon il crée une nouvelle ligne
			
		}

	}

?>