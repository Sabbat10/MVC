<?php 
     function getUsers() {
     	// throw new Exception("Impossible de vous affficher cette article !");
     
     		try {
            $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
	        }
	        catch(Exception $e) {
	        die('Erreur : '.$e->getMessage());
	    }
	                
	        $requete = $bdd->query('SELECT * FROM users');

	        return $requete;
     }


     