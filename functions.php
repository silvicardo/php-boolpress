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
    return null;
  }

  function getInstanceWithKeyOf($array,$containedKey) {
    foreach ($array as $key => $item) {
      if ($key === $containedKey) {
        return $item;
      }
    }
    return null;
  }

  function getAllInstancesWithValueAtKey($array, $key,  $containedValue) : array {
    $arrayOut = [];
    foreach ($array as $item)
    {
      if (in_array($containedValue, $item[$key]) !== false) {
        $arrayOut[] =  $item;
      }
    }
  return  $arrayOut;
  }

  function extractAllValuesAtKeyWithoutDuplicates($arrayIn, $key, $sort = null) : array {
    $arrayOut = [];
    foreach ($arrayIn as $item) {
      $arrayOut = array_merge($arrayOut, $item[$key]);
    }

    if(!empty($sort)){
      return array_unique($arrayOut, $sort);
    }
    return array_unique($arrayOut);
  }

  function getTheExcerpt($text, $length, $enderString) : string {

    $putSpecialAtLength = chunk_split( $text, $length, '*cutHere*');
    $excerpt = explode('*cutHere*', $putSpecialAtLength)[0];
    return $excerpt . $enderString;
  }

 ?>
