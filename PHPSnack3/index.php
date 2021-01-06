<h1>PHP SNACK 3</h1>

<!-- Creare un array di array. Ogni array figlio 
avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'chicco',
            'text' => 'Bella Fra'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Ciro',
            'text' => 'Bella Ki'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Francesco',
            'text' => 'Bella me'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Sergio',
            'text' => 'Bella ci'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Marco',
            'text' => 'Bella li'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Romina',
            'text' => 'Bella me'
        ]
    ],
];

foreach ($posts as $date => $elDate) {
    ?> 
    <h3> <b> In data : <?php echo $date ;  ?> </b></h3>
    <?php 
    foreach ($elDate as $post ) {
        foreach ($post as $key => $element){
            ?> 
            <h4>
                <b>
                <?php echo $key ;  ?>  :
                </b>
                <?php echo $element ;  ?>
            </h4> 
            <?php
        };   
    };
};
?>



