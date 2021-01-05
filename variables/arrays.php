<?php

//  $alumnos= array("maria","juan", "pedro", 34);
//
//  echo $alumnos[0];
//  echo "<br>";
//  echo $alumnos[1];
//  echo "<br>";
//  echo $alumnos[2];
//  echo "<br>";
//  echo $alumnos[3];
//
// //Array asociativo
// $arrayName = array('nombre' =>"Pablo", 'direccion'=> "Alvear 100", 'telefono'=> 99999999 );
// echo $arrayName['direccion'];
//
// //Imprimir arrays
// echo "<pre>";
// print_r($arrayName);
// echo "</pre>";

//Array multidimentsionales
// $alumnos[0]= array('nombre' =>'Juan' , 'materias'=> array("matematicas" ,"español") );
// $alumnos[1]= array('nombre' =>'Maria' , 'materias'=> array("matematicas" ,"ingles") );
// $alumnos[2]= array('nombre' =>'luis' , 'materias'=> array("ciencias" ,"ingles") );
// $alumnos[3]= array('nombre' =>'pablo' , 'materias'=> array("matematicas" ,"civismo") );
//
// echo "<pre>";
// print_r($alumnos);
// echo "</pre>";


// $alumnos['Juan']= array('materias'=> array("matematicas" ,"español") );
// $alumnos['Maria']= array( 'materias'=> array("matematicas" ,"ingles") );
// $alumnos['luis']= array('materias'=> array("ciencias" ,"ingles") );
// $alumnos['Pablo']= array('materias'=> array("matematicas" ,"civismo") );
//
// echo "<pre>";
// print_r($alumnos);
// echo "</pre>";

$alumnos= array (
  'Juan' =>array(
    'materias'=> array(
      "matematicas"=>array(
        "notas" => array(
          3,4,10,5
        )
      ),
      "español"=>array(
        "notas"=>array(
          3,4,10,5)
      )
    )
  ),
   'Maria' =>array(
     'materias'=> array(
       "matematicas" ,
       "ingles"
    )
  ),
    'luis' =>array(
      'materias'=> array(
        "ciencias" ,
        "ingles"
    )
  )
);

echo "<pre>";
print_r($alumnos);
echo "</pre>";

//Modificando la materia de Maria
$alumnos['maria']['materias'][0]="Quimica";
echo "<pre>";
print_r($alumnos);
echo "</pre>";



 ?>
