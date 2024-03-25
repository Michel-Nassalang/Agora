<?php

namespace App\Entity\Game\Myrmes;

class MyrmesParameters
{
    // GAME

    // MIN AND MAX NUMBER OF PLAYER

    public static int $MAX_NUMBER_OF_PLAYER = 4;
    public static int $MIN_NUMBER_OF_PLAYER = 2;



    // Area's for nurses
    public static int $BASE_AREA = 0;
    public static int $LARVAE_AREA = 1;
    public static int $SOLDIERS_AREA = 2;
    public static int $WORKER_AREA = 3;
    public static int $WORKSHOP_GOAL_AREA = 4;
    public static int $WORKSHOP_ANTHILL_HOLE_AREA = 5;
    public static int $WORKSHOP_LEVEL_AREA = 6;
    public static int $WORKSHOP_NURSE_AREA = 7;
    public static int $AREA_COUNT = 8;



    //Nurses parameters
    public static int $START_NURSES_COUNT_PER_PLAYER = 3;
    public static int $MAX_NURSES_COUNT_PER_PLAYER = 8;



    // Win by area's nurses
    public static array $WIN_LARVAE_BY_NURSES_COUNT = array(0, 1, 3, 5);
    public static array $WIN_SOLDIERS_BY_NURSES_COUNT = array(0, 0, 1, 1);
    public static array $WIN_WORKERS_BY_NURSES_COUNT = array(0, 0, 1, 0, 2);



    // Years
    public static int $FIRST_YEAR_NUM = 1;
    public static int $SECOND_YEAR_NUM = 2;
    public static int $THIRD_YEAR_NUM = 3;



    // Seasons
    public static string $SPRING_SEASON_NAME = "spring";
    public static string $SUMMER_SEASON_NAME = "summer";
    public static string $WINTER_SEASON_NAME = "winter";
    public static string $FALL_SEASON_NAME = "fall";
    public static string $INVALID_SEASON_NAME = "invalid";


    //TILE TYPES
    public static string $WATER_TILE_TYPE = "water";
    public static string $DIRT_TILE_TYPE = "dirt";
    public static string $MUSHROOM_TILE_TYPE = "mushroom";
    public static string $STONE_TILE_TYPE = "stone";
    public static string $GRASS_TILE_TYPE = "grass";

    // Pheromone Level

    public static int $PHEROMONE_LEVEL_ZERO = 0;
    public static int $PHEROMONE_LEVEL_TWO = 2;
    public static int $PHEROMONE_LEVEL_FOUR = 4;
    public static int $PHEROMONE_LEVEL_SIX = 6;
    public static int $PHEROMONE_LEVEL_EIGHT = 8;

    // Pheromone Type

    public static int $PHEROMONE_TYPE_ZERO = 0;
    public static int $PHEROMONE_TYPE_ONE = 1;
    public static int $PHEROMONE_TYPE_TWO = 2;
    public static int $PHEROMONE_TYPE_THREE = 3;
    public static int $PHEROMONE_TYPE_FOUR = 4;
    public static int $PHEROMONE_TYPE_FIVE = 5;
    public static int $PHEROMONE_TYPE_SIX = 6;
    public static int $PHEROMONE_TYPE_SEVEN = 7;

    // Pheromone Amount

    public static array $PHEROMONE_TYPE_AMOUNT = [6, 2, 2, 2, 2, 2, 1];

    // Pheromone Type Level

    public static array $PHEROMONE_TYPE_LEVEL = [
        0 => 0,
        1 => 2,
        2 => 2,
        3 => 4,
        4 => 4,
        5 => 6,
        6 => 8
    ];

    //Prey Types
    public static string $LADYBUG_TYPE = "ladybug";
    public static string $TERMITE_TYPE = "termite";
    public static string $SPIDER_TYPE = "spider";



    //Prey Numbers
    public static int $LADYBUG_NUMBER = 6;
    public static int $TERMITE_NUMBER = 6;
    public static int $SPIDER_NUMBER = 6;



    //Prey Position
    public static array $PREY_POSITIONS = [[1, 6], [1, 18], [4, 9], [4, 15], [5, 12], [6, 9], [6, 15], [7, 0], [7, 6],
        [7, 18], [7, 24], [8, 9], [8, 15], [9, 12], [10, 9], [10, 15], [13, 6], [13, 18]];



    //Player start data
    public static int $NUMBER_OF_WORKER_AT_START = 2;
    public static int $NUMBER_OF_LARVAE_AT_START = 1;
    public static int $ANTHILL_START_LEVEL = 0;
    public static int $PLAYER_START_SCORE = 10;



    //Anthill hole start position
    public static array $ANTHILL_HOLE_POSITION_BY_NUMBER_OF_PLAYER = [
        2 => [[11, 6], [11, 18]],
        3 => [[5, 4], [4, 19], [12, 13]],
        4 => [[3, 6], [3, 18], [11, 6], [11, 18]]
    ];



    //Excluded tile with 2 players
    public static array $EXCLUDED_TILES_2_PLAYERS = [
        [7, 0], [8, 1], [9, 0], [9, 2], [10, 1], [10, 3], [11, 2], [11, 4], [12, 3], [12, 5], [13, 6],
        [7, 24], [8, 23], [9, 24], [9, 22], [10, 23], [10, 21], [11, 22], [11, 20], [12, 21], [12, 19], [13, 18]
    ];

}