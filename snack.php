<!-- SNACK 1 -->
<!--
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z 
-->
<?php

// $posts = [

//     '10/01/2019' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];

?>

<!-- <ul>
    <?php foreach($posts as $data => $post ) { ?>
    <h2><?php echo $data ?></h2>
    <ul>
        <?php foreach($post  as $singlePost) { ?>
        <li><?php echo $singlePost['title'] . " " . $singlePost['author'] . " "  . $singlePost['text']?></li>
        <?php } ?>
    </ul>
    <?php }?>
</ul> -->


<!-- SNACK 2 -->
<!--
Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
-->


    <!-- // $numeriCasuali = [];

    // while (count($numeriCasuali) < 15) {
    //     $numeroRandom = rand(0, 100);

    //     if (!in_array($numeroRandom, $numeriCasuali)){
    //         $numeriCasuali[] = $numeroRandom;
    //     }
    // };

    // var_dump($numeriCasuali); -->


<!-- SNACK 3 -->
<!-- 
Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->

<!-- <?php 
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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="verde">
    <ul>
        <?php foreach($db['teachers'] as $insegnante) {?>
            <li><?php echo $insegnante['name'] . " " . $insegnante['name']?></li>
        <?php }?>
    </ul>
    </div>

    <div class="grigio">
    <ul>
        <?php foreach($db['pm'] as $playmaker) {?>
            <li><?php echo $playmaker['name'] . " " . $playmaker['name']?></li>
        <?php }?>
    </ul>
    </div>
</body>
</html> -->


<!-- SNACK 4 -->
<!--
Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. 
-->

<!-- <?php 
    $classe41 = [
        [
            'nome' => 'Gabriele',
            'cognome' => 'Corti',
            'voti' => [1,2,3,4,5,]

        ],
        [
            'nome' => 'Luca',
            'cognome' => 'Nero',
            'voti' => [2,5,6,3,8]

        ],
        [
            'nome' => 'Marco',
            'cognome' => 'Rossi',
            'voti' => [8,8,9,7,6]
            

        ],
        [
            'nome' => 'Lucia',
            'cognome' => 'Verdi',
            'voti' => [9,4,5,7,2]

        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach ($classe41 as $alunno) { ?>
            <li><?php echo $alunno['nome'] . " " . $alunno['cognome'] . " " . array_sum($alunno['voti']) / count($alunno['voti'])?></li>
        <?php }?>
    </ul>

</body>
</html> -->


<!-- SNACK 5 -->
<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<!-- <?php 
    $testo = "Il governo mantiene la barra dritta sull'obbligo, da domani, del Green pass sui luoghi di lavoro. 'Abbiamo chiesto di rinviare l'applicazione del Green pass almeno fino alla fine di ottobre, ma la risposta è stata negativa. Il governo ritiene che sia uno strumento indispensabile', ha detto il segretario generale della Uil, Pierpaolo Bombardieri, intervenendo a 'Un giorno da pecora' su Rai Radio 1, riferendosi all'incontro di questa mattina a Palazzo Chigi con il premier Mario Draghi e rimarcando la posizione dei sindacati sulla gratuità dei tamponi. Su questo, il governo, ha ribadito Bombardieri, si è detto disponibile a 'ragionare sul fatto che abbiano un prezzo calmierato. Verificheranno nelle prossime ore'. - See more at: http://www.rainews.it/dl/rainews/articoli/Green-pass-porti-a-rischio-blocco-Draghi-convoca-i-sindacati-4bafb72a-3d31-4002-87dd-e5252773780d.html";

    $paragrafi = explode('.', $testo);
?>

<ul>
    <?php foreach($paragrafi as $paragrafoSingolo) {?>
        <li>
            <?php 
            if(!empty ($paragrafoSingolo)){
                echo $paragrafoSingolo;
            }
            ?>
        </li>
    <?php }?>
</ul> -->