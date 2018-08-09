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
$oneArray = ['the','it','is','I','you','me','bee','dog','cat', 'beach', 'salt', 'blue', 'red', 'green', 'sky', 'cloud','tree', 'live', 'talk', 'snake'];
$twoArray = ['rainbow', 'pigeon', 'kitten', 'walking', 'swimming', 'breathing', 'flying', 'driving', 'looking', 'loving', 'staring', 'intense', 'water', 'ocean', 'special', 'partake', 'lyric', 'lily', 'baby', 'dolphin'];
$threeArray = ['misery', 'company', 'compassion','trifecta', 'daffodil', 'liberty', 'direction', 'traveler', 'elephant', 'testament', 'bucaneer', 'rattlesnake', 'php', 'programmer', 'computer', 'internet', 'domestic', 'apartment', 'egregious', 'envigorate'];

// Count the length of each array
$lengthOne =  count($oneArray) - 1;
$lengthTwo = count($twoArray) - 1;
$lengthThree = count($threeArray) -1;

// Declaring $lines before going to switch function, 3 lines, 5-7-5
$lineOne =  [];
$lineTwo = [];
$lineThree = [];
}


// Assigning static var for random number from the randArray() function
// Might not need this
//$randomPick = $this->randArray();
	
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
// Simple function to pick a random number between 1 and 3, then it's passed to the switch function
public function randArray()
{
	$rand = rand(1,3);
	return $rand;
}
// Switch function that based on the randArray() function picks a random word from that particular array
public function switchPick()
{
	$randomNumber = $this->randArray();
	switch ($randomNumber)
	{
		case 1: $wordOne = $this->pickOne(1);
		break;
		case 2: $wordOne = $this->pickTwo(1);
		break;
		case 3: $wordOne = $this->pickThree(1);
		break;
	}
}



/**
*
* First line needs to be 5 syllables
*
*/

}

