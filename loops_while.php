
    <?php

    $num = 1;
    //operadores comparação / lógicos
    echo '-- Início do loop --<br />';
    while ($num < 10) {

        $num++; //critério de parada.
        if ($num == 2 || $num == 6) {
            continue;
        }
        echo "$num <br />";
    }
    echo '-- Fim do loop --';
    ?>


