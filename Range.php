<?php

function rangeZeroToFive($range) {
  if($range[0] == "(") {
	return "{1,2,3,4,5}";
  }else {
	return "{0,1,2,3,4,5}";
  }
}
