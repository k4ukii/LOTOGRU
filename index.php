<!DOCTYPE html>
<html>
<head>
    <title>lotogru</title> 
    <style>
        .bt {
            background-color: lightblue;
            height: 50px;
            width: 50px;
            border-radius: 20px;
        }

        body{
            background: rgb(174,238,185);
background: radial-gradient(circle, rgba(174,238,185,1) 0%, rgba(148,187,233,1) 100%);
text-align: center;
        }
    </style>
    <script>
        // Adiciona um ouvinte de evento a cada botão com a classe "bt"
        window.onload = function() {
            var botoes = document.getElementsByClassName("bt");
            for (var i = 0; i < botoes.length; i++) {
                botoes[i].addEventListener("click", function() {
                    alternar(this);
                });
            }

            // Adiciona um ouvinte de evento ao botão de enviar
            document.getElementById("enviar").addEventListener("click", verificar);
        };

        function alternar(bt) {
            if (bt.style.backgroundColor === "lightblue") {
                bt.style.backgroundColor = "lightgreen"; // Muda a cor para verde
            } else {
                bt.style.backgroundColor = "lightblue"; // Volta a cor original
            }
        }

        function verificar() {
            var escolhido =[];
            var botoes = document.getElementsByClassName("bt");
            for (var i = 0; i < botoes.length; i++) {
                if (botoes[i].style.backgroundColor === "lightgreen") {
                    escolhido.push(botoes[i].value);
                }
            }

            document.getElementById("teste").value = JSON.stringify(escolhido);
            
        }
    </script>
</head>
<body>
    <form action="lotogru.php" method="POST">
        SELECIONE 25 NÚMEROS:<br>
        <input type="button" name="1" value="1" class="bt">
        <input type="button" name="2" value="2" class="bt">
        <input type="button" name="1" value="3" class="bt">
        <input type="button" name="2" value="4" class="bt">
        <input type="button" name="1" value="5" class="bt">
        <input type="button" name="2" value="6" class="bt">
        <input type="button" name="1" value="7" class="bt">
        <input type="button" name="2" value="8" class="bt">
        <input type="button" name="1" value="9" class="bt">
        <input type="button" name="2" value="10" class="bt">

        <input type="button" name="1" value="11" class="bt">
        <input type="button" name="2" value="12" class="bt">
        <input type="button" name="1" value="13" class="bt">
        <input type="button" name="2" value="14" class="bt">
        <input type="button" name="1" value="15" class="bt">
        <input type="button" name="2" value="16" class="bt">
        <input type="button" name="1" value="17" class="bt">
        <input type="button" name="2" value="18" class="bt">
        <input type="button" name="1" value="19" class="bt">
        <input type="button" name="2" value="20" class="bt">



        <input type="button" name="1" value="21" class="bt">
        <input type="button" name="2" value="22" class="bt">
        <input type="button" name="1" value="23" class="bt">
        <input type="button" name="2" value="24" class="bt">
        <input type="button" name="1" value="25" class="bt">
        <input type="button" name="2" value="26" class="bt">
        <input type="button" name="1" value="27" class="bt">
        <input type="button" name="2" value="28" class="bt">
        <input type="button" name="1" value="29" class="bt">
        <input type="button" name="2" value="30" class="bt">







        <input type="button" name="1" value="31" class="bt">
        <input type="button" name="2" value="32" class="bt">
        <input type="button" name="1" value="33" class="bt">
        <input type="button" name="2" value="34" class="bt">
        <input type="button" name="1" value="35" class="bt">
        <input type="button" name="2" value="36" class="bt">
        <input type="button" name="1" value="37" class="bt">
        <input type="button" name="2" value="38" class="bt">
        <input type="button" name="1" value="39" class="bt">
        <input type="button" name="2" value="40" class="bt">









        <input type="button" name="1" value="41" class="bt">
        <input type="button" name="2" value="42" class="bt">
        <input type="button" name="1" value="43" class="bt">
        <input type="button" name="2" value="44" class="bt">
        <input type="button" name="1" value="45" class="bt">
        <input type="button" name="2" value="46" class="bt">
        <input type="button" name="1" value="47" class="bt">
        <input type="button" name="2" value="48" class="bt">
        <input type="button" name="1" value="49" class="bt">
        <input type="button" name="2" value="50" class="bt">


<br>INSIRA O VALOR DA APOSTA:
        <input type="number" name="valor" >

        <input type="submit" value="enviar" id="enviar">
        <input type="hidden" name="teste" id="teste">
    </form>
</body>
</html>
