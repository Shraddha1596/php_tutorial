<?php 

   $string1="string functions";
   $arr=array('1','2','3','4','5');

   echo"$string1<br><br>";

   echo "Length of string: ", strlen($string1);
   echo "<br><br>";
   echo "Total words in string: ", str_word_count($string1);
   echo "<br><br>";
   echo "Reversed string is: ", strrev($string1);
   echo "<br><br>";
   echo "Position of 'g' in '$string1' is:", strpos( $string1, "g");
   echo "<br><br>";
   echo "Replacing  'g' in '$string1' with 'G' : ", str_replace( "g", "G", $string1);
   echo "<br><br>";
   echo "Add slash before the specifies character: ", addcslashes( $string1, "i");
   echo "<br><br>";
   echo addslashes("hello wo'rl'd");
   echo "<br><br>";
   echo "use of explode function: "; print_r( explode(" ", $string1));
   echo "<br><br>";
   echo "use of implode function: "; print_r( implode("", $arr));


?>