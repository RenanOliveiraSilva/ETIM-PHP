<?php
    //preg_match retorna sempre 1 se encontrar
    $str = 'Etec Pedro Badran - Ensino Técnico de Qualidade';
    $padrao = '/Etec/i';

    echo preg_match($padrao, $str);
    echo '<hr>';
    
    //preg_match_all retorna a quantidade encontrada
    $str1 = 'A escola é para aprender, que cola não sai da escola';
    $padrao1 = '/cola/i';

    echo preg_match_all($padrao1, $str1);
    echo '<hr>';

    //preg_replace muda para o valor digitado, todos encontrados
    $str2 = 'Vá a Microsoft, antes que a Microsoft acabe';
    $padrao2 = '/microsoft/i';

    echo preg_replace($padrao2, 'Apple', $str2);
    echo '<hr>';
    
?>