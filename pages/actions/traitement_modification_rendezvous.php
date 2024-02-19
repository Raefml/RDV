<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_rendezvous = $_POST['date_rendezvous'];
    $description = $_POST['description'];
    $id_rendezvous = $_POST['id_rendezvous'];




    echo "<script>console.log('ID du rendez-vous : " . $id_rendezvous . "');</script>";


    try {
        $database = new Database();
        $conn = $database->getConnection();

        $query = "UPDATE rendezvous SET name = :name, email = :email, date_rendezvous = :date_rendezvous, description = :description WHERE id_rendezvous = :id_rendezvous";
        $statement = $conn->prepare($query);

        // Liaison des paramètres
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':date_rendezvous', $date_rendezvous);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':id_rendezvous', $id_rendezvous);

        if ($statement->execute()) {
            echo "<script>console.log('ID du rendez-vous mis à jour : " . $id_rendezvous . "');</script>";
            
            header("Location: ../Utilisateur_dashboard.php?id_utilisateur=" . $id_utilisateur);
            exit();
        } else {
            echo "Erreur lors de la modification du rendez-vous.";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
    header("Location: ../error.php");
    exit();
}
?>
