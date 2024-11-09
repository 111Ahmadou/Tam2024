<?php
require '../layouts/master.php';?>
<?php
include_once '../../config/db.php';
$con = connectionDB();
$mysqlTable = "etudiants";
$numero_carte = $_GET['numero_carte'];
$query = "SELECT * FROM $mysqlTable where numero_carte = :numero_carte";
$statement = $con->prepare( $query ); // préparation
$statement->bindParam(':numero_carte', $numero_carte, PDO::PARAM_STR);
$statement->execute(); // exécution
// récupération des étudiants
$resultats = $statement->fetchAll ( PDO::FETCH_ASSOC );
$etudiant = $resultats[0];
?>

    <div class="container bg-light divBreakClass1">
        <div class="container bg-light divBreakClass2">
            <div class="bg-white divBreakClass3">
                <nav aria-label="breadcrumb" class="divBreakClass4">
                    <ol class="breadcrumb divBreakClass5">
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Étudiant</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Formulaire étudiant</li>
                    </ol>
                </nav>
                <div>
                    <div class="center row bg-light divAdmin">
                        <div class="col-4"><strong>Formulaire étudiant</strong></div>
                    </div>
                </div>
                <div class="center row container">
                    <form action="EtudiantController.php?action=update" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Numéro carte</label>
                                <input type="text" class="form-control" name="numero_carte" id="exampleInputEmail1" placeholder="20220982HZT" value="<?php echo $etudiant['numero_carte'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Moussa" value="<?php echo $etudiant['prenom'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Nom</label>
                                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Diop" value="<?php echo $etudiant['nom'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Adresse</label>
                                <input type="text" class="form-control" name="adresse" placeholder="Grand-Yoff" value="<?php echo $etudiant['adresse'] ?>">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php';?>