<?php include('admin/calendario.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calendario</title>
</head>
<body>

<h1>Calendario Dinâmico</h1>
<div class="container">
<h3>&lt<href="?mes=<?php echo $mes;?>"<>"</h3>
<table class="table bordered table-dark table-hover">
<tr>
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sab</th>

</tr>
<?php
  foreach($semanas as $semana){  
    echo $semana;
}
?>
</table>
</body>
</html>