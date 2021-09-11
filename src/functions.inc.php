<?php
// this function checks if a word appears in a paragraph
function check($paragraph, $word)
{
  $paragraph = strtolower($paragraph);
  $word = strtolower($word);
    // strpos finds the first position of the keyword $word in the paragraph
    // !== if the keyword doesn't exist
    if (strpos($paragraph, $word) !== false)
    // returns 1 as true it does exist
        return 1;
    else
    // returns 0 as false it doesn't exist
        return 0;
}
?>
