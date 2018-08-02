<?php




/**
*
* Here we define 3 different arrays, each one corresponding to how many syllables are in each word contained in the array
* Currently each of these arrays has 20 words in it, there will be many many more, this is just for practice
*
*/

class Haiku {

$oneArray = array('the','it','is','I','you','me','bee','dog','cat', 'beach', 'salt', 'blue', 'red', 'green', 'sky', 'cloud','tree', 'live', 'talk', 'snake');
$twoArray = array('rainbow', 'pigeon', 'kitten', 'walking', 'swimming', 'breathing', 'flying', 'driving', 'looking', 'loving', 'staring', 'intense', 'water', 'ocean', 'special', 'partake', 'lyric', 'lily', 'baby', 'dolphin' );
$threeArray = array('misery', 'company', 'compassion','trifecta', 'daffodil', 'liberty', 'direction', 'traveler', 'elephant', 'testament', 'bucaneer', 'rattlesnake', 'php', 'programmer', 'computer', 'internet', 'domestic', 'apartment', 'egregious', 'envigorate');

// Count the length of each array
$lengthOne =  count($oneArray) - 1;
$lengthTwo = count($twoArray) - 1;
$lengthThree = count($threeArray) -1;

$randArray = rand(1,3);

public function pickOne()
{
	$random = rand(0,$lengthOne);
	$word = $oneArray[$random];
	return $word;
}

public function pickTwo()
{
	$random = rand(0,$lengthTwo);
	$word = $twoArray[$random];
	return $word;
}

public function pickThree()
{
	$random = rand(0,$lengthOne);
	$word = $threeArray[$random];
	return $word;
}
$wordOne;
switch ($randArray)
{
	case 1: $wordOne = $this->pickOne();
	break;
	case 2: $wordOne = $this->pickTwo();
	break;
	case 3: $wordOne = $this->pickThree();
	break;
}





echo "<br>";
echo $wordOne;

/**
*
* First line needs to be 5 syllables
*
*/
}

