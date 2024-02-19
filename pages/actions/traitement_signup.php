<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $genre = $_POST['genre'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password !== $repeat_password) {
        echo "Les mots de passe ne correspondent pas.";
        exit; 
    }

    try {
       
        $database = new Database();
        $conn = $database->getConnection();

        $password_hash = password_hash($password, PASSWORD_DEFAULT);


        // Préparer la requête SQL pour insérer un nouvel utilisateur
        $query = "INSERT INTO utilisateur (nom, prenom, email, telephone, genre, password) VALUES (:nom, :prenom, :email, :telephone, :genre, :password)";
        $statement = $conn->prepare($query);

        // Liaison des paramètres
        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':prenom', $prenom);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':telephone', $telephone);
        $statement->bindParam(':genre', $genre);
        $statement->bindParam(':password', $password_hash); 

        // Exécution de la requête
        if ($statement->execute()) {
            
            header("Location: ../login.php");

            exit();
        } else {
            echo "Erreur lors de l'inscription de l'utilisateur.";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
    // Aucune donnée postée, rediriger l'utilisateur vers la page de formulaire
    header("Location: signup.php");
    exit();
}
?>
