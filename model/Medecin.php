<?php

class Medecin {
    private $id_medecin;
    private $nom;
    private $prenom;
    private $specialite;
    private $email;
    private $password;

    public function __construct($id_medecin, $nom, $prenom, $specialite, $email, $password) {
        $this->id_medecin = $id_medecin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->specialite = $specialite;
        $this->email = $email;
        $this->password = $password;
    }

    public function getIdMedecin() {
        return $this->id_medecin;
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

    public function getSpecialite() {
        return $this->specialite;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Autres méthodes de la classe Medecin
    public function afficherInformations() {
        echo "ID Médecin: " . $this->id_medecin . "<br>";
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Spécialité: " . $this->specialite . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Mot de passe: " . $this->password . "<br>";
    }
}

?>
