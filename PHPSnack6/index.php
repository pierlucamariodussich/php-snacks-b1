<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSNACK 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- Utilizzare questo array.
      Stampiamo il nostro array mettendo gli 
      insegnanti in un rettangolo grigio
      e i PM in un rettangolo verde. -->
      <h1>PHP JSNACK 6</h1>
      <?php
       
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
       
       $teacher = "class='teacher'";
       $pm = "class='pm'";
       
       foreach ($db as $type => $elPerson) {
        if ($type == "teachers"){
            $style = $teacher;
        } else {
            $style = $pm;
        }
        foreach ($elPerson as $person ) {
            echo "<div " . $style . ">";
            foreach ($person as $key => $element){
                echo $key . ": " . $element . "<br>";
            }
            echo "</div>";
        }
    }
      ?>
      
</body>
</html>




