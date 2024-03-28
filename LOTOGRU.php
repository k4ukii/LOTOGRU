<html> 

<style>   body{
           background: rgb(174,238,185);
background: radial-gradient(circle, rgba(174,238,185,1) 0%, rgba(148,187,233,1) 100%);
text-align: center; 
 
}
       a{
        font-size:40px;

       } 
        </style>
<body>
<?php
$teste= array();
$teste = json_decode($_POST["teste"]);
$valor = $_POST["valor"];

$escolhidos = count($teste);

if($escolhidos <25 ||$escolhidos >25 ){

    echo "Poxa você selecionou Números a menos/mais <br> TENTE NOVAMENTE!";
}
else if( $valor==0 ||$valor<0){

    echo "Poxa você não selecionou o valor <br> TENTE NOVAMENTE!";
}
else{

$numero1 = array();

do {
    $numero1 = array(); // Limpa o array
    for ($N = 0; $N < 25; $N++) {
        $numero = rand(1, 50);
        $numero1[] = $numero;
    }

    $semrep = array_unique($numero1);
    $Q = count($semrep);
} while ($Q < 25);

echo "25 números sorteados:\n";
foreach ($semrep as $numero) 
{
    echo $numero . "\n";
}


echo "<br> Numeros Escolhidos ";
echo ($teste[0]),", ";
echo ($teste[1]),", ";
echo ($teste[2]),", ";
echo ($teste[3]),", ";
echo ($teste[4]),", ";
echo ($teste[5]),", ";
echo ($teste[6]),", ";
echo ($teste[7]),", ";
echo ($teste[8]),", ";
echo ($teste[9]),", ";
echo ($teste[10]),", ";
echo ($teste[11]),", ";
echo ($teste[12]),", ";
echo ($teste[13]),", ";
echo ($teste[14]),", ";
echo ($teste[15]),", ";
echo ($teste[16]),", ";
echo ($teste[17]),", ";
echo ($teste[18]),", ";
echo ($teste[19]),", ";
echo ($teste[20]),", ";
echo ($teste[21]),", ";
echo ($teste[22]),", ";
echo ($teste[23]),", ";
echo ($teste[24]),", ";

$acerto = array_intersect($teste, $semrep);
echo "<br>Números em comum: ";
foreach ($acerto as $numero) {
    echo $numero . ", ";}

$acerto1 = count($acerto);    


if ($acerto1 ==0 ||$acerto1 ==50 ){

$premio= 50 * $valor;



}
else{


$premio = $acerto1 * $valor ;

}

echo "<br>Parabéns?  Ganhos:",$premio," reais";

}

?>
</body>
</html>