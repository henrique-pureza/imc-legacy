<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>IMC Legacy</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
            function validate() {
                if (document.getElementById("peso").value == "") {
                    alert("Por favor, digite seu peso!");
                } else if (document.getElementById("altura").value == "") {
                    alert("Por favor, digite sua altura!");
                }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h1>IMC Legacy</h1>
            <h2>Calculadora de IMC para navegadores legados</h2>

            <p>Digite seu peso e altura para saber o IMC (índice de massa corporal)!</p>

            <form action="/IMCLegacy/IMCLegacyResult.php" method="post" onsubmit="validate()">

                <label for="peso">Peso (kg):</label>
                <input
                    type="text"
                    id="peso"
                    name="peso"
                    class="text-box"
                />

                <br />

                <label for="altura">Altura (em cm):</label>
                <input
                    type="text"
                    id="altura"
                    name="altura"
                    class="text-box"
                />

                <br />

                <input type="submit" value="Calcular" />
            </form>
        </div>
    </body>
</html>
