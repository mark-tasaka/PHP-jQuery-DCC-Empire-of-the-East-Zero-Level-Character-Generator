<?php

function getStartingWealth()
{
    $copper = 0;

    for($i = 0; $i < 5; ++$i)
    {
        $coins = rand(1, 12);

        $copper += $coins;
    }

    return $copper;
}


?>