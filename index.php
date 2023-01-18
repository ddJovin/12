<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];


$fullname = $example_persons_array[rand(0, 10)]['fullname'];
function getPartsFromFullname($fullname)
{
    $array = explode(' ', $fullname);
    return ['surname' => $array['0'], 'name' => $array['1'], 'patronomys' => $array['2']];
};


$surname = $array['0'];
$name = $array['1'];
$patronomys = $array['2'];
function getFullnameFromParts($surname, $name, $patronomys)
{
    return $surname . ' ' . $name . ' ' . $patronomys;
};


function getShortName($fullname)
{
    $array = getPartsFromFullname($fullname);
    return $array['name'] . ' ' . mb_substr($array['surname'], 0, 1) . '.';
};


function getGenderFromName($fullname)
{
    $array = getPartsFromFullname($fullname);
    $forGender = 0;
    $na = $array['2'][-2];
    $a = $array['1'][-1];
    $wa = $array['0'][-2];
    $w = $array['0'][-1];
    if ($na == 'на') {
        $forGender = -1;
    } elseif ($na == 'ич') {
        $forGender = +1;
    } else {
        $forGender = 0;
    };
    if ($a == 'а') {
        $forGender = -1;
    } elseif ($a == 'й' || 'н') {
        $forGender = +1;
    } else {
        $forGender = 0;
    };
    if ($wa == 'ва') {
        $forGender = -1;
    } elseif ($w == 'в') {
        $forGender = +1;
    } else {
        $forGender = 0;
    };
    0 <=> $forGender;
    if ($forGender > 0) {
        $gender = 'мужчина';
    } elseif ($forGender < 0) {
        $gender = 'женщина';
    } else {
        $gender = 'пол неопределён';
    };
};

