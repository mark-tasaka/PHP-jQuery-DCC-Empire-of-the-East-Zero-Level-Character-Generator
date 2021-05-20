<?php

function getRandomEquipment()
{
    $equipment =  array("backpack",
    "candle",
    "chain (10 feet)",
    "chalk (1 piece)",
    "chest (empty)",
    "crowbar",
    "flask (empty)",
    "flint and steel",
    "grappling hook",
    "small hammer",
    "holy symbol",
    "holy water (1 vial)",
    "iron spike",
    "lantern",
    "mirror (hand size)",
    "oil (1 flask)",
    "10 foot Pole",
    "ration (1 day)",
    "rope (50 feet)",
    "sack (large)",
    "sack (small)",
    "thieves tools",
    "torch (1)",
    "waterskin");

    shuffle($equipment);

    $gear = $equipment[0];

    return $gear;
}


?>