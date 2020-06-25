<div class="container">
        <form method="post" action="<?= BASE_URL ?>/editerChambre" id="addsimples" enctype="multipart/form-data" class="bg-light mt-4">
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group ml-5">
                                <label class="small mb-1 ml-2" for="inputFirstName">Numéro de Chambre</label>
                                <input class="form-control py-4" id="numero" value="<?=$_SESSION['id'];?>" name="numero" type="text" placeholder="Numéro de Chambre" disabled />
                                <input type="hidden" name="numero" value="<?php echo $_SESSION['id'];?>">
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

