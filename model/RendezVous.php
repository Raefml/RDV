<?php

class RendezVous {
    private $id_rendezvous;
    private $date_rendezvous;
    private $statut;
    private $id_utilisateur;
    private $id_medecin;

    public function __construct($id_rendezvous, $date_rendezvous, $statut, $id_utilisateur, $id_medecin) {
        $this->id_rendezvous = $id_rendezvous;
        $this->date_rendezvous = $date_rendezvous;
        $this->statut = $statut;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_medecin = $id_medecin;
    }

    public function getIdRendezVous() {
        return $this->id_rendezvous;
    }

    public function getDateRendezVous() {
        return $this->date_rendezvous;
    }

    public function setDateRendezVous($date_rendezvous) {
        $this->date_rendezvous = $date_rendezvous;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    public function getIdMedecin() {
        return $this->id_medecin;
    }

    public function setIdMedecin($id_medecin) {
        $this->id_medecin = $id_medecin;
    }

    // Autres méthodes de la classe RendezVous
    public function afficherInformations() {
        echo "ID Rendez-vous: " . $this->id_rendezvous . "<br>";
        echo "Date Rendez-vous: " . $this->date_rendezvous . "<br>";
        echo "Statut: " . $this->statut . "<br>";
        echo "ID Utilisateur: " . $this->id_utilisateur . "<br>";
        echo "ID Médecin: " . $this->id_medecin . "<br>";
    }
}

?>
