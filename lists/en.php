<form action="en.php" method="GET">			
	<div>
		<label>word</label>
		<input type="text" name="text" style="width: 60%; margin-bottom: 20px; height: 30px;" required>
	</div>
	<div>
		<label>labels</label>
		<input type="text" name="lb" style="width: 60%; margin-bottom: 20px; height: 30px;" required>
	</div>
	<button>submit</button>
</form>
<p>
article indefinite article/definite article ns/nns<br>
noun none/plural/single [sound effect] plant/human/object/animal/place/country/abrivation  ns/nns<br>
verb [sound effect] past tense/continuous tense/present tense ns/nns<br>
adjective ns/nns color/size/<br>
adverb ns/nns<br>

ns = ok<br>
nns = not ok<br>
kns = most likely ok<br>
jns = most likely not ok<br>
pns = not ok maybe p<br>
</p>
<?php 
echo "'".$_GET['text']."' => "."'".$_GET['lb']."',";
$list_en = array(
'a' => "article|indefinite article|ns",
'aa' => "noun|abrivation|single|kns",
'aaa' => "noun|abrivation|ans",
'aah' => "sound effect|kns",
'aahed' => "sound effect|verb|past tense|kns",
'aahing' => "sound effect|continuous tense|kns",
'aahs' => "sound effect|plural|kns",
'aah' => "sound effect|noun|kns",
'aalii' => "noun|plant|single|ns",
'aaliis' => 'noun|plural|ns',
'aals' => 'noun|abrivation|kns|none',
'aam' => 'noun|abrivation|kns|none',
'aani' => 'noun|abrivation|kns|none',
'aardvark' => 'noun|single|animal|ns',
'aardvarks' => 'noun|plural|animal|ns',
'aardwolf' => 'noun|plural|animal|ns',
'aardwolves' => 'noun|plural|animal|ns',
'aargh' => 'noun|plural|sound effect|kns',
);
?>
