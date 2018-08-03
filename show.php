<?php




/**
*
* Here we define 3 different arrays, each one corresponding to how many syllables are in each word contained in the array
* Currently each of these arrays has 20 words in it, there will be many many more, this is just for practice
*
*/
class Haiku {

function __construct()
{
public $oneArray = ['the','it','is','I','you','me','bee','dog','cat', 'beach', 'salt', 'blue', 'red', 'green', 'sky', 'cloud','tree', 'live', 'talk', 'snake');
public $twoArray = ['rainbow', 'pigeon', 'kitten', 'walking', 'swimming', 'breathing', 'flying', 'driving', 'looking', 'loving', 'staring', 'intense', 'water', 'ocean', 'special', 'partake', 'lyric', 'lily', 'baby', 'dolphin'];
public $threeArray = ['misery', 'company', 'compassion','trifecta', 'daffodil', 'liberty', 'direction', 'traveler', 'elephant', 'testament', 'bucaneer', 'rattlesnake', 'php', 'programmer', 'computer', 'internet', 'domestic', 'apartment', 'egregious', 'envigorate'];

// Count the length of each array
public $lengthOne =  count($oneArray) - 1;
public $lengthTwo = count($twoArray) - 1;
public $lengthThree = count($threeArray) -1;
}

public function randArray()
{
	$rand = rand(1,3);
	return $rand;
}
$randomPick = $this->randArray();
	
/**
*
* For all of the pickOne, pickTwo, and pickThree functions, $num represents the number of word that was picked for that particular line.
*
*/
public function pickOne($num)
{
	$random = rand(0,$lengthOne);
	$word = $oneArray[$random];
	return $word;
}

public function pickTwo($num)
{
	$random = rand(0,$lengthTwo);
	$word = $twoArray[$random];
	return $word;
}

public function pickThree($num)
{
	$random = rand(0,$lengthOne);
	$word = $threeArray[$random];
	return $word;
}
// Declaring $wordOne before going to switch function
$wordOne;
switch ($randomPick)
{
	case 1: $this->pickOne(1);
	break;
	case 2: $this->pickTwo(1);
	break;
	case 3: $this->pickThree(1);
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

