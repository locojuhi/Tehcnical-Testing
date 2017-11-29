<?php
include "Pieces.php";

$fibonacci_seeds = array(0, 1);
$fibonacci_sequence = $fibonacci_seeds;

$chosen_pieces = array();

for ($i = 0; $i < (strlen($pieces[0]) - 1); $i++) {
    $fibonacci_index = fibonacci($i + 2);
    $chosen_pieces[] = get_piece_at_index($pieces, $fibonacci_index);
}


$encoded_string = implode("=", $chosen_pieces);

echo get_decoding_result($encoded_string);

function get_decoding_result($encoded_string) {
    // TODO: Return decoded string.
    return base64_decode ($encoded_string);
}

function get_piece_at_index($pieces, $index) {
    return ($index > count($pieces)) ? "" : $pieces[$index];
   
}

function fibonacci($n) {
	if ($n < 0) {
		return NULL;
	} elseif ($n === 0) {
		return 0;
	} elseif ($n === 1 || $n === 2) {
		return 1;
	} else {
		return fibonacci($n - 1) + fibonacci($n - 2);
	}	 
}
?>
