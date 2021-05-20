<?php

function getAlignment ($option)
{
    $alignment = "";
    
    if($option == 1)
    {
        $alignChoice = array(
            "Lawful",
            "Neutral",
            "Chaotic"
        );
        
        $selectAlign = rand (0, 2);
        
        $alignment = $alignChoice[$selectAlign];
    }
    else if($option == 2)
    {
        $alignment = "Lawful";
    }
    else if($option == 3)
    {
        $alignment = "Neutral";
    }
    else if($option == 4)
    {
        $alignment = "Chaotic";
    }
    else if($option == 5)
    {
        $alignChoice = array(
            "The Clan of Cog",
            "The Curators",
            "The Atomic Equinox",
            "The Holy Med Order"
        );
        
        $selectAlign = rand (0, 3);
        
        $alignment = $alignChoice[$selectAlign];
    }
    else
    {
        $alignment = "";
    }
    
    return $alignment;
}

?>
