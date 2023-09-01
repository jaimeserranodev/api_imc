<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <!-- FORMULARIO PARA CALCULAR IMC  -->
    <form method="post" action="calcular_imc.php">
    
        <h1>Calculadora de IMC</h1>
        <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" required>
        <br>
        <label for="altura">Altura (m):</label>
            <input type="text" name="altura" id="altura" required>
        <span id="altura-error" style="color: red;"></span>

        <br>
        <input type="submit" value="Calcular IMC">
    </form>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Este script valida la entrada de altura en el formulario
        
    document.getElementById('altura').addEventListener('input', function() {
        var alturaInput = this.value;
        // Utiliza una expresión regular para validar la entrada como un número decimal
        var validHeight = /^\d+(\.\d{1,2})?$/.test(alturaInput);
        var alturaError = document.getElementById('altura-error');

        if (!validHeight) {
            alturaError.textContent = 'Ingresa una altura válida (por ejemplo, 1.75)';
            document.getElementById('altura').setCustomValidity(''); // Invalida la entrada
        } else {
            alturaError.textContent = '';
            document.getElementById('altura').setCustomValidity(''); // Restablece la validación personalizada
        }
    });
</script>


</body>
</html>