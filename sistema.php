<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>

<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nome" aria-label="First name"><p>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Last name"><p>
  </div>
</div>

<form class="row g-3">
  
<div class="col-md-2">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

  <div class="col-1">
    <label for="inputAddress" class="form-label">Salário</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Departamento</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

</body>
</html>