<?php



$conexion = new mysqli('localhost','root','','handy');

$date = $conexion->real_escape_string($_POST['date']);

$sql = "SELECT * FROM schedule WHERE date = '$date'";

$result = $conexion->query($sql);

$array[] = null;

while($row = $result->fetch_array()){
    array_push($array, $row['hour']);
}
;
/* while (  ) {
    array_push($hour, 2);   
}; */

echo    '<label for="">Pick a time</label>';
echo    '<select class="custom-select" name="hour">';
/* echo    '<option value="0" selected>Open this select menu</option>'; */

echo in_array(1, $array) ? '<option value="1" disabled>8 - 10 am Not available</option>' : '<option value="1">8 -10 am Available</option>';
echo in_array(2, $array) ? '<option value="2" disabled>10 - 12 am Not available</option>' : '<option value="2">10 -12 am Available</option>';
echo in_array(3, $array) ? '<option value="3" disabled>12 - 2 pm Not available</option>' : '<option value="3">12 -2 am Available</option>';
echo in_array(4, $array) ? '<option value="4" disabled>2 - 4 pm Not available</option>' : '<option value="4">2 -4 am Available</option>';
echo in_array(5, $array) ? '<option value="5" disabled>4 - 6 pm Not available</option>' : '<option value="5">4 - 6 am Available</option>';
echo    '</select>';



