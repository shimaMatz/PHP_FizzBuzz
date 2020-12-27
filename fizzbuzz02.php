<? while ($i++<100) {
    echo $i%15?($i%3?($i%5?$i:"Buzz"):"Fizz"):"FizzBuzz","\n";
}