<?php

class Utilisateur {
    private $id_utilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $genre;
    private $password; 

    public function __construct($id_utilisateur, $nom, $prenom, $email, $telephone, $genre, $password) {
        $this->id_utilisateur = $id_utilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->genre = $genre;
        $this->password = $password; 
    }

    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Nouvelle méthode pour obtenir le mot de passe
    public function getPassword() {
        return $this->password;
    }

    // Nouvelle méthode pour définir le mot de passe
    public function setPassword($password) {
        $this->password = $password;
    }

    // Autres méthodes de la classe Utilisateur
    public function afficherInformations() {
        echo "ID Utilisateur: " . $this->id_utilisateur . "<br>";
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Téléphone: " . $this->telephone . "<br>";
        echo "Genre: " . $this->genre . "<br>";
        echo "Mot de passe: " . $this->password . "<br>"; // Affichage du mot de passe (à des fins de démonstration, ne pas afficher en production)
    }
}

?>
