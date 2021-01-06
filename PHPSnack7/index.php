<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<h1>PHP JSNACK 7</h1>
<?php 
   $classroom = [
       
       [ 
         "name" => "Gianni",
         "surname" => "Carpaccio",
         "votes" => [ 25,21,30,29,29,25,27,26 ],
       ],
       [ 
         "name" => "Federico",
         "surname" => "Castagna",
         "votes" => [ 24,24,30,30,29,24,28,28 ],
       ],
       [ 
         "name" => "Maria",
         "surname" => "Lavazza",
         "votes" => [ 28,21,30,29,29,25,27,26 ],
        ],
       [ 
         "name" => "Serena",
         "surname" => "Fiasconi",
         "votes" => [ 25, 27, 30,30,30,28,30,30 ],
        ],
       [ 
         "name" => "Giovanna",
         "surname" => "Cucciari",
         "votes" => [ 30,29,30,30,30,29,29,29],
        ],
       [ 
         "name" => "Franco",
         "surname" => "Rossi",
         "votes" => [ 18,22,25,27,25,18,21,23],
        ],

   ];

   foreach ($classroom as $student) {
    echo "<div>";
    foreach ($student as $key => $value) {
        if($key == "votes"){
            
            $average = array_sum($value)/count($value);
            echo "<h3>Media: " . number_format((float)$average, 2, '.', '') . "</h3>";
        
        } elseif ($key == "name"){
            echo "<h1>" . $value . " ";
        } else{
            echo $value . "</h1>";
        }
    }
    echo "</div>";
};



?>