<?php

function user_info(){
    return 
    "
        <strong class=\"user-name\">".$_SESSION['user']['nombre']."</strong>
    "
    ;
}

function mostrar_lista_docentes($row){
    $estado = "";
    $link = " evaluacion_docente.php?docente_id=".$row['id'];
    if($row['Estado']==1){
        $estado="desactivado";
        $link = "#";
    }
    return "
    <tr class=\"". $estado."\">
                <td>
                    <a href=\"" . $link . "\">"
                        . $row['Docente'] .
                    "</a>
                </td>
                <td>
                    <a href=\"evaluacion_docente.php?docente_id=". $link . "\">"
                        . $row['Modulo'] .
                    "</a>
                </td>
    </tr>";
}

?>