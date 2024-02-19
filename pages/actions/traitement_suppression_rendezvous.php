<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_rendezvous = $_POST['id_rendezvous']; // Ajoutez un champ caché pour stocker l'ID du rendez-vous

    try {
        $database = new Database();
        $conn = $database->getConnection();

        $query_user_id = "SELECT id_utilisateur FROM rendezvous WHERE id_rendezvous = :id_rendezvous";
        $statement_user_id = $conn->prepare($query_user_id);
        $statement_user_id->bindParam(':id_rendezvous', $id_rendezvous);
        $statement_user_id->execute();
        $result = $statement_user_id->fetch(PDO::FETCH_ASSOC);
        $id_utilisateur = $result['id_utilisateur'];

        $query_delete = "DELETE FROM rendezvous WHERE id_rendezvous = :id_rendezvous";
        $statement_delete = $conn->prepare($query_delete);
        $statement_delete->bindParam(':id_rendezvous', $id_rendezvous);

        if ($statement_delete->execute()) {
            header("Location: ../Utilisateur_dashboard.php?id_utilisateur=" . $id_utilisateur);
            exit();
        } else {
            echo "Erreur lors de la suppression du rendez-vous.";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
    // Redirection en cas de tentative d'accès direct au script
    header("Location: ../error.php");
    exit();
}
?>
