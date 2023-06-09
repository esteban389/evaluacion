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
                    <a href=\"". $link . "\">"
                        . $row['Modulo'] .
                    "</a>
                </td>
    </tr>";
}

function mostrar_preguntas($row){
    return 
        "<div>
            <p>".
                $row['descripcion']
            ."</p>
            <select name=\"pregunta".$row['id']."\" id=\"".$row['id']."\">
                <option value=\"1\">1</option>
                <option value=\"2\">2</option>
                <option value=\"3\">3</option>
                <option value=\"4\">4</option>
                <option value=\"5\">5</option>
            </select>
        </div>";
}

function mostrar_avg($pregunta,$avg){
    return "<div>
                <h3> Pregunta "
                    . $pregunta.
                "</h3>
                <h3>"
                    . "x".   
                "</h3>
            </div>";
}
?>