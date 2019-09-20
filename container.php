<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lol</title>

    <link rel="stylesheet" href="contingenciaAmbiental/aireStyle.css">
  </head>
  <body>

     <?php
     $handle = fopen("contingenciaAmbiental/aireConf.txt", "r");
     if ($handle) {
       while (($line = fgets($handle)) !== false) {
           $aux = explode(" = ", $line);
           $conf[$aux[0]] = trim($aux[1]);
       }

       fclose($handle);
     } else {

     }
     if ($conf['USE'] == 'Aire') :
     ?>     
     <div class="aire-container">
       <div class="aire-wrap">
         <div class="aire-titulo-container">
           Calidad del aire
         </div>
         <div class="aire-mid-container">
           <div class="aire-mid-section">
             <div class="aire-mid-title">
               Valoración:
             </div>
             <div class="aire-mid-content">
               <?php echo $conf['A_VAL']; ?>
             </div>
           </div>
           <span class="aire-mid-bar"></span>
           <div class="aire-mid-section">
             <div class="aire-mid-title">
               Partículas suspendidas:
             </div>
             <div class="aire-mid-content">
               PM <?php echo $conf['PM']; ?> <br>
               <?php echo $conf['MCG']; ?> mcg/mt³
             </div>
           </div>
           <span class="aire-mid-bar"></span>
           <div class="aire-mid-section">
             <div class="aire-mid-title">
               Monóxido de carbono:
             </div>
             <div class="aire-mid-content">
               CO = <?php echo $conf["CO"]; ?>pm
             </div>
           </div>
         </div>
         <div class="aire-img-wrap">
           <a href="<?php echo $conf['A_INFO'];?>" class="aire-anchor">
           <img src="imgContingenciaAmbiental/aire/sem<?php echo $conf["A_SEM"]; ?>.png" alt="" style="width: 98%; height: 100%;">
           </a>
         </div>
         <div class="aire-footer-container">
           Medición realizada el <?php echo $conf['A_DIA']; ?> de <?php echo $conf['A_MES']; ?> de <?php echo $conf['A_ANO']; ?>, a las <?php echo $conf['A_HORA']; ?> en el CUSur
         </div>
       </div>
     </div>     
    <?php elseif($conf['USE'] == 'Huracanes'): ?>      
      <div class="aire-container">
        <div class="aire-wrap">
          <div class="aire-titulo-container">
            Medición huracanes
          </div>
          <div class="huracan-mid-container">
            <div class="huracan-sm-section">
              <div class="huracan-mid-title">
                 Nombre:
              </div>
              <div class="huracan-section-cell">
                <?php echo $conf['NOMBRE']; ?>
              </div>
            </div>
            <span class="aire-mid-bar"></span>            
            <?php if ( !($conf['CATEGORIA'] == 'Ninguna') ) : ?>
              <div class="huracan-sm-section">            
                <div class="huracan-mid-title">
                  Categoría:
                </div>
                <div class="huracan-section-cell huracan-categoria">
                  <?php echo $conf['CATEGORIA']; ?>
                </div>
              </div>
              <span class="aire-mid-bar"></span>
            <?php endif; ?>

            <div class="huracan-lg-section" style="<?php if ($conf['CATEGORIA'] == 'Ninguna') echo "width: 55%;"; ?>">
              <div class="huracan-mid-title">
                 Ubicación:
              </div>
              <div class="huracan-section-cell">
                <?php echo $conf['UBICACION']; ?>
              </div>
            </div>
            <span class="aire-mid-bar"></span>

            <div class="huracan-md-section">
              <div class="huracan-mid-title">
                Rachas de viento:
              </div>
              <div class="huracan-section-sm-cell">
                <?php echo $conf['RACHAS']; ?> Km/hr
              </div>
              <div class="huracan-mid-title">
                Cantidad de lluvia
              </div>
              <div class="huracan-section-sm-cell">
                <?php echo $conf['M2']; ?> L/m²
              </div>
            </div>
          </div>
          <div class="huracan-valoracion">
            <?php echo $conf['H_VAL']; ?>
          </div>
          <div class="huracan-img-wrap">
            <a href="<?php echo $conf['H_INFO'];?>" class="aire-anchor">
              <img src="imgContingenciaAmbiental/huracan/semHur<?php echo $conf['SEMAFORO']; ?>.png" alt="" style="width: 80%; height: 100%;">
            </a>
          </div>
          <div class="aire-footer-container">
            Medición publicada el <?php echo $conf['H_DIA']; ?> de <?php echo $conf['H_MES']; ?> de <?php echo $conf['H_ANO']; ?>, a las <?php echo $conf['H_HORA']; ?> horas en el CUSur
          </div>
        </div>
      </div>      
    <?php else: ?>      
      <div class="aire-container">
        <div class="aire-wrap">
          <div class="aire-titulo-container">
            Alerta volcánica
          </div>
          <div class="volcan-mid-container">
            <div class="volcan-mid-title">
              Valoración:
            </div>
            <div class="volcan-mid-section">
              Alerta Fase <?php echo $conf['V_FASE']; ?>
            </div>
          </div>
          <div class="huracan-img-wrap">
            <a href="<?php echo $conf['V_INFO'];?>" class="aire-anchor">
            <img src="imgContingenciaAmbiental/volcan/semVol<?php echo $conf['V_COLOR'];?>.png" alt="" style="width: 55%; height: 100%;">
            </a>
          </div>
          <div class="aire-footer-container">
            Medición publicada el <?php echo $conf['V_DIA']; ?> de <?php echo $conf['V_MES']; ?> de <?php echo $conf['V_ANO']; ?>, a las <?php echo $conf['V_HORA']; ?> horas en el CUSur
          </div>
        </div>
      </div>      
    <?php endif; ?>

    <a href="https://www.facebook.com/PCivilCusur/"><img src="imgContingenciaAmbiental/UIPC.png" style="width: 350px;" alt=""></a>

  </body>
</html>
