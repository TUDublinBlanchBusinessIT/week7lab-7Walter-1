<?php
include ('Team.php');

$name = $_GET['teamName'];

$homeTeam = new Team($name);

$matchResults = [
    ['homeClub' => $_GET['home1'], 'awayClub' => $_GET['away1']],
    ['homeClub' => $_GET['home2'], 'awayClub' => $_GET['away2']],
    ['homeClub' => $_GET['home3'], 'awayClub' => $_GET['away3']]
];

foreach ($matchResults as $result) {
    $homeClub = $result['homeClub'];
    $awayClub = $result['awayClub'];

    $homeTeam->finalScore($homeClub, $awayClub);
}

$goalAverage = $homeTeam->getGoalAverage();
echo "Goal Average for {$name}: {$goalAverage}";
?>