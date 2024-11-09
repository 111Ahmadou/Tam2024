<?php
    header('location:ressourses/index.php')
    
include_once 'etudiants/EtudiantController.php';
include_once 'examens/ExamenController.php';
include_once 'enseignants/EnseignantController.php';
include_once 'matieres/MatiereController.php';

$etudiantsCount = countEtudiants();
$examensCount = countExamens();
$enseignantsCount = countEnseignants();
$matieresCount = countMatieres();


<div class="bg-light">
    <nav class="navbar navbar-expand-lg navClass1">
        <div class="container">
            <div class="container-fluid row">
                <!-- Navbar Content -->
            </div>
        </div>
    </nav>
    <div>
        <div class="row text-center shadow bg-light divClassB">
            <div class="col-3 shadow-lg divClass3" id="divClass3">Étudiants<br><strong class="text-dark"><?php echo $etudiantsCount; ?></strong></div>
            <div class="text-center col-lg-3 shadow-lg rounded divClass4">Examens<br><strong class="text-dark"><?php echo $examensCount; ?></strong></div>
            <div class="text-center col-lg-3 shadow-lg rounded divClass5">Enseignants<br><strong class="text-dark"><?php echo $enseignantsCount; ?></strong></div>
            <div class="text-center col-lg-3 shadow-lg rounded divClass5">Matières<br><strong class="text-dark"><?php echo $matieresCount; ?></strong></div>
        </div>
    </div>
</div>

?>