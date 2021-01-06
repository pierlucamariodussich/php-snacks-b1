<H1>PHP SNACK 4</H1>

<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->


<?php 
  $nItems = 15;
  $numArray = [];

  while (count($numArray) < $nItems) {

      $number = rand(1, 100);
      if (!in_array($number, $numArray)) {

          $numArray[] = $number;

      }

  }

?>

<h2> I 15 numeri casuali sono:</h2>
<ul>
<?php
    foreach ($numArray as $num) {
    ?>
    <li>
        <h3> <?php echo $num ?></h3>
    </li>
    <?php
    }
?>
</ul>