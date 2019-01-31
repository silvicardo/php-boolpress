<?php


  function convertAndFormat($inputDate, $userFormat, $outputStringFormat) {
    $myDateTime = DateTime::createFromFormat($userFormat, $inputDate);
    $newDateString = $myDateTime->format('m/d/Y H:i:s');
    $date = strtotime($newDateString);
    return date($outputStringFormat, $date);
  }

  function getInstanceWithValueOf($array, $containedValue) {

    foreach ($array as $item) {
      if (in_array($containedValue, $item) !== false) {
        return $item;
      }
    }

  }

  function getInstanceWithKeyOf($array,$containedKey) {
    foreach ($array as $key => $item) {
      if ($key === $containedKey) {
        return $item;
      }
    }
  }


 ?>
