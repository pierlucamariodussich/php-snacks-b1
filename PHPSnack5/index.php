<h1> PHP JSNACK 5</h1>

<!-- Prendere un paragrafo abbastanza lungo, contenente 
diverse frasi.
Prendere il paragrafo e suddividerlo 
in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo. -->

<?php

$wikipedia = "Wikipedia è un'enciclopedia online a 
contenuto libero, collaborativa, multilingue e gratuita,
nata nel 2001, sostenuta e ospitata dalla Wikimedia
Foundation, un'organizzazione non a scopo di lucro 
statunitense. Lanciata da Jimmy Wales e Larry Sanger 
il 15 gennaio 2001, inizialmente nell'edizione in lingua 
inglese, nei mesi successivi ha aggiunto edizioni in 
numerose altre lingue. Sanger ne suggerì il nome,
una parola macedonia nata dall'unione della radice wiki 
al suffisso pedia (da enciclopedia). Etimologicamente, 
Wikipedia significa 'cultura veloce', dal termine 
hawaiano wiki (veloce), con l'aggiunta del suffisso -pedia 
(dal greco antico παιδεία, paideia, formazione). 
Con più di 55 milioni di voci in oltre 300 lingue,
è l'enciclopedia più grande mai scritta,
è tra i dieci siti web più visitati al mondo
e costituisce la maggiore e più consultata opera di 
riferimento generalista su Internet.";

$paragraph = explode(".", $wikipedia);

foreach($paragraph as $content){
?>
  <p> <?php echo $content ?></p>
<?php
};
?>