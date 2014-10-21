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
				$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues', 'root', ''); //On essaye de se connecter à la bdd
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




		//FONCTION DE MODIFICATION D'UTILISATUER DANS LA BDD :

		public function changeUser()
		{

		}

	}



?>