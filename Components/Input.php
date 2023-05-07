<?php
function text_input_1(string $label, string $placeholder, string $id, bool $required=false,string $type="text")
{
 ob_start();
 ?>
    <div class="text_input_1">
        <label>
            <?php echo $label ?>
        </label>
        <input type=<?php echo $type ?>  placeholder=
            <?php 
                echo "\"". $placeholder ."\" "; 
                if($required) echo "required ";
                echo "id=".$id;
                echo " name=\"$id\""
            ?>
        autocomplete="off">
    </div>
<?php
 return ob_get_clean();
}
?>