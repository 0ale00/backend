<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<div class="container mt-2">
    <form id ="anagraficaForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="row g-3">
    <div class="col-md-6">
        Nome: <input type="text" class="form-control" name="nome" value="<?= $name ?>" required ><br>
        Cognome: <input type="text" class="form-control" name="cognome" value="<?= $surname ?>" required><br>
    </div>
    <div class="col-md-12">
        Città<select class="form-label" name="cities[]" multiple required>
        <option value="Milano" <?= is_integer(array_search('Milano', $cities)) ? 'selected' : null ?>>Milano</option>
            <option value="Roma" <?= is_integer(array_search('Roma', $cities)) ? 'selected' : null ?>>Roma</option>
            <option value="Lecce" <?= is_integer(array_search('Lecce', $cities)) ? 'selected' : null ?>>Lecce</option>
            <option value="Palermo" <?= is_integer(array_search('Palermo', $cities)) ? 'selected' : null ?>>Palermo</option>
        </select>
        <br><br>
        <div class="col-md-6">
        Provincia<br>
        <input type="checkbox" name="province[]" value="Lecce" >Lecce <br>
        <input type="checkbox" name="province[]" value="Roma">Roma <br>
        <input type="checkbox" name="province[]" value="Napoli">Napoli <br>
        <input type="checkbox" name="province[]" value="Milano">Milano <br>
        </div>

        <input type="hidden" name="id" value="<?= $name.' '.$surname ?>">
        <div class="col-12">
        <input type="submit" class="btn btn-primary" value="INVIA">
        <input type="button" class = "btn btn-primary" value="Pulisci" onclick= "cleanForm()">
        </div>
    </div>
</div>
    </form>