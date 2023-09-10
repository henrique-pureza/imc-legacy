<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Resultado - IMC Legacy</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Valores recebidos</h1>
            <?php
                if ($_POST)
                {
                    $peso = $_POST["peso"];
                    $altura = $_POST["altura"] / 100;

                    if ($peso != "" && $altura != "")
                    {
                        $imc = round($peso / pow($altura, 2), 2);

                        if ($imc < 18.5)
                        {
                            $status = "você está abaixo do peso.";
                        }
                        else if ($imc >= 18.5 && $imc <= 24.9)
                        {
                            $status = "você está com o peso normal.";
                        }
                        else if ($imc >= 25 && $imc <= 29.9)
                        {
                            $status = "você está acima do peso.";
                        }
                        else if ($imc >= 30 && $imc <= 39.9)
                        {
                            $status = "você está com obesidade grau 1.";
                        }
                        else if ($imc >= 40) {
                            $status = "você está com obesidade grau 2.";
                        }

                        echo "
                            <p>
                                Com base no peso de <b>$peso kg</b>
                                e na altura de <b>$altura m</b>,
                                determinamos que seu IMC equivale a <b>$imc</b>.
                            </p>
                            <p>
                                Isso significa que $status
                            <p>
                        ";
                    }
                    else
                    {
                        header("Location: /IMCLegacy/IMCLegacy.php");

                        die();
                    }
                }
                else
                {
                    header("Location: /IMCLegacy/IMCLegacy.php");

                    die();
                }
            ?>
            <a href="/IMCLegacy/IMCLegacy.php">Voltar à home page</a>
        </div>
    </body>
</html>
