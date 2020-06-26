
       <h1 class="text-danger text-center">lister les chambres</h1>
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

                     <a href="#" title="Delete" class="text-danger delBtn" id="<?php echo  $value->getNumChambre() ; ?>">
                     <i class="fas fa-trash-alt fa-lg"></i></a>
                 </td>
                     </tr>
                     <?php endforeach; ?>

        </tbody></table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        $(document).ready(function(e){

            $('.delBtn').click(function (e)  {

        e.preventDefault();
        var tr = $(this).closest('tr');
        del_id = $(this).attr('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?= BASE_URL ?>/delete",
                    type: "POST",
                    data: {
                        del_id: del_id
                    },
                    success: function (response) {
                        tr.hide();
                        Swal.fire({
                            icon: 'success',
                            title: 'User deleted successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        // $("#editModal").modal('hide');
                        // $("#editform-data")[0].reset();
                        // showAllUsers();
                    }
                });
            }
        });
    });
});
</script>
