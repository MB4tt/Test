<?php
// for ($a = 1; $a <= 100; $a++) {
//   $result = $a % 3 == 0 && $a % 5 == 0 ? "FizzBuzz" : $a .
//             $a % 3 == 0 ? "Fizz" : $a .
//             $a % 5 == 0 ? "Buzz" : $a;
//   echo $result;
// }
for ($a = 1; $a <= 100; $a++) {
  if ($a % 3 == 0 && $a % 5 == 0) {
    echo "FizzBuzz";
}elseif ($a % 5 == 0) {
    echo "Buzz";
}elseif ($a % 3 == 0) {
  echo "Fizz";
  }else {
    echo "$a";
  }
}
?>


