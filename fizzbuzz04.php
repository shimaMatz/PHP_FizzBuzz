<?php
function gen_one_to_three() {
    for ($i=1;$i <= 100; $i++) {
         ($i%15==0 ? yield "FizzBuzz": ($i%5==0 ? yield "Fizz":$i%3==0 ? yield "Buzz":yield $i));
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}

?>
