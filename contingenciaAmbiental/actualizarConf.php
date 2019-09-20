<?php
  $fileName = "aireConf.txt";
  $conf = parse_ini_file($fileName, true);

  $form = $_POST['form'];
  $cad = "";

  $cad .= "USE = " . $conf['USE'] . "\n";

  if ($form == 'Huracanes') {
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

    $cad .= "NOMBRE = " . $_POST['Nombre'] . "\n";
    $cad .= "CATEGORIA = " . $_POST['Categoria'] . "\n";
    $cad .= "UBICACION = " . $_POST['Ubicacion'] . "\n";
    $cad .= "RACHAS = " . $_POST['Rachas'] . "\n";
    $cad .= "M2 = " . $_POST['M2'] . "\n";
    $cad .= "H_VAL = " . $_POST['Valoracion'] . "\n";
    $cad .= "SEMAFORO = " . $_POST['Semaforo'] . "\n";

    list($ano, $mes, $dia) = explode('-', $_POST['Fecha']);
    $aux2 = "";

    switch ($mes) {
      case '01':
        $aux2 = "enero";
        break;
      case '02':
        $aux2 = "febrero";
        break;
      case '03':
        $aux2 = "marzo";
        break;
      case '04':
        $aux2 = "abril";
        break;
      case '05':
        $aux2 = "mayo";
        break;
      case '06':
        $aux2 = "junio";
        break;
      case '07':
        $aux2 = "julio";
        break;
      case '08':
        $aux2 = "agosto";
        break;
      case '09':
        $aux2 = "septiembre";
        break;
      case '10':
        $aux2 = "octubre";
        break;
      case '11':
        $aux2 = "noviembre";
        break;
      case '12':
        $aux2 = "diciembre";
        break;
    }

    $cad .= "H_FECHA_RAW = " . $_POST['Fecha'] . "\n";
    $cad .= "H_DIA = " . $dia . "\n";
    $cad .= "H_MES = " . $aux2 . "\n";
    $cad .= "H_ANO = " . $ano . "\n";
    $cad .= "H_HORA = " . $_POST['Hora'] . "\n";
    $cad .= "H_INFO = " . $_POST['info'];

  } else if ($form == 'Aire') {
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
    $cad .= "SEMAFORO = " . $conf['SEMAFORO'] . "\n";

    $cad .= "V_FASE = " . $conf['V_FASE'] . "\n";
    $cad .= "V_COLOR = " . $conf['V_COLOR'] . "\n";
    $cad .= "V_FECHA_RAW = " . $conf['V_FECHA_RAW'] . "\n";
    $cad .= "V_DIA = " . $conf['V_DIA'] . "\n";
    $cad .= "V_MES = " . $conf['V_MES'] . "\n";
    $cad .= "V_ANO = " . $conf['V_ANO'] . "\n";
    $cad .= "V_HORA = " . $conf['V_HORA'] . "\n";
    $cad .= "V_INFO = " . $conf['V_INFO'] . "\n";

    $cad .= "PM = " . $_POST['PM'] . "\n";
    $cad .= "MCG = " . $_POST['MCG'] . "\n";
    $cad .= "CO = " . $_POST['CO'] . "\n";

    list($ano, $mes, $dia) = explode('-', $_POST['Fecha']);
    $aux2 = "";

    switch ($mes) {
      case '01':
        $aux2 = "enero";
        break;
      case '02':
        $aux2 = "febrero";
        break;
      case '03':
        $aux2 = "marzo";
        break;
      case '04':
        $aux2 = "abril";
        break;
      case '05':
        $aux2 = "mayo";
        break;
      case '06':
        $aux2 = "junio";
        break;
      case '07':
        $aux2 = "julio";
        break;
      case '08':
        $aux2 = "agosto";
        break;
      case '09':
        $aux2 = "septiembre";
        break;
      case '10':
        $aux2 = "octubre";
        break;
      case '11':
        $aux2 = "noviembre";
        break;
      case '12':
        $aux2 = "diciembre";
        break;
    }

    $cad .= "A_FECHA_RAW = " . $_POST['Fecha'] . "\n";
    $cad .= "A_DIA = " . $dia . "\n";
    $cad .= "A_MES = " . $aux2 . "\n";
    $cad .= "A_ANO = " . $ano . "\n";
    $cad .= "A_HORA = " . $_POST['Hora'] . "\n";

    $mcg = intval($_POST['MCG']);

    $sem = 0;
    $valoracion = "";
    if ($mcg <= 50 ) {
      $sem = 1;
      $valoracion = "Bueno";
    } else if ($mcg > 50 && $mcg <= 100) {
      $sem = 2;
      $valoracion = "Moderado";
    } else if ($mcg > 100 && $mcg <= 150) {
      $sem = 3;
      $valoracion = "Poco saludable";
    } else if ($mcg > 150 && $mcg <= 200) {
      $sem = 4;
      $valoracion = "Insalubre";
    } else if ($mcg > 200 && $mcg <= 300) {
      $sem = 5;
      $valoracion = "Muy poco saludable";
    } else if ($mcg > 300) {
      $sem = 6;
      $valoracion = "Peligroso";
    }

    $cad .= "A_SEM = " . $sem ."\n";
    $cad .= "A_VAL = " . $valoracion . "\n";
    $cad .= "A_INFO = " . $_POST["info"];

  } else if($form == "Volcan") {
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
    $cad .= "SEMAFORO = " . $conf['SEMAFORO'] . "\n";

    $cad .= "V_FASE = " . $_POST['Fase'] . "\n";
    $cad .= "V_COLOR = " . $_POST['color'] . "\n";

    list($ano, $mes, $dia) = explode('-', $_POST['Fecha']);
    $aux2 = "";

    switch ($mes) {
      case '01':
        $aux2 = "enero";
        break;
      case '02':
        $aux2 = "febrero";
        break;
      case '03':
        $aux2 = "marzo";
        break;
      case '04':
        $aux2 = "abril";
        break;
      case '05':
        $aux2 = "mayo";
        break;
      case '06':
        $aux2 = "junio";
        break;
      case '07':
        $aux2 = "julio";
        break;
      case '08':
        $aux2 = "agosto";
        break;
      case '09':
        $aux2 = "septiembre";
        break;
      case '10':
        $aux2 = "octubre";
        break;
      case '11':
        $aux2 = "noviembre";
        break;
      case '12':
        $aux2 = "diciembre";
        break;
    }

    $cad .= "V_FECHA_RAW = " . $_POST['Fecha'] . "\n";
    $cad .= "V_DIA = " . $dia . "\n";
    $cad .= "V_MES = " . $aux2 . "\n";
    $cad .= "V_ANO = " . $ano . "\n";
    $cad .= "V_HORA = " . $_POST['Hora'] . "\n";
    $cad .= "V_INFO = " . $_POST['info'];
  }

  $myfile = fopen("aireConf.txt", "w");
  fwrite($myfile, $cad);

  header("Location: menu.php");
  die();
?>
