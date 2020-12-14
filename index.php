<?php
 $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$bad_word = $_GET['bad_word'];
// Sostituisco le ricorrenze nel paragrafo con la badword passata in GET (query string).
$bad_word_replace = str_replace($bad_word, "* * *", $paragraph);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censuratore</title>
    </head>
    <body>

        <div class="original-par">
            <h1>Original paragraph : length  <?php echo strlen($paragraph) . " " . "caratteri" // lunghezza della stringa  ?> </h1>
            <p>
                <?php echo $paragraph //stampa del paragrafo in pagina?>
            </p>
        </div>

        <div class="modify-par">
            <h1>Modify paragraph</h1>
            <p>
                <?php echo $bad_word_replace //stampa del paragrafo modificato?>
            </p>
        </div>

        <!-- riscontro della lunghezza del paragrafo tramite la stampa in pagina attraverso var_dump  -->
        <!-- <div class="info-modify-par">
            <h1>Info modify paragraph</h1>
            <p>
                <?php var_dump ($bad_word_replace) //stampa delle info paragrafo modificato?>
            </p>
        </div> -->

    </body>
</html>
