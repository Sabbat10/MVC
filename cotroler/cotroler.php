<?php
	// require('../model/avisModele.php');
	// $requete = getAvis();

	// require('../view/listeNotisView.php');

	require('model/modeleUtilisateur.php');
	require('model/avisModele.php');

	function home() {

		$requete = getUsers();

		require('view/listUsersView.php');
	}

	function homeAvis() {

		$requete = getAvis();

		require('view/listeNotisView.php');
	}