<div class="container">
    <form method="post" action="" id="form-edit" class="bg-light mt-4">
        <div class="form-row">

            <div class="col-md-6">
                <div class="form-group ml-5">
                    <label class="small mb-1 ml-2" for="inputFirstName">Numéro de Chambre</label>
                    <input class="form-control py-4" id="numero" value="<?= $_SESSION['id']; ?>" name="numero" type="text" placeholder="Numéro de Chambre" disabled />
                    <input type="hidden" name="numero" value="<?php echo $_SESSION['id']; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#btnval").click(function(e) { //tu change l'id du bouton
            e.preventDefault();

            $.ajax({
                url: '<?= BASE_URL ?>/editerChambre',
                type: "POST",
                data: $('#form-edit').serialize() + "&action=modifierChambre", //change l'ic du formulaire
                success: function(response) {
                   // console.log(response);
                        data = JSON.parse(response);
                        console.log(data);
                        if (data.error == "vrai") {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "Echec de la modification!"
                            })
                            $("form").trigger("reset");
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Bravo...',
                                text: 'Modifier avec success!',
                                showConfirmButton: false,
                                timer: 2000
                            })
                            //$("form").trigger("reset");
                            // window.location.href = '<?= BASE_URL ?>/addEtudiant';
                        }
                    }
                });//ajax

            });//btn
        });
   
</script>
