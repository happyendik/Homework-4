<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Delivery information</title>
</head>
<body>

<h1>Delivery information</h1>


<?php
$xml = simplexml_load_file('./data.xml');
//echo "<pre>";
//print_r($xml);

$attr = $xml->attributes();

echo "<p>Purchase order - $attr[0]</p>";
echo "<p>Purchase date - $attr[1]</p>";

echo '<h4>Address for '.$xml->Address[0]->attributes().':</h4>';

echo  $xml->Address[0]->Name.'     '.$xml->Address[0]->Street.'     '.$xml->Address[0]->City.'    '.$xml->Address[0]->State
      .'     '.$xml->Address[0]->Zip.'     '.$xml->Address[0]->Country;


echo '<h4>Address for '.$xml->Address[1]->attributes().':</h4>';

echo  $xml->Address[1]->Name.'     '.$xml->Address[1]->Street.'     '.$xml->Address[1]->City.'    '.$xml->Address[1]->State
    .'     '.$xml->Address[1]->Zip.'     '.$xml->Address[1]->Country;
echo '<br><br>';


echo '<i>Delivery notes: <b>'.$xml->DeliveryNotes.'</b></i>';
echo '<br><br>';
?>


<table border="1">

<tr>
    <td>Товар - <?php echo $xml->Items->Item[0]->attributes(); ?></td>
    <td>ProductName - <?php echo $xml->Items->Item[0]->ProductName;?></td>
    <td>Quantity - <?php echo $xml->Items->Item[0]->Quantity;?></td>
    <td>USPrice - <?php echo $xml->Items->Item[0]->USPrice;?></td>
    <td>Comment - <?php echo $xml->Items->Item[0]->Comment;?></td>
</tr><tr>
<td>Товар - <?php echo $xml->Items->Item[1]->attributes(); ?></td>
        <td>ProductName - <?php echo $xml->Items->Item[1]->ProductName;?></td>
        <td>Quantity - <?php echo $xml->Items->Item[1]->Quantity;?></td>
        <td>USPrice - <?php echo $xml->Items->Item[1]->USPrice;?></td>
        <td>ShipDate - <?php echo $xml->Items->Item[1]->ShipDate;?></td>
</tr>

</table>

</body>
</html>