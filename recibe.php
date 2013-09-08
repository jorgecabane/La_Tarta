<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
/* Connection vars here for example only. Consider a more secure method. */
$dbhost = '200.54.168.133';
$dbuser = 'root';
$dbpass = 'pepito.P789';
$dbname = 'La_Tarta';

try {
  $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
 
$return_arr = array();
 
if ($conn)
{
    $ac_term = "%".$_GET['term']."%";
    $query = "SELECT * FROM Inventario where state like :term";
    $result = $conn->prepare($query);
    $result->bindValue(":term",$ac_term);
    $result->execute();
     
    /* Retrieve and store in array the results of the query.*/
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $row_array['id'] = $row['id'];
        $row_array['value'] = $row['state'];
        $row_array['abbrev'] = $row['abbrev'];
         
        array_push($return_arr,$row_array);
    }
 
     
}
/* Free connection resources. */
$conn = null; 
/* Toss back results as json encoded array. */
echo json_encode($return_arr);

?>
<body>
</body>
</html>