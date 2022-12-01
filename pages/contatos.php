<?php
include("conection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .mb-3{
        margin-left: 2%;
        width: 50%;
    }
    .divs{
        margin-top: 2%;
    }
</style>
<body>
<form action="" method="POST">
<div class="divs">

<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?=$nome ?>">
  </div>

  <div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input type="email" name="email" id="email" class="form-control" value="<?=$email ?>">
</div>
<div class="mb-3">
  <label for="text" class="form-label">Example textarea</label>
  <textarea class="form-control" name="texto" id="texto"><?=$texto ?></textarea>
</div>
</div>
<button type="submit" class="btn btn-primary" style="margin-left:2%;" name="enviar" id="enviar">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>