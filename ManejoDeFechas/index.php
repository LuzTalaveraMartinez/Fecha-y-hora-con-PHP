<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora Actual</title>
</head>

<body>
    <div>


        <?php
        
        /*
           * d - dia del mes (1-31)
           * m - mes del año (1-12)
          * Y - año (4 dígitos)
          * l - dia de la semana

           * h - hora en formato 1-12
           * i - minutos 0-59
           * s - segundos 0-59
           * a - am-pm
       */

        $mes = array ("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

        echo "Fecha: " .date("l") ." ". date("d") ." de ". $mes[date("m")-1]. " de ". date("Y") ."</br><br/>";
        echo "Son las ". date("h:i:sa");


        ?>
    </div>

</body>


</html>

