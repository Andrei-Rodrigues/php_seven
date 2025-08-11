<div class="titulo">Recursão</div>

<?php

/*
$array  = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
>1
>2
>>3
>>4
>>5
>6
>>7
>>>8
>>>9
>10
*/

$array  = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $item){
        if(is_array($item)) {
            imprimirArray($item, $nivel . $nivel[0]);
        }else {
            echo "$nivel $item <br>";
        }
    }
}

imprimirArray($array);