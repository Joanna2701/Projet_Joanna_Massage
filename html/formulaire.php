<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'config.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joanna Massage, massages à domicile</title>
  <link href="<?= BASE_URL; ?>/CSS/style.css" rel="stylesheet">
</head>


<body>
  <?php include '../html/header.php'; ?>
  <form class="formulaire">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="avenue des Champs-Elysées">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="tel" class="form-control" id="inputAddress2" placeholder="Code postal">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" id="Ville" placeholder="Paris">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <?php include '../html/footer.php'; ?>
</body>

</html>