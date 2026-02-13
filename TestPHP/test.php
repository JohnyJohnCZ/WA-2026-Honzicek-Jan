
<?php
$name = "";
$message = "Ahoj, $name!";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $vek = $_POST['vek'] ?? '';
    $color = $_POST['color'] ?? '#000000';
    $message = "Ahoj, $name! Je ti $vek let a vybral/a jsi barvu: $color.";

}
else {
    $message = "Neznám tě";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
   <h1>Test formuláře</h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus pariatur odio, corrupti sequi alias quae odit iure nisi rem veniam maxime ab doloribus quibusdam reiciendis quaerat vero id consequuntur recusandae.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus pariatur odio, corrupti sequi alias quae odit iure nisi rem veniam maxime ab doloribus quibusdam reiciendis quaerat vero id consequuntur recusandae.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus pariatur odio, corrupti sequi alias quae odit iure nisi rem veniam maxime ab doloribus quibusdam reiciendis quaerat vero id consequuntur recusandae.</p>

   <form action="test.php" method="post">
         <input type="text" name="name" placeholder="Zadejte své jméno">
        <input type="number" name="vek" placeholder="Zadejte svůj věk">

        <input type="color" name="color" id="colorPicker">
         <input type="submit" value="Odeslat">

<?php echo "<p style='color: $color;'>$message</p>"; ?>    


</body>
</html>