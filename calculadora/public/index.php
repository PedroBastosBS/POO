<?php

class Calculadora
{
    public int $primeiroNumero;
    public int $segundoNumero;

    public function __construct(int $primeiroNumero, int $segundoNumero)
    {
        $this->primeiroNumero = $primeiroNumero;
        $this->segundoNumero = $segundoNumero;
    }

    public function somar(): int
    {
        return $this->primeiroNumero + $this->segundoNumero;
    }

    public function subtrair(): int
    {
        return $this->primeiroNumero - $this->segundoNumero;
    }

    public function multiplicar(): int
    {
        return $this->primeiroNumero * $this->segundoNumero;
    }

    public function dividir(): int | float
    {
        return $this->primeiroNumero / $this->segundoNumero;
    }
}

$resultado = '';

if (isset($_GET['nro1']) && isset($_GET['nro2']) && isset($_GET['calcular'])) {
    $nro1 = (int)$_GET['nro1'];
    $nro2 = (int)$_GET['nro2'];
    $operacao = $_GET['calcular'];

    $calculadora = new Calculadora($nro1, $nro2);

    switch ($operacao) {
        case 'somar':
            $resultado = $calculadora->somar();
            break;
        case 'subtrair':
            $resultado = $calculadora->subtrair();
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar();
            break;
        case 'dividir':
            $resultado = $calculadora->dividir();
            break;
        default:
            $resultado = 'Operação inválida';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
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
    <form method="GET">
        <h2 style="text-align: center;">Calculadora</h2>
        <label for="nro1">Primeiro Número</label><br>
        <input type="number" name="nro1" required><br><br>
        <label for="nro2">Segundo Número</label><br>
        <input type="number" name="nro2" required><br><br>
        <label for="calcular">Operação</label><br>
        <select name="calcular">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular"><br><br>
        <p>O Resultado é <?php echo $resultado; ?></p>
    </form>
</body>
</html>

