<?php

function user_info(){
    return 
    "
        <strong class=\"user-name\">".$_SESSION['user']['nombre']."</strong>
    "
    ;
}

function mostrar_lista_docentes($row){
    return "<a " if($row['id']!=5) echo "class=\"desactivado\"";
    ."href=\"evaluacion_docente.php?docente_id=" . $row['id'] . "\">"
    ."<p>"
    . $row['Docente']
    ."</p>"
    ."<p>"
    . $row['Modulo']
    ."</p>"
    ."</a>";
}

?>