<?php

$arrayNumber = [
  [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
];

/**
 * @throws Exception
 */
function newSort(array &$data, string $order = SORT_ASC)
{
    switch ($order) {
        case SORT_ASC:
            asort($data);
            break;
        case SORT_DESC:
            arsort($data);
            break;
        default:
            throw new Exception('Unsupported');
    }
}

try {
    newSort($arrayNumber[0], SORT_DESC);
} catch (Exception $e) {
    echo $e;
}

foreach ($arrayNumber[0] as $number) {
    echo $number . '<br>';
}


//

//
//$mysqli = mysqli_connect("example.com", "user", "password", "database");
//
//$mysqli->query("Select * from products where `id` = 10");



$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44'
];

foreach ($arrayInfo as $key => $info) {
    echo $key . ': ' . $info . '<br>';
}

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь',
    ]
];

$arrayMonth = array_reduce($arrayMonth, 'array_merge', []);

foreach ($arrayMonth as $month) {
    echo $month . '<br>';
}

//

$json = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';

$array = json_decode($json, true);

//echo 'years: ' . implode(', ', $array['years']);

foreach ($array['years'] as $year) {
    echo $year . '<br>';
}

//


//$conn = mysqli_connect("example.com", "user", "password", "database");
//
//$sql = "Select * from users";
//
//$query = mysqli_query($conn, $sql);



/*
 * 1) Будет ли выполнен запрос: Да
 * 2) Что сделать запрос: выведет всех пользователей
 * 3) Написать запрос для удаления данных, где id пользователей равен одному из данных цифр = 1,2,3,4,5
 * $q = "Delete from users where `id` IN (1,2,3,4,5)";
 * */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/" method="post">
            <div>
                <input type="text" name="text" id="text">

                <button type="submit">Отправить</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (! empty($_POST['text'])) {
    $txt = __DIR__ . '\file.txt';

    file_put_contents($txt, $_POST['text']);
}
?>
