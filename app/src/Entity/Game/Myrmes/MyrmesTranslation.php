<?php

namespace App\Entity\Game\Myrmes;

interface MyrmesTranslation
{
    // ERROR MESSAGES
    const string ERROR_CANNOT_PLACE_TILE = "Can't place this tile";

    // NOTIFICATION MESSAGES

    // LOG MESSAGES
    const string NOT_ABLE = " mais n'a pas pu";
    const string GAME_STRING = "La partie ";


    // RESPONSE MESSAGES
    const string RESPONSE_ERROR_CALCULATING_MAIN_BOARD = "Error while calculating main board tiles disposition";
    const string RESPONSE_INVALID_TILE = "Invalid tile";
    const string RESPONSE_INVALID_TILE_TYPE = "Invalid tile type";
}
