<!DOCTYPE html>
<html>
<head>
  <title>lister</title>
</head>
<body>
<h1 class="text-danger text-center">lister les etudiants</h1>
<table class="table table-striped table-sm table-bordered" >
                    <thead>
                        <!-- entete de la table -->
                        <tr class="text-center text-secondary bg-light">
                            <th>Numero Chambre</th>
                            <th>Type</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                    <!-- corps de la table -->
                    <tbody>

         <?php foreach ($chambres as $value): ?>
            <tr class="text-center text-secondary">

                    <td> <?php echo $value['numero'] ; ?> </td>
                    <td> <?php echo $value['type'];?></td>

                    <td>


                     <a href="#" title="Edit" class="text-primary editBtn" data-toggle="modal"
                    data-target="#myModal" id="<?php echo $value['numero'] ; ?> ">
                     <i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;

                     <a href="#" title="Delete" class="text-danger delBtn" >
                     <i class="fas fa-trash-alt fa-lg"></i></a> &nbsp;&nbsp;</td>
                     </tr>
                     <?php endforeach; ?>

        </tbody></table>


</body>

</html>
