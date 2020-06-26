<?php
 // var_dump($_SESSION['tab']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sunu site</title>
  <!-- Bootstrap core CSS -->
  
  <!-- google icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Custom styles for this template -->
  <link href="<?php echo ASSETS ;?>css/styles.css" rel="stylesheet">
  <link href="<?php echo ASSETS ;?>css/simple-sidebar.css" rel="stylesheet">

  <style type="text/css">
    .sticky{
      position: fixed;
      top: 0;
      width: 100%;
    }
    .sticky+.content {
      padding-top: 102px;
    }
    .font{
   font-size: 20px;
 }
  </style>

</head>
<body style="font-size: 25px;">
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-info border-right" id="sidebar-wrapper">

      <div class="list-group list-group-flush" id="menu">
        <a href="<?= BASE_URL ?>/addEtudiant" class="font list-group-item list-group-item-action bg-info text-light"><i class='fas fa-file-signature' style='font-size:24px;color:blue'></i>Ajouter Etudiant</a>
        <a href="<?= BASE_URL ?>/listerEtudiant" class="font list-group-item list-group-item-action bg-info text-light"><i class='fas fa-edit' style='font-size:24px;color:blue'></i>Lister Etudiant</a>
        <a href="<?= BASE_URL ?>/addChambre" class="font list-group-item list-group-item-action bg-info text-light"><i class='fas fa-user-plus' style='font-size:24px;color:blue'></i>Ajouter Chambre</a>
        <a href="<?= BASE_URL ?>/listerChambre" class="font list-group-item list-group-item-action bg-info text-light"><i class='fas fa-user-edit' style='font-size:24px;color:blue'></i>Lister Chambre</a>


        <input type="hidden" name="logout" value="logout" id="logout">
      </div>
      
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="background-color: #97e4f0">
      <nav class="navbar navbar-expand-lg navbar-light bg-info border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
      </nav>
      <div class="container-fluid" id="contenu"style="overflow: scroll;height: 550px;">
        <?php

        if(!empty($content_for_layout)){
            echo  $content_for_layout ;
          }


        ?>
      </div>
    </div>
    <!-- Bootstrap core JavaScript and others CDN Links -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/ nbootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- mes fonctions js  -->

</body>

</html>
<script type="text/javascript">
  $(document).ready(function () {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
  });
</script>
