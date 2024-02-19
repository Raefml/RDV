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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-r4VX0/UXS4Q7Zv1VXa1i7Igdzg0tHfB9XSH6iNvJ2+Pm7WAvF2Vra1cXA6P2n3cr" crossorigin="anonymous"></script>

</head>
<body>
<header id="header" class="fixed-top" style="
    height: 82px;">
    <div class="container d-flex justify-content-between align-items-center">
    
          <h1 class="logo me-auto"><a href="../index.php">DECADE</a></h1>
          
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
            
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <a class="appointment-btn scrollto" href="./signup.php" ><span class="d-none d-md-inline"></span> SIGN UP</a>
    
        </div>
      </header><!-- End Header -->



      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Enit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
             
              <li class="nav-item dropdown">
               
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>



<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;
    height: 867px;
    margin-top: 19px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <h2><span class="fs-4">RDV</span></h2>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./Medecin_dashboard1.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>

      <li class="nav-item">
        <a href="./Medecin_dashboard1.php" class="nav-link " aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="# endez-vous"/></svg>
          rendez-vous
        </a>
      </li>
      
     
      
      <li class="nav-item">
        <a href="./login.php" class="nav-link " aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="# endez-vous"/></svg>
          Logout
        </a>
      </li>
    </ul>
    <hr>
   
  </div>
  <?php
include '../config.php';

try {
    // Établir une connexion à la base de données
    $database = new Database();
    $conn = $database->getConnection();

    // Récupérer le nombre d'utilisateurs
    $query_users = "SELECT COUNT(*) AS user_count FROM utilisateur";
    $statement_users = $conn->query($query_users);
    $user_count = $statement_users->fetch(PDO::FETCH_ASSOC)['user_count'];

    // Récupérer le nombre de rendez-vous
    $query_appointments = "SELECT COUNT(*) AS appointment_count FROM rendezvous";
    $statement_appointments = $conn->query($query_appointments);
    $appointment_count = $statement_appointments->fetch(PDO::FETCH_ASSOC)['appointment_count'];

    $query = "SELECT * FROM utilisateur" ;
        $statement = $conn->prepare($query);
        $statement->execute();

   
   
} catch (PDOException $exception) {
    echo "Erreur de connexion : " . $exception->getMessage();
}
?>

 

  <div class="i1" style="margin-left: 288px; margin-top: -852px;">
  <div class="d-flex justify-content-between">
    <div class="card"style="margin-left: 170px;width: 303px;">
      <div class="card-body">
        <div class="d-flex justify-content-between p-md-1">
          <div class="d-flex flex-row">
            <div>
              <i class="fa-solid fa-user" style="
    font-size: 40px;
"></i>
              <h4>Total user</h4>
              <h3 class="mb-0"> <?php echo $user_count ; ?></h3>
            </div>
          </div>
          <div class="align-self-center">
            
          </div>
        </div>
      </div>
    </div>

    <div class="card" style="margin-right: 297px;  width: 303px;">
      <div class="card-body">
        <div class="d-flex justify-content-between p-md-1">
          <div class="d-flex flex-row">
            <div>
              <i class="fa-solid fa-envelope" style="
    font-size: 40px;
"></i> 
              <h4>Total rendez vous</h4>
              <h3 class="mb-0">  <?php      echo  $appointment_count ;
 ?></h3>
            </div>
          </div>
          <div class="align-self-center">
            <h2 class="h1 mb-0">   </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-xl" style="    margin-top: -28px;
margin-left: 264px; ">
	<div class="table-responsive" style="    width: 1581px;">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>rendez vous</b></h2>
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






    try {
     
        

        // Vérifier si des rendez-vous ont été trouvés
        if($statement->rowCount() > 0) {
            // Afficher les rendez-vous dans le tableau HTML
            while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td><span class='custom-checkbox'><input type='checkbox' id='checkbox1' name='options[]' value='1'><label for='checkbox1'></label></span></td>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['genre'] . "</td>";
                
                echo "<td>
                <a href='#editEmployeeModal' class='edit' data-toggle='modal' ><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                <a href='#deleteEmployeeModal' class='delete' data-toggle='modal' ><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                </td>";
            
            echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Aucun rendez-vous trouvé</td></tr>";
        }
    } catch (PDOException $exception) {
        echo "Erreur de connexion : " . $exception->getMessage();
    }

?>
											
					
					</tbody>
			</table>
			<div class="clearfix">
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item "><a href="#" class="page-link">3</a></li>
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
										
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
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


