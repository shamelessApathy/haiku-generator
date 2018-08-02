<?php

echo "this is the show.php page";


/**
*
* Here we define 3 different arrays, each one corresponding to how many syllables are in each word contained in the array
* Currently each of these arrays has 20 words in it, there will be many many more, this is just for practice
*
*/

$oneArray = array('the','it','is','I','you','me','bee','dog','cat', 'beach', 'salt', 'blue', 'red', 'green', 'sky', 'cloud','tree', 'live', 'talk', 'snake');
$twoArray = array('rainbow', 'pigeon', 'kitten', 'walking', 'swimming', 'breathing', 'flying', 'driving', 'looking', 'loving', 'staring', 'intense', 'water', 'ocean', 'special', 'partake', 'lyric', 'lily', 'baby', 'dolphin' );
$threeArray = array('misery', 'company', 'compassion','trifecta', 'daffodil', 'liberty', 'direction', 'traveler', 'elephant', 'testament', 'bucaneer', 'rattlesnake', 'php', 'programmer', 'computer', 'internet', 'domestic', 'apartment', 'egregious', 'envigorate');


$length =  count($threeArray);
echo $length;

/**
*
* First line needs to be 5 syllables
*
*/

