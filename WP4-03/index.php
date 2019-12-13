<?php 
require_once 'classes' . DIRECTORY_SEPARATOR . 'model.php';
$debitors = Model::getAllDebitors();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Šrouby od matky</title>
</head>
<body>
<?php 
$sqlDebitors = "SELECT * FROM Debitors;"; 
$resultDebitors = Database::query($sqlDebitors); ?>
    <table class="table table-striped">
<?php
foreach ($debitors as $row) {?>
<tr>
    <td><?= $row['firstname'];?></td>
    <td><?= $row['lastname'];?></td>
    <td><?= $row['id_debitors'];?></td>
    <td><?= $row['birth_date'];?></td>
    <td><?= $row['day_of_death'];?></td>
</tr>
<?php }?>
</table>


</body>
</html>
