<?php

function rangeZeroToFive($range) {
  $rangeOutput ="{";

  $rangeInput = explode(",",substr($range,1,3));


    if($range[0] == "[") {
	$startLoop = $rangeInput[0];
    } else {
	$startLoop = $rangeInput[0] + 1;
    }

    if ($range[strlen($range)-1] == "]"){
	$endLoop = $rangeInput[1];
    }else{
	$endLoop = $rangeInput[1] -1;
    }

    if($endLoop >= $startLoop){
      for($index=$startLoop;$index<=$endLoop;$index++){
	$rangeMemberArray[$index] = $index;
      }
    
      $rangeOutput .= implode($rangeMemberArray,",");
    }

  $rangeOutput .="}";
  return $rangeOutput;
}
