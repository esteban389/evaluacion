<?php

function user_info(){
    return 
    "
        <strong class=\"user-name\">".$_SESSION['user']['nombre']."</strong>
        <p class=\"user-cc\">". $_SESSION['user']['cc']
    ;
}

function mostrar_lista_docentes($row){
    return "<a href=\"evaluacion_docente.php?id=" . $row['id'] . "\">"
    ."<p>"
    . $row['Docente']
    ."</p>"
    ."</a>";
}
?>