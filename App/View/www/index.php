<?php
    echo date('Y-m-d');
    foreach ($this->produtoS() as $key => $value) {
        var_dump($value);
    }
?>