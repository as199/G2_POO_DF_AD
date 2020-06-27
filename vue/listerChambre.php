
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


                    <a href="#" title="Edit" class="text-primary editBtn" data-toggle="modal"
                     data-target="#editModal" id="<?php echo  $value->getNumChambre() ; ?>">
                     <i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;

                     <a href="#" title="Delete" class="text-danger delBtn" id="<?php echo  $value->getNumChambre() ; ?>">
                     <i class="fas fa-trash-alt fa-lg"></i></a>
                 </td>
                     </tr>
                     <?php endforeach; ?>

        </tbody></table>
        <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="" id="form-edit" class="bg-light mt-4">
        <div class="form-row">

            <div class="col-md-12">
                <div class="form-group ml-5">
                    <label class="small mb-1 ml-2" for="inputFirstName">Numéro de Chambre</label>
                    <input class="form-control py-4" id="numeros" value="" name="numero" type="text" placeholder="Numéro de Chambre" disabled />
                    <input type="hidden" name="numero" id="numero" value="">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group ml-5">
                    <label class="small mb-1 ml-2" for="type">Type Chambre</label>
                    <select class="form-control col-md-12" id="types" name="types" type="text" placeholder="Enter your login" style="height: 50px;">
                        <option value="">--Please choose The Type--</option>
                        <option value="1">Chambre à un </option>
                        <option value="2">Chambre à deux </option>
                    </select>
                </div>
            </div>

        </div>
         <input class="btn btn-primary ml-5 " id="btnval" name="" type="submit">
    </form>
      </div>



    </div>
  </div>
</div>

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


        $('.editBtn').click(function (e)  {

        e.preventDefault();
        del_id = $(this).attr('id');

        //$("#numero").val()=del_id;
        document.getElementById("numero").value=del_id;
        document.getElementById("numeros").value=del_id;
         $("#myModal").show();

        });

        $('#close').click(function (e)  {

        e.preventDefault();
         $("#myModal").hide();
        del_id = $(this).attr('id');

    });

     $("#btnval").click(function(e) { //tu change l'id du bouton
            e.preventDefault();

             $.ajax({
                    url: '<?= BASE_URL ?>/editerChambre',
                    type: "POST",
                    data: $('#form-edit').serialize() + "&action=modifierChambre",
                    success:function(response){
                    data = JSON.parse(response);
                    if (data.error == "vrai") {
                         Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "Echec de la modification!"
                            })
                            $("form").trigger("reset");
                    }else{
                         $("#myModal").hide();
                        Swal.fire({
                                icon: 'success',
                                title: 'Bravo...',
                                text: 'Modifier avec success!',
                                showConfirmButton: false,
                                timer: 2000
                            })
                    }
                    }//success
             });


            });//btn



});
</script>
