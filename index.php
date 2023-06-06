<?php 
    include_once ('app.php');
    use Models\Paises;
    $obj = new Paises;
    echo '<pre>';
    var_dump(($obj->loadAllData()));
    $paises=$obj->loadAllData();
    echo '</pre>';

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="controllers/paisController.js" type="text/javascript" defer></script>
    <script src="controllers/departamentoController.js" type="text/javascript" defer></script>
    <title>Document</title>
</head>
<body>
<form id="myForm">
        <label for="nombrePais">Nombre del pais</label>
        <input type="text" name="nombrePais"><br>
        <input type="submit" value="Enviar">
</form>

<form id="myFormDepartamento">
        <select name="idPais" id="">
        <?php 
                foreach ($paises as $value) {
                    foreach ($value as $key => $val){
                        if($key =='idPais'){
                            echo "<option value='$val'>" ;
                        }else{
                            echo $val ."</option>";
                        }
                    }
                }
            ?>
        </select>
        <label for="nombreDep">Nombre del Departamento</label>
        <input type="text" name="nombreDep"><br>
        <input type="submit" value="Enviar">
</form>

<?php 

                    foreach ($paises[0] as $key => $val){
                        echo $key;
                        echo '<br>';
                        echo $val;
                        echo '<br>';
                    }
               
            ?>

</body>
</html>