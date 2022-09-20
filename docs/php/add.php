<?php 
  $x=$_REQUEST['x'] ?? "";
  $y=$_REQUEST['y'] ?? "";

  // Server-Side Form Validation
  // Usually some set of regular expressions (RE) describing
  // what kind of data is ok.
  //
  // RE are ways to decribe sets of strings
  //
  // a (some normal letter) is just {"a"} the set containg
  // one string, the string "a".
  //
  // xy (two RE's next to each other).
  // all strings that can be split into two parts (where one
  // or the other part is empty) where the first part matches
  // x and the second part matches y.
  //
  //  cat example is {"cat"}
  //
  // x|y all strings that match x and all strings that match y
  //
  //  c|a|t example is {"c","a","t"}
  //
  //   (cat|dog)(|s) = {"cat","dog","cats","dogs"}
  //
  // x{a,b}=(xxx(a times)|xxxxx(a+1 times)|....|xxxx (b times))
  //
  //   Ex: (a|b){2,3}=((a|b)(a|b)|(a|b)(a|b)(a|b))
  // x?=x{0,1}, x*=x{0,infinity}, x+=x{1,infinity}
  //
  //   (cat|dog)s? = {"cat","dog","cats","dogs"}
  //   (A|B|C|...|Z)+ = HELLO SLEEPY I etc (any upper case word)
  //   [A-Z]+ , [0-9], [a-z] . (any single character)
  //
  //   [0-9]+ decimal number
  //   [0-9]+([.][0-9]+)?
  //
  //   

  $ok = TRUE;
  $ok = $ok && preg_match("/^-?[0-9]+([.][0-9]+)?$/",$x);
  $ok = $ok && preg_match("/^-?[0-9]+([.][0-9]+)?$/",$y);

  if (!$ok) {
    exit("bad form data.");
  }

  if ($x == ((float) $x) && $y == ((float) $y)) {
    $z = ((float)$x) + ((float)$y); 
  }  else {
    $z = "";
  }

  function nohtmlentities($x) {
    return $x;
  }
  
?>
<!DOCTYPE html>
<form action="add.php" method="GET" >
    <input type="text" name="x" placeholder="x" 
       value="<?php echo htmlentities($x) ?>">
    +
    <input type="text" name="y" placeholder="y" 
       value="<?php echo htmlentities($y) ?>"
    >
=
<input type="text" name="z" placeholder="x+y" 
    value="<?php echo htmlentities($z) ?>"
>
<input type="submit" value="?">

</form>