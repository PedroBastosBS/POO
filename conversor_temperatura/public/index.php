<?php
class ConversorTemperatura
{
    public function converterCelsiusParaKelvin($celsius)
    {
        return $celsius + 273.15;
    }

    public function converterCelsiusParaFahrenheit($celsius)
    {
        return ($celsius * 9/5) + 32;
    }
}

if (isset($_POST['valor']) && isset($_POST['escala'])) {
    $valor = $_POST['valor'];
    $escala = $_POST['escala'];

    $conversor = new ConversorTemperatura();

    $kelvin = $conversor->converterCelsiusParaKelvin($valor);
    $fahrenheit = $conversor->converterCelsiusParaFahrenheit($valor);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Conversor de Temperatura</h2>
        <label for="valor">Digite um valor de temperatura:</label><br>
        <input type="number" step="any" name="valor" required><br><br>
        <label for="escala">Selecione a escala de temperatura:</label><br>
        <select name="escala" required>
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>
        <input type="submit" value="Calcular"><br><br>

        <?php if (isset($kelvin) && isset($fahrenheit)) { ?>
            <p><?php echo $valor . '° Celsius = ' . $kelvin . ' Kelvin = ' . $fahrenheit . '° Fahrenheit'; ?></p>
        <?php } ?>
    </form>
</body>
</html>
