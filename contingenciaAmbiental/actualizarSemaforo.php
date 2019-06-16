<?php
  $fileName = "aireConf.txt";
  $conf = parse_ini_file($fileName, true);

  $cad = "";

  $cad .= "PM = " . $conf['PM'] . "\n";
  $cad .= "MCG = " . $conf['MCG'] . "\n";
  $cad .= "CO = " . $conf['CO'] . "\n";
  $cad .= "A_FECHA_RAW = " . $conf['A_FECHA_RAW'] . "\n";
  $cad .= "A_DIA = " . $conf['A_DIA'] . "\n";
  $cad .= "A_MES = " . $conf['A_MES'] . "\n";
  $cad .= "A_ANO = " . $conf['A_ANO'] . "\n";
  $cad .= "A_HORA = " . $conf['A_HORA'] . "\n";
  $cad .= "A_SEM = " . $conf['A_SEM'] . "\n";
  $cad .= "A_VAL = " . $conf['A_VAL'] . "\n";
  $cad .= "A_INFO = " . $conf['A_INFO'] . "\n";

  $cad .= "V_FASE = " . $conf['V_FASE'] . "\n";
  $cad .= "V_COLOR = " . $conf['V_COLOR'] . "\n";
  $cad .= "V_FECHA_RAW = " . $conf['V_FECHA_RAW'] . "\n";
  $cad .= "V_DIA = " . $conf['V_DIA'] . "\n";
  $cad .= "V_MES = " . $conf['V_MES'] . "\n";
  $cad .= "V_ANO = " . $conf['V_ANO'] . "\n";
  $cad .= "V_HORA = " . $conf['V_HORA'] . "\n";
  $cad .= "V_INFO = " . $conf['V_INFO'] . "\n";

  $cad .= "NOMBRE = " . $conf['NOMBRE'] . "\n";
  $cad .= "CATEGORIA = " . $conf['CATEGORIA'] . "\n";
  $cad .= "UBICACION = " . $conf['UBICACION'] . "\n";
  $cad .= "RACHAS = " . $conf['RACHAS'] . "\n";
  $cad .= "M2 = " . $conf['M2'] . "\n";
  $cad .= "H_FECHA_RAW = " . $conf['H_FECHA_RAW'] . "\n";
  $cad .= "H_DIA = " . $conf['H_DIA'] . "\n";
  $cad .= "H_MES = " . $conf['H_MES'] . "\n";
  $cad .= "H_ANO = " . $conf['H_ANO'] . "\n";
  $cad .= "H_HORA = " . $conf['H_HORA'] . "\n";
  $cad .= "H_VAL = " . $conf['H_VAL'] . "\n";
  $cad .= "H_INFO = " . $conf['H_INFO'] . "\n";

  $cad .= "USE = " . $_POST['Semaforo'];

  $myfile = fopen("aireConf.txt", "w");
  fwrite($myfile, $cad);

  header("Location: menu.php");
  die();
?>
