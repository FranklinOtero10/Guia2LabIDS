<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Gato</title>
</head>
<body>
    <h1>Ingrese los datos de su mascota (Gato)</h1>
    <form action="../controllers/ControladorGato.php" method= "POST">
        <label>ID Animal: </label><input type="number" name="idAnimal" required /><br><br>   
        <label>Nombre: </label><input type="text" name="nombre" required /><br><br>
        <label>Color: </label><input type="text" name="color" required /><br><br>
        <label>Edad: </label><input type="number" name="edad" required /><br><br>
        <label>Peso: </label><input type="number" name="peso" required /><br><br>
        <label>Tamaño: </label><input type="text" name="tamanio" required /><br><br>
        <label>Sonido: </label><input type="text" name="sonido" required /><br><br>
        <label>Tipo de Sangre: </label><input type="text" name="tipoSangre" required /><br><br>

        <input type="submit" value = "Enviar">
    </form>
</body>
</html>