<?php $page_title ="Display Facebook Page Events on Website"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
</head>
<body>
     
 
<div class="container">
 
<!-- events will be here -->

<div class="page-header">
 
<h1><?php echo $page_title; ?></h1>
 
</div>

<?php
$year_range = 2;

// automatically adjust date range
// human readable years
$since_date = date('Y-01-01', strtotime('-' . $year_range . ' years'));
$until_date = date('Y-01-01', strtotime('+' . $year_range . ' years'));
 
// unix timestamp years
$since_unix_timestamp = strtotime($since_date);
$until_unix_timestamp = strtotime($until_date);
 
// or you can set a fix date range:
// $since_unix_timestamp = strtotime("2012-01-08");
// $until_unix_timestamp = strtotime("2018-06-28");
 
// page access token
$access_token = "YOUR_ACCESS_TOKEN";

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

$fields="id,name,description,place,timezone,start_time,cover";
 
$json_link = "https://graph.facebook.com/v3.0/{$fb_page_id}/events/attending/?fields={$fields}&access_token={$access_token}&since={$since_unix_timestamp}&until={$until_unix_timestamp}";
 
$json = file_get_contents($json_link);

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
 
// for those using PHP version older than 5.4, use this instead:
// $obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // count the number of events
    $event_count = count($obj['data']);
 
    for($x=0; $x<$event_count; $x++){
        // facebook page events will be here
    }
echo "</table>";

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // count the number of events
    $event_count = count($obj['data']);
 
    for($x=0; $x<$event_count; $x++){
        // facebook page events will be here
    }
echo "</table>";

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

function sortFunction($a,$b){
    if ($a['start_time'] == $b['start_time']) return 0;
    return strtotime($a['start_time']) - strtotime($b['start_time']);
}
usort($obj['data'],"sortFunction");

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

// set timezone
date_default_timezone_set($obj['data'][$x]['timezone']);
 
$start_date = date( 'l, F d, Y', strtotime($obj['data'][$x]['start_time']));
$start_time = date('g:i a', strtotime($obj['data'][$x]['start_time']));
  
$pic_big = isset($obj['data'][$x]['cover']['source']) ? $obj['data'][$x]['cover']['source'] : "https://graph.facebook.com/v2.7/{$fb_page_id}/picture?type=large";
 
$eid = $obj['data'][$x]['id'];
$name = $obj['data'][$x]['name'];
$description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
 
// place
$place_name = isset($obj['data'][$x]['place']['name']) ? $obj['data'][$x]['place']['name'] : "";
$city = isset($obj['data'][$x]['place']['location']['city']) ? $obj['data'][$x]['place']['location']['city'] : "";
$country = isset($obj['data'][$x]['place']['location']['country']) ? $obj['data'][$x]['place']['location']['country'] : "";
$zip = isset($obj['data'][$x]['place']['location']['zip']) ? $obj['data'][$x]['place']['location']['zip'] : "";
 
$location="";
 
if($place_name && $city && $country && $zip){
    $location="{$place_name}, {$city}, {$country}, {$zip}";
}else{
    $location="Location not set or event data is too old.";
}

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

echo "<tr>";
    echo "<td rowspan='6' style='width:20em;'>";
        echo "<img src='{$pic_big}' width='200px' />";
    echo "</td>";
echo "</tr>";
  
echo "<tr>";
    echo "<td style='width:15em;'>What:</td>";
    echo "<td><b>{$name}</b></td>";
echo "</tr>";
  
echo "<tr>";
    echo "<td>When:</td>";
    echo "<td>{$start_date} at {$start_time}</td>";
echo "</tr>";
  
echo "<tr>";
    echo "<td>Where:</td>";
    echo "<td>{$location}</td>";
echo "</tr>";
  
echo "<tr>";
    echo "<td>Description:</td>";
    echo "<td>{$description}</td>";
echo "</tr>";
  
echo "<tr>";
    echo "<td>Facebook Link:</td>";
    echo "<td>";
        echo "<a href='https://www.facebook.com/events/{$eid}/' target='_blank'>View on Facebook</a>";
    echo "</td>";
echo "</tr>";

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

// get events for the past x years
$year_range = 1;
 
// automatically adjust date range
// human readable years
$since_date = date('Y-01-01', strtotime('-' . $year_range . ' years'));
$until_date = date('Y-m-d', strtotime('-1 day'));
 
// unix timestamp years
$since_unix_timestamp = strtotime($since_date);
$until_unix_timestamp = strtotime($until_date);

// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!
// SPACE!!!!!!!!!!!!!!!!!!!

// get events for the next x years
$year_range = 1;
 
// automatically adjust date range
// human readable years
$since_date = date('Y-m-d');
$until_date = date('Y-12-31', strtotime('+' . $year_range . ' years'));
 
// unix timestamp years
$since_unix_timestamp = strtotime($since_date);
$until_unix_timestamp = strtotime($until_date);

?>

<!-- events will be here -->

 
</div>
 
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 
<!-- bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>