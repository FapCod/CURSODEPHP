<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h1>
    <?php      
    
   //Array normal                     
   $frutas = array('manzanas','uvas','platanos','peras');
   echo $frutas[0];
   echo "<br/>";
   //if en php
   if ($frutas[1]=='uvas'){
       echo "Es correcto";
   }else{
       echo "Es incorrecto";
   }
   //Array con clave
   $frutas2= array(
       'clave' => 'Manzana',
       'clave1' => 'Pera',
       'clave2' => 'Mango'
   );
   //Array mixto con clave y sin clave
   $frutas3= array('pera','mango',
                    'clave1' => 'mandarina'
);
echo "<br/>";
   echo $frutas2['clave1'];
   echo "<br/>";
   echo $frutas3[0];
   echo "<br/>";
   //constantes , no se pueden modificar
   define('pi','3.14');
   echo pi;
   echo "<br/>";
   //ciclos en php 
   //IF
   $edad=18;
   if($edad==18){
        echo "Eres mayor de edad";
   }else{
        echo "NO eres mayor de edad";
   }
   echo "<br/>";
   //SWITCH
   $variable=19;
   switch ($variable) {
       case 18:
           echo "Eres cool";
           break;
       case 17:
            echo "NO eres cool";
           break;
       default:
           # code...
           echo "No puse para este numero que kreisi";
           break;
   }
   echo "<br/>";
   //FOR
   for ($i=0; $i <10 ; $i++) { 
       # code...
       echo "HOLA MUNDO".$i;
       echo "<br/>";
   }
   //WHILE
   $a=1;
   while ($a <= 10) {
       # code...
       echo "numero".$a;
       echo "<br/>";
       $a++;
   }
   //MANEJAR FECHAS
   date_default_timezone_set('America/Los_Angeles');
   echo "<br/>";
   echo "Fecha de hoy".date('d-m-Y');
   echo "<br/>";
   echo "El dia de hoy es".date('d');
   echo "<br/>";
   echo "El mes actual es".date('M');
   echo "<br/>";
   echo "El mes actual es".date('F');
   echo "<br/>";
   echo "El numero de la semana actual".date('W');
   echo "<br/>";
   echo "El numero del dia ".date('w');
   echo "<br/>";
   echo "El numero de dias que tiene el mes ".date('t');
   echo "<br/>";
   //MANEJAR OPERADORES
   $num=1;
   $num2=2;
   if($num ==1 AND $num2==2){
       echo "correcto";
   }else{
       echo "Incorrecto";
   }
   echo "<br/>";
   if($num ==4 OR $num2==1){
        echo "correcto";
   }else{
        echo "Incorrecto";
   }
   echo "<br/>";
   if($num ==1 Xor $num2==1){
    echo "correcto";
   }else{
    echo "Incorrecto";
   }
   echo "<br/>";
   //OPERADORES
   $var1=2;
   $var2=3;
   echo "Suma ".($var1+$var2);
   echo "<br/>";
   echo "Resta ".($var1-$var2);
   echo "<br/>";
   echo "Multiplicacion ".($var1*$var2);
   echo "<br/>";
   echo "Division ".($var1/$var2);
   echo "<br/>";
   echo "Exponente ".($var1**$var2);
   echo "<br/>";
   //Manejar String/cadenas
   $cadena='hola mundo';
   echo "<br/>";
   echo "Tamano de cadena ".strlen($cadena);
   echo "<br/>";
   echo "Reemplazar una letra ".str_replace('h','H',$cadena);
   echo "<br/>";
   echo "Todo minuscula ".strtolower($cadena);
   echo "<br/>";
   echo "Todo mayuscula ".strtoupper($cadena);
   echo "<br/>";
   echo "Substraer un pedazo dependiendo del intervalo dado ".substr($cadena,0,4);
   echo "<br/>";
   //Funciones
   function nombre(){
       $saludo= "Hola amiguitos";
       return $saludo;
   }
   echo nombre();
   echo "<br/>";
   function suma($nume,$nume1){
    $suma= $nume+$nume1;
    return    $suma;
    }
    echo       suma(2,3);

    


    ?>
    </h1>


   
</body>
</html>
  

