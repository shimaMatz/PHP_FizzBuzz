<? for ($i = 1; $i <= 100; $i++) {
    echo $i % 15 ? ($i % 3 ? ($i % 5 ? $i : "Buzz") : "Fizz") : "FizzBuzz";
    echo ",";
}