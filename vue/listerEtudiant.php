<!DOCTYPE html>
<html>
<head>
  <title>lister</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>

<table class="table table-striped table-sm table-bordered" id="myTable">
                    <thead>
                        <!-- entete de la table -->
                        <tr class="text-center">
                            <th>Matricule</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>E-mail</th>
                            <th>Type</th>
                           <th>Telephone</th>
                           <th>DateNaiss</th>
                            <th>Adresse</th>

                        </tr>
                    </thead>
                    <!-- corps de la table -->
                    <tbody>
<?php foreach ($etudiantes as $value): ?>
            <tr class="text-center text-secondary">

                    <td> <?php echo $value['matricule'] ; ?> </td>
                    <td> <?php echo $value['prenom'];?></td>
                    <td> <?php echo $value['nom'] ; ?></td>
                    <td> <?php echo $value['email'];?></td>
                    <td> <?php echo $value['type'] ; ?></td>
                     <td> <?php echo $value['telephone'] ; ?></td>
                     <td> <?php echo $value['dateNaissance'] ; ?></td>
                     <td> <?php echo $value['adresse'] ; ?></td>

                     </tr>
<?php endforeach; ?>
        </tbody></table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>



