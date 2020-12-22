<?php

      // Paragraph
      $paragraph="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

      // Word (or letter) requested as $_GET to search in the paragraph
      $word = $_GET["parola"];

      // function that replace the requested word with "***"
      $modParagraph = str_replace($word, "***", $paragraph);

      //DEBUg
      //var_dump($word)
?>

<h5>Hai richiesto la censura della parola (o lettera): '<?php echo $word; ?>' all'interno del seguente paragrafo:</h5>

<p> <?php echo $paragraph; ?></p>

<h5>Il risultato è: </h5>

<?php

      if($paragraph===$modParagraph){
        echo "<h5>ATTENZIONE! La parola(o lettera) che hai cercato non è stata trovata! </h5>";
      }

      else{
        echo "<p> $modParagraph </p> ";
      }

?>
