
<?php
function lower_with_space($value){
     return strtolower(preg_replace('/\s+/', '_', $value));
    }
    ?>