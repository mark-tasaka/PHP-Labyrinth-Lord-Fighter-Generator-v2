<?php

/*Warrior - Bushi*/

    function getArmour($input)
    {
        $a00 = array("", 0, 0, 0, "d4");
        $a01 = array("Kusari katabira", 2, -1, 0, "d6");
        $a02 = array("Karuta tatami", 3, -2, 0, "d8");
        $a03 = array("Okashi gusoku", 4, -4, 0, "d12");
        $a04 = array("Kusari tatami", 5, -5, 5, "d12");
        $a05 = array("O-yoroi", 7, -7, 10, "d16");
        $a06 = array("O-yoroi (master crafted)", 8, -8, 10, "d16");

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06);
        
        return $array1[$input];
        
    }



?>