<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php"; 
?>


<?php if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}

$page_info_title = "INSERISCI UN NUOVO CLIENTE";

$nome = $surname = $company = $email = $phone = $username = $password = $confirmpassword ="";

$costumers = readFileJson("data/anagrafica.json");

$id = 0;

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $page_info_title = "MODIFICA DI UN CLIENTE";

    foreach ($costumers as $value) {
         {

            if (isset($cliente['id_costumer'])) {
                if ($_REQUEST["id"] == $cliente['id_costumer']) {
                    if (isset($costumers['id'])) {
                        $id = $costumers['id_costumer'];
                    }
                    $nome = $costumers['nome'];
                    $surname =$costumers['cognome'];
                    $company = $costumers['società'];
                    $email = $costumers['email'];
                    $phone = $costumers['telefono'];
                    $username = $costumers['username'];
                    $password =$costumers['password'];
                    $confirmpassword = $costumers['Confirm PassWord'];
                    
                   
                }
            }
        }
    }
} else {
    $id = getNewIdToInsert($costumers);
}
?>

<h3><?= $page_info_title; ?></h3>

<div class="col-sm-6">
    <form method="POST" action="save_product.php" enctype="multipart/form-data" onsubmit="return verifyPassword();">
        <div class="form-group">
            <label for="nome">Id cliente</label>
            <input type="number" class="form-control" id="id_product" name="id_product" value="<?= $id; ?>" readonly>
        </div>
        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome" value="<?= $surname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Società</label>
                        <input type="text" class="form-control" id="societa" name="societa" placeholder="Società" value="<?= $company ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTelephone">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?= $phone ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter username" value="<?= $username ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter password" value="<?= $password ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Confirm PassWord</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" aria-describedby="passwordHelp" placeholder="Confirm password" value="<?= $confirmpassword ?>" required>
                    </div>
        

        <button type="submit" class="btn btn-primary">Aggiungi prodotto</button>
    </form>
</div>
<?php

require_once "inc/footer.php";