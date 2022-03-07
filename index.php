<?php
    $a = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
    
    echo "Original Array : <br />";
    print_r($a);

    $a = array_flip($a);

    $a = array_flip($a);

    $a= array_values($a);

    echo "<br /> Updated Array : <br /> ";
    print_r($a);