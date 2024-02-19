<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $id_utilisateur = $_POST['id_utilisateur'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_rendezvous = $_POST['date_rendezvous'];
    $description = $_POST['description'];

    try {
      
        $database = new Database();
        $conn = $database->getConnection();

        $query = "INSERT INTO rendezvous (id_utilisateur,name, email, date_rendezvous, description) VALUES (:id_utilisateur,:name, :email, :date_rendezvous, :description)";
        $statement = $conn->prepare($query);

        $statement->bindParam(':id_utilisateur', $id_utilisateur);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':date_rendezvous', $date_rendezvous);
        $statement->bindParam(':description', $description);

        if ($statement->execute()) {
            header("Location: ../Utilisateur_dashboard.php?id_utilisateur=" . $id_utilisateur);

            exit();
        } else {
            echo "Erreur lors de l'ajout du rendez-vous.";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
    header("Location: ../error.php");
    exit();
}
?>
