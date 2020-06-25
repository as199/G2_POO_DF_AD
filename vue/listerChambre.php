
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

         <?php foreach ($_SESSION['test']  as $value): ?>
            <tr class="text-center text-secondary">
                    <td> <?php echo  $value->getNumChambre() ; ?> </td>
                    <td> <?php echo  $value->getType() ;?></td>

                    <td>


                    <a href="<?= BASE_URL ?>/edit/id/<?php echo  $value->getNumChambre() ; ?>" title="Edit" class="text-primary editBtn" data-toggle="modal"
                     data-target="#editModal" id="<?php echo  $value->getNumChambre() ; ?>">
                     <i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;

                     <a href="<?= BASE_URL ?>/delete/id/<?php echo  $value->getNumChambre() ; ?>"onclick="if(!confirm('Voulez-vous vraiment supprimer ?')) return false;" title="Delete" class="text-danger delBtn" id="<?php echo  $value->getNumChambre() ; ?>">
                     <i class="fas fa-trash-alt fa-lg"></i></a>
                 </td>
                     </tr>
                     <?php endforeach; ?>

        </tbody></table>
