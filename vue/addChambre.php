<!doctype html>
<html lang="en">

<head>
    <title>add chambre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="" id="form-chambre" enctype="multipart/form-data" class="bg-light mt-4">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group ml-5">
                        <label class="small mb-1 ml-2" for="inputFirstName">Numéro de Chambre</label>
                        <input class="form-control py-4" id="numero" name="numero" type="text" placeholder="Numéro de Chambre" />
                        <small id="error1" style="color: red;"></small>
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
                        <small id="error2" style="color: red;"></small>
                    </div>
                </div>

            </div>
            <input class="btn btn-primary ml-5 " id="btnval" name="envoie" type="submit">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#btnval").click(function(e) {
                e.preventDefault();
                var form = $('#form-chambre')[0];
                var bool = false;
                if ($('#numero').val() == "") {
                    $('#error1').text('Veuillez saisir un numéro!')
                    bool = true
                } else {
                    $('#error1').text('')
                }
                if ($('#types').val() == "") {
                    $('#error2').text('Veuillez saisir un type!')
                    bool = true
                } else {
                    $('#error2').text('')
                }

                if (bool == false) {
                    $.ajax({
                        url: '<?= BASE_URL ?>/validerChambre',
                        type: "POST",
                        data: $('#form-chambre').serialize() + "&action=ajouterChambre", //change l'ic du formulaire
                        success: function(response) {
                            // console.log(response);
                            data = JSON.parse(response);
                            console.log(data);
                            if (data.error == "vrai") {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: "Echec de l'enregistrement!"
                                })
                                $("form").trigger("reset");
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Bravo...',
                                    text: 'Enregistrer avec success!',
                                    showConfirmButton: false,
                                    timer: 2000
                                })

                            }
                        }
                    }); //ajax
                } else {
                    alert('Veuillez Saisir tous les champs!')
                }

            });
        });
    </script>

</body>

</html>
