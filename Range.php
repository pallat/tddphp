<?php

function rangeZeroToFive($range) {
  $rangeOutput ="{";

  $startLoop = setStartLoop($range);
  $endLoop = setEndLoop($range);
  $rangeOutput = $rangeOutput. rangeOutput($startLoop, $endLoop);

  $rangeOutput .="}";
  return $rangeOutput;
}

function setEndLoop($range) {
  $rangeInput = explode(",",substr($range,1,3));
  if ($range[strlen($range)-1] == "]"){
    $endLoop = $rangeInput[1];
  }else{
    $endLoop = $rangeInput[1] -1;
  }
  return $endLoop;
}

function setStartLoop($range) {
  $rangeInput = explode(",",substr($range,1,3));
  if($range[0] == "[") {
    $startLoop = $rangeInput[0];
  } else {
    $startLoop = $rangeInput[0] + 1;
  }
  return $startLoop;
}

function rangeOutput($startLoop, $endLoop) {
  $rangeOutput="";
  if($endLoop >= $startLoop){
    for($index=$startLoop;$index<=$endLoop;$index++){
      $rangeMemberArray[$index] = $index;
    }

    $rangeOutput .= implode($rangeMemberArray,",");
  }
  return $rangeOutput;
}
