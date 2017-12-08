<?php
  $bg = array('cold.png', 'cold1.png', 'cold2.png', 'cold3.png', 'cold4.png', 'cold5.png', 'cold6.png', 'cold7.png', 'warm.png', 'warm1.png', 'warm2.png', 'warm3.png', 'warm4.png', 'warm5.png', 'warm6.png', 'warm7.png', 'hot.png', 'hot1.png', 'hot2.png', 'hot3.png', 'hot4.png', 'hot5.png', 'hot6.png', 'hot7.png'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
