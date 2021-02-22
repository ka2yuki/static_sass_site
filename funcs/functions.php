<?php
function even_odd_return_str(int $n): string { 
    if($n % 2 == 0){
      return "even";
    }else{
      return "odd";
    }
}
function even_odd(int $n): string { 
    if($n % 2 == 0){
      return "even";
    }else{
      return "odd";
    }
}
function odd(int $n): bool { 
    if($n % 2 == 0){
      return false;
    }else{
      return true;
    }
}

/**
 * @return 奇数の際、左,
 * @return 偶数の際、右,
 * */ 
function odd_is_left_sankaku(int $n): string { 
  return (odd($n) ? "left" : "right");
}
/**
 * 奇数 か 判断し、 Class Name を返す。 
 * 参考演算 ex.
 * echo (odd($i) ? 'odd' : 'even')
 */ 
?>