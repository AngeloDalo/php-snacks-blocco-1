<?php 
/**
 * Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde
 */
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/snack6.css">
    <title>Document</title>
</head>
<body>
    <div class="grey">
        <?php foreach ($db as $key => $post) {
            if ($key == "teachers") {
                echo $key;
                foreach ($post as $value) {
                echo '<p>' . $value["name"] .  "-" . $value["lastname"];
                }
            }
        }?>
    </div>
    <div class="green">
    <?php foreach ($db as $key => $post) {
            if ($key == "pm") {
                echo $key;
                foreach ($post as $value) {
                echo '<p>' . $value["name"] .  "-" . $value["lastname"];
                }
            }
        }?>
    </div>
</body>
</html>
