<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Carlo', 'surname' => 'Genio', 'gender' => 'M'],
  ['name' => 'Giovanni', 'surname' => 'Torla', 'gender' => 'M'],
  ['name' => 'Giada', 'surname' => 'Forgi', 'gender' => 'F'],
  ['name' => 'Federica', 'surname' => 'Lago', 'gender' => 'F'],
  ['name' => 'Gilberto', 'surname' => 'Delfino', 'gender' => 'NB'],
  ['name' => 'Roberta', 'surname' => 'Tiglio', 'gender' => 'F'],
];

foreach ($users as $user){

    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig." . ' ' . $user['name'] . ' ' . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F'){
        echo "Buongiorno Sig.ra" . ' ' . $user['name'] . ' ' . $user['surname'] . "\n";
    }else{
        echo "Buongiorno" . ' ' . $user['name'] . ' ' . $user['surname'] . "\n";
    };


};

