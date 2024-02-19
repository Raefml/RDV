
<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Connexion à la base de données
        $database = new Database();
        $conn = $database->getConnection();

        $query_user = "SELECT * FROM utilisateur WHERE email = :email";
        $statement_user = $conn->prepare($query_user);
        $statement_user->bindParam(':email', $email);
        $statement_user->execute();

        if ($statement_user->rowCount() == 0) {
            $query_admin = "SELECT * FROM medecin WHERE email = :email AND password = :password";
            $statement_admin = $conn->prepare($query_admin);
            $statement_admin->bindParam(':email', $email);
            $statement_admin->bindParam(':password', $password);
            $statement_admin->execute();

            if ($statement_admin->rowCount() > 0) {
                header("Location: ../Medecin_dashboard.php");
                exit();
            } else {
                header("Location: ../login.php");
            }
        } else {
            $user = $statement_user->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['password'])) {
                header("Location: ../Utilisateur_dashboard.php?id_utilisateur=" . $user['id_utilisateur']);
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
          
              
              
              
              
              
              
              
              
              
              
              
              
