<?php

include "db_connect.php";

$lat=(isset($_GET['lat']))?$_GET['lat']:'';
$long=(isset($_GET['long']))?$_GET['long']:'';

//do whatever you want
function array_flatten($array) { 
  if (!is_array($array)) { 
    return false; 
  } 
  $result = array(); 
  foreach ($array as $key => $value) { 
    if (is_array($value)) { 
      $result = array_merge($result, array_flatten($value)); 
    } else { 
      $result[$key] = $value; 
    } 
  } 
  return $result; 
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 

$json = "https://plus.codes/api?address=".$lat.",".$long."&ekey=AIzaSyC7JK6NbNdWfyUaXa2bNyP6ci6-ExArBUA
";
$data = file_get_contents("https://plus.codes/api?address=".$lat.",".$long."&ekey=AIzaSyC7JK6NbNdWfyUaXa2bNyP6ci6-ExArBUA
", false, stream_context_create($arrContextOptions));

$someobject = json_decode($data, true);

  //var_dump(json_decode($data, true));
  $someArray = array_flatten($someobject); 
  
print_r($someArray)."<br>";

   
    $str = substr($someArray['global_code'],0,4)." ".substr($someArray['global_code'],4);
    $str = str_replace('+', ' ', $str);
    //$strarr = explode(" ",$str);
    echo $str;
     $local_code = substr($str, 5);
    $latitude = $someArray['lat'];
    $longitude = $someArray['lng'];
    $status = $someArray['status'];
$query1="SELECT * FROM `digital_addresses` WHERE `code` = '$str'";
$result1=mysqli_query($connection,$query1);
if($row=mysqli_fetch_assoc($result1))
{
  header('location: ../pages/slide/finalMain.php?msg=0');
}
else
{
$query = "INSERT INTO `digital_addresses` (`S.No`, `code`, `latitude`, `longitude`, `local_code`, `locality_place_id`, `local_address`, `best_street_address`, `status`) VALUES (NULL, '$str', '$latitude', '$longitude', '$local_code', NULL, NULL, NULL, '$status')";
  if(mysqli_query($connection, $query))
    {
      header('location: ../pages/slide/finalMain.php?msg='.$str);
    }
    else
    {
        header('location: ../pages/slide/finalMain.php?msg=2');;
    }
  }
?>