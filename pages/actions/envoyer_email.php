<?php
if(isset($_POST['accepter']) || isset($_POST['refuser'])) {

    $id_rendezvous = $_POST['id_rendezvous']; 


    
    include '../../config.php';

  
        // Connexion à la base de données
        $database = new Database();
        $conn = $database->getConnection();

        $query = "SELECT rendezvous.*, utilisateur.email, utilisateur.nom, utilisateur.prenom FROM rendezvous JOIN utilisateur ON rendezvous.id_utilisateur = utilisateur.id_utilisateur WHERE rendezvous.id_rendezvous = :id";
        $statement = $conn->prepare($query);
        $statement->bindParam(':id', $id_rendezvous);
        $statement->execute();

        if($statement->rowCount() > 0) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            $nom_prenom = $row['nom'] . ' ' . $row['prenom'];
            $date_rendezvous = $row['date_rendezvous'];
            $email_exp = "raef.bouchahda@etudiant-enit.utm.tn"; // Adresse e-mail de l'expéditeur
            $email = $row['email'];
            
            $email_dest = $row['email'];
        }



   // $email_dest = "raef.bouchahda@etudiant-enit.utm.tn";

   
    $email_exp = "raef.bouchahda@etudiant-enit.utm.tn";

   
    $subject = "Confirmation de rendez-vous";

    // Message pour l'e-mail
    $message = "";
            if(isset($_POST['accepter'])) {
                $message = "Bonjour $nom_prenom,\n\nVotre rendez-vous demandé pour la date $date_rendezvous a été ACCEPTÉ.\n\nCabinet DECADE";
            } elseif(isset($_POST['refuser'])) {
                $message = "Bonjour $nom_prenom,\n\nVotre rendez-vous demandé pour la date $date_rendezvous a été REFUSÉ.\n\nCabinet DECADE";
            }

    
    $headers = "From: $email_exp";

   
    if(mail($email_dest, $subject, $message, $headers)) {
        header("Location: ../Medecin_dashboard1.php");
    } else {
        echo "Erreur lors de l'envoi de l'e-mail. $id_rendezvous";
    }
}
?>
