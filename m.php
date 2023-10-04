<!DOCTYPE html>
<html>
<head>
<title>Resultado da Calculadora</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Resultado da Calculadora</h1>

 

    <?php
    // Função para adição
    function add($num1, $num2) {
        return $num1 + $num2;
    }

 

    // Função para subtração
    function subtract($num1, $num2) {
        return $num1 - $num2;
    }

 

    // Função para multiplicação
    function multiply($num1, $num2) {
        return $num1 * $num2;
    }

 

    // Função para divisão
    function divide($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Não é possível dividir por zero.";
        }
    }

 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

 

        switch ($operation) {
            case '+':
                $result = add($num1, $num2);
                break;
            case '-':
                $result = subtract($num1, $num2);
                break;
            case '*':
                $result = multiply($num1, $num2);
                break;
            case '/':
                $result = divide($num1, $num2);
                break;
            default:
                $result = "Operação inválida.";
                break;
        }

 

        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</div>
</body>
</html>