<?php


require_once("./vendor/autoload.php");

echo "index".PHP_EOL;

// echo com\advanceCal\utils\Calculator::sumOfSeries(1,2,3,4).PHP_EOL;

// echo app\commons\utils\Calculator::sum(4, 5).PHP_EOL;

$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name().PHP_EOL;
// 'Vince Sporer'
echo $faker->email().PHP_EOL;
// 'walter.sophia@hotmail.com'
echo $faker->text().PHP_EOL;
// 'Numquam ut mollitia at consequuntur inventore dolorem.'