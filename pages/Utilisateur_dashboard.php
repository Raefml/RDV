<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../css/D_utilisateur_style.css" rel="stylesheet">
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-r4VX0/UXS4Q7Zv1VXa1i7Igdzg0tHfB9XSH6iNvJ2+Pm7WAvF2Vra1cXA6P2n3cr" crossorigin="anonymous"></script>

    <script>
 function updateDeleteForm(id_rendezvous) {
        // Mettre à jour le champ caché avec l'ID du rendez-vous à supprimer
        document.getElementById('delete_id_rendezvous').value = id_rendezvous;
    
 }

    $(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});




</script>
</head>
<body>


<header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
    
          <h1 class="logo me-auto"><a href="../index.php">DECADE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="../index">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
            
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <a class="appointment-btn scrollto" href="../index"><span class="d-none d-md-inline"></span> LOGOUT</a>
    
        </div>
      </header><!-- End Header -->



      <div  class="container1">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Rendez-vous</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Rendez-vous</span></a>
							<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Name</th>
							<th>description</th>
							<th>date_rendezvous</th>
							<th>email</th>
							<th>statut</th>
						</tr>
					</thead>
					<tbody>
					
					
						<?php
// Inclure la classe Database pour gérer la connexion à la base de données
include '../config.php';

// Vérifier si l'ID de l'utilisateur est présent dans l'URL
if(isset($_GET['id_utilisateur'])) {
    // Récupérer l'ID de l'utilisateur depuis l'URL
    $id_utilisateur = $_GET['id_utilisateur'];

    try {
        // Connexion à la base de données
        $database = new Database();
        $conn = $database->getConnection();

        // Préparer la requête SQL pour récupérer les rendez-vous de l'utilisateur spécifié
        $query = "SELECT * FROM RendezVous WHERE id_utilisateur = :id_utilisateur";
        $statement = $conn->prepare($query);
        $statement->bindParam(':id_utilisateur', $id_utilisateur);
        $statement->execute();

        // Vérifier si des rendez-vous ont été trouvés
        if($statement->rowCount() > 0) {
            // Afficher les rendez-vous dans le tableau HTML
            while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td><span class='custom-checkbox'><input type='checkbox' id='checkbox1' name='options[]' value='1'><label for='checkbox1'></label></span></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['date_rendezvous'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['statut'] . "</td>";
                
                echo "<td>
                <a href='#editEmployeeModal' class='edit' data-toggle='modal' data-id='" . $row['id_rendezvous'] . "' onclick='updateEditForm(" . $row['id_rendezvous'] . ")'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                <a href='#deleteEmployeeModal' class='delete' data-toggle='modal' data-id='" . $row['id_rendezvous'] . "' onclick='updateDeleteForm(" . $row['id_rendezvous'] . ")'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                </td>";
            
            echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Aucun rendez-vous trouvé</td></tr>";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }
} else {
   
}
?>
											
					
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
            <form method="POST" action="./actions/traitement_ajout_rendezvous.php">
					<div class="modal-header">						
						<h4 class="modal-title">Add Rendez-vous</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                    <input type="hidden" name="id_utilisateur" value="<?php echo isset($_GET['id_utilisateur']) ? $_GET['id_utilisateur'] : ''; ?>">
					
						<div class="form-group">
							<label>Name</label>
                            <input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
                            <input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Date</label>
                            <input type="date" name="date_rendezvous" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Description</label>
                            <textarea name="description" class="form-control" required></textarea>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="./actions/traitement_modification_rendezvous.php" method="POST" id="editForm">
                <div class="modal-header">						
                    <h4 class="modal-title">Edit Rendez-vous</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <input type="hidden" name="id_rendezvous" id="edit_id_rendezvous">

                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date_rendezvous" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>	
                    <input type="hidden" name="id_rendezvous" id="edit_id_rendezvous">
				
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  action="./actions/traitement_suppression_rendezvous.php" method="POST">
                <div class="modal-header">						
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <input type="hidden" name="id_rendezvous" id="delete_id_rendezvous">

                <div class="modal-body">					
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

    
</body>

</html>