<?php
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "") ?$_POST['nombre'] : "Sin datos";
    $apellidos = (isset($_POST['apellidos']) && $_POST["apellidos"] != "") ?$_POST['apellidos'] : "Sin datos";
    $edad = (isset($_POST['edad']) && $_POST["edad"] != "") ?$_POST['edad'] : "Sin datos";
    $direccion = (isset($_POST['direccion']) && $_POST["direccion"] != "") ?$_POST['direccion'] : "Sin datos";
    $boletos = (isset($_POST['boletos']) && $_POST["boletos"] != "") ?$_POST['boletos'] : "Sin datos";
    $tipo = (isset($_POST['tipos']) && $_POST["tipos"] != "") ?$_POST['tipos'] : "Sin datos";
    
    $max=15;
    $m=1;
    $y;
    $img;

    $pro = '<img src="../pro.jpg" alt="que pro" width="400">';
    $fp = '<img src="../flash.jpg" alt="Flash Pass" width="200">';
    $el = '<img src="../francia.jpg" alt="Francia" width="400">';
    $pma = '<img src="../pumas.jpg" alt="Pumas" width="200">';
    $mlk = '<img src="../leche.jpg" alt="Leche" width="200">';

    $normal="¿No te ha caído la beca verdad?";
    $flash="Alto ahí velocista";
    $elegante="Que fino";
    $puma="Goyaaaaaa";
    $milk="Yo también tomo de la Conasupo";

    if($tipo=='Normal')
    {
        $y=$normal;
        $img=$pro;
        
    }
    if($tipo=='Flash Pass')
    {
        $y=$flash;
        $img=$fp;
    }
    if($tipo=='Elegante Pass')
    {
        $y=$elegante;
        $img=$el;
    }
    if($tipo=='Puma Pass')
    {
        $y=$puma;
        $img=$pma;
    }
    if($tipo=='Deslactosada Pass')
    {
        $y=$milk;
        $img=$mlk;
    }

    if($boletos>$max or $boletos<$m)
    {
        echo "Ha ocurrido un error con el número de boletos que se pueden solicitar, por favor inténtelo de nuevo";        
        
    }

    else
    {
        for($i = 0; $boletos>$i; $i++)
        {
            echo
            '<table border="1">
                <thead>
                    <th colspan="4">Six Flags</th>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$nombre.'</td>
                        <td>'.$apellidos.'</td>
                        <td>'.$edad.'</td>
                        <td rowspan="3">'.$img.'</td>
                    </tr>
                    <tr>
                        <td>'.$direccion.'</td>
                        <td>'.$boletos.'</td>
                        <td>'.$tipo.'</td>
                    </tr>
                    <tr>
                        <td colspan="3">'.$y.'</td>
                    </tr>
                </tbody>
        
            </table>'; 
            echo '<br/>';
        }
    }
?>

