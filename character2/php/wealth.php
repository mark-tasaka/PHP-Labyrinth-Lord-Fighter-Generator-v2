<?php

function getSilver($input)
{
    $silver = 0;

    if($input == 2)
    {
        $silver += rand(1,10);
        $silver += rand(1,10);
        $silver += rand(1,10);
    }

    if($input == 3)
    {
        $silver += rand(1,10);
        $silver += rand(1,10);
    }

    return $silver;

}


function getElectrum($input)
{
    $electrum = 0;

    if($input == 2)
    {
        $electrum += rand(1,10);
        $electrum += rand(1,10);
        $electrum += rand(1,10);
    }

    if($input == 3 || $input == 4)
    {
        $electrum += rand(1,10);
        $electrum += rand(1,10);
    }

    return $electrum;

}


function getGold($input)
{
    $gold = 0;

    if($input == 2)
    {
        $gold += rand(1,10);
        $gold += rand(1,10);
        $gold += rand(1,10);
    }

    if($input == 3 || $input == 4 || $input == 5)
    {
        $gold += rand(1,10);
        $gold += rand(1,10);
        $gold += rand(1,10);
        $gold += rand(1,10);
        $gold += rand(1,10);
        $gold += rand(1,10);
    }


    return $gold;

}



function getPlatnum($input)
{
    $platnum = 0;

    if($input == 4)
    {
        $platnum += rand(1,10);
        $platnum += rand(1,10);
    }

    if($input == 5)
    {
        $platnum += rand(1,10);
        $platnum += rand(1,10);
        $platnum += rand(1,10);
        $platnum += rand(1,10);
        $platnum += rand(1,10);
        $platnum += rand(1,10);
    }


    return $platnum;

}



function getWealth($input, $arrayInput)
{
    if($input == 1)
    {
        return '';
    }
    else if($input == 2)
    {
        return $arrayInput[0] . ' sp, ' .  $arrayInput[1] . ' ep, & ' .  $arrayInput[2] . ' gp';
    }
    else if($input == 3)
    {
        return $arrayInput[0] . ' sp, ' .  $arrayInput[1] . ' ep, & ' .  $arrayInput[2] . ' gp';
    }
    else if($input == 4)
    {
        return $arrayInput[1] . ' ep, ' .  $arrayInput[2] . ' gp, & ' .  $arrayInput[3] . ' pp';
    }
    else
    {
        return $arrayInput[2] . ' gp, & ' .  $arrayInput[3] . ' pp';

    }

}


?>