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
            <form method="post" action="" id="addsimples" enctype="multipart/form-data" class=" bg-light">
                <div class="form-row">
                    <input type="hidden" name="classe" id="classe" value="addusern">
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
                            <input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter email address" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputlogin">Date Naissane</label><input class="form-control py-4" id="naissane" name="naissane" type="text" placeholder="Enter your naissane" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="inputPassword">Telephone</label><input class="form-control py-4" id="passwords" type="password" name="passwords" placeholder="Enter password" /></div>
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="type">Type Etudiant</label>
                        <select class="form-control col-md-12" id="types" name="types" type="text" placeholder="Enter your login" style="height: 50px;">
                                <option value="">--Please choose The Type--</option>
                                <option value="boursierLoger">Bousier loger </option>
                                <option value="boursierNonLoger">Boursier non loger </option>
                                <option value="nonBoursier">Non boursier</option>
                            </select>
                     </div>
                </div>
                <div class="form-row" style="background-color: red;height: 120px;">


                </div>

                <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="addusersimple" id="addusersimple"></div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../ressources/js/user.js"></script>
    <script>
$(document).ready(function(){
    $( "#select" ).change(function() {
        function genere() {

    //var btngenerer = document.getElementById('generer');
    var choise = document.getElementById('select');
    var divInputs = document.getElementById('hautgener');
    //var newInput = document.createElement('div');
    //newInput.setAttribute('class', 'divgener');
    //newInput.setAttribute('id', 'row_' + nbrow);
    if (typ.value == "choixmultiple") {
         newInput.innerHTML = ' <div class="form-row"><div class="col-md-6"><div class="form-group"><label class="small mb-1" for="inputEmailAddress">Montant</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter email address" /></div></div><div class="col-md-6"><div class="form-group"><label class="small mb-1" for="inputlogin">Date Naissane</label><input class="form-control py-4" id="naissane" name="naissane" type="text" placeholder="Enter your naissane" /></div></div> </div>';
        divInputs.appendChild(newInput);
    }
    if (typ.value == "choixsimple") {
        newInput.innerHTML = ' <div class="form-row"><div class="col-md-6"><div class="form-group"><label class="small mb-1" for="inputEmailAddress">Adresse</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter  address" /></div></div> </div>';
        divInputs.appendChild(newInput);
    }
    if (typ.value == "choixtext") {
        newInput.innerHTML = ' <div class="form-row"><div class="col-md-6"><div class="form-group"><label class="small mb-1" for="inputEmailAddress">Montant</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter email address" /></div></div> </div>';

        divInputs.appendChild(newInput);

    }
}
    });







}) ;      /*******gener inputs */

    </script>
</body>

</html>
