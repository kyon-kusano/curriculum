<?php
function volume ($vertical, $width, $height){
  return ($vertical * $width * $height)."㎤";
}
echo volume(5, 10, 8);
?>