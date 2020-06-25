<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card-body">
            <form method="post" action="<?= BASE_URL ?>/validerEtudiant" id="addsimples" enctype="multipart/form-data" class=" bg-light">
                <div class="form-row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">Prenom</label>
                            <input class="form-control py-4" id="prenom" name="prenom" type="text" placeholder="Enter first name" pattern="[A-Za-z]+" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Nom</label>
                            <input class="form-control py-4" id="nom" name="nom" type="text" placeholder="Enter last name" pattern="[A-Za-z]+" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="email" name="email" type="email" placeholder="Enter email address" />



                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputlogin">Date Naissane</label><input class="form-control py-4" id="naissance" name="naissance" type="date" placeholder="Enter your naissance" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputPassword">Telephone</label><input class="form-control py-4" id="telephone" type="texte" name="telephone" placeholder="Enter password" /></div>
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="type">Type Etudiant</label>
                        <select class="form-control col-md-12" id="typ" name="types" type="text" placeholder="Enter your login" style="height: 50px;">
                                <option value="">--Please choose The Type--</option>
                                <option value="boursierLoger">Bousier loger </option>
                                <option value="boursierNonLoger">Boursier non loger </option>
                                <option value="nonBoursier">Non boursier</option>
                            </select>
                     </div>
                </div>
                <div class="form-row" id="divhaut">
                    <!-- <div class="hautgener form-row col-md-12" id="hautgener">

                    </div> -->
                </div>
                 <!-- #^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$# -->
                <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="envoie" id="select"></div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $("#typ").change(function () {
            var divInputs = document.getElementById('divhaut');
            var newInput = document.getElementById('divhaut');
            var contenu = $("#typ").val();
                 if (contenu =="boursierLoger") {

                         newInput.innerHTML = ' <div class="col-md-6"><div class="form-group"><label class="small mb-1" for="montant">Montant</label><input class="form-control py-4" id="montant" name="montant" type="text" placeholder="Entrer le montant" /></div></div><div class="col-md-6"><div class="form-group"><label class="small mb-1" for="numchambrre">Numéro chambre</label><input class="form-control py-4" id="numchambre" name="numchambre" type="text" placeholder="Entrer le numéro de chambre" /></div> </div>';
                         divInputs.appendChild(newInput);

                 }
                    if (contenu == "nonBoursier") {
                    newInput.innerHTML = ' <div class="col-md-6"><div class="form-group"><label class="small mb-1" for="address">Adresse</label><input class="form-control py-4" id="adress" name="adresse" type="text" placeholder="Enter  your address" /></div></div>';
                     divInputs.appendChild(newInput);
                    }
                    if (contenu == "boursierNonLoger") {
                newInput.innerHTML = '<div class="col-md-6"><div class="form-group"><label class="small mb-1" for="montant">Montant</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Entrer le montant" /></div></div>';

                divInputs.appendChild(newInput);
                 }

                });


    </script>
</body>

</html>
