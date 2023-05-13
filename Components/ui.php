<?php

function user_info(){
    return 
    "
        <strong class=\"user-name\">".$_SESSION['user']['nombre']."</strong>
    "
    ;
}

function mostrar_lista_docentes($row){
    if($row['Estado']==1) $estado="class=\"desactivado\">";
    else $estado ="";
    return "
    <tr ". $estado.
                "<td>
                    <a href=\"evaluacion_docente.php?docente_id=\"". $row['id'] . "\">"
                        . $row['Docente'] .
                    "</a>
                </td>
                <td>
                    <a href=\"evaluacion_docente.php?docente_id=\"". $row['id'] . "\">"
                        . $row['Modulo'] .
                    "</a>
                </td>
    </tr>";
}

?>