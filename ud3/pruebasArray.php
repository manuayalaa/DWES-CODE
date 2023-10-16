<?php
$aPaises = array(
array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris'),
);
echo "Opción 1 <br/>";
$nombrePaises = array();
foreach ($aPaises as $pais) {
    $nombrePaises[] = $pais['pais'];
};
print_r ($nombrePaises);

echo "<br/>Opción 2<br/>";
$nombrePaises = array_map(function ($pais) {
    return $pais['pais'];
    }, $aPaises);
    
print_r($nombrePaises);

echo "<br/>Prueba 1<br/>";
$aNumeros = array(1,2,3,4,5,6,7);

$NumerosCuadrados = array();
for ($i = 0; $i<count($aNumeros);$i ++ ){
    $NumerosCuadrados[] = $aNumeros[$i]**2;
};
print_r($NumerosCuadrados);
?>