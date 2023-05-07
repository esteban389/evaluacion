<?php
function text_input_1(string $label, string $placeholder = "", string $id, bool $required=false)
{
 ob_start();
 ?>
    <div class="text_input_1">
        <label>
            <?php echo $label ?>
        </label>
        <input type="text"  placeholder=
            <?php 
                echo "\"". $placeholder ."\" "; 
                if($required) echo "required ";
                echo "id=".$id;
                echo " name=\"$id\""
            ?>
        >
    </div>
<?php
 return ob_get_clean();
}
?>