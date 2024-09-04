<?php
$Json_Data = file_get_contents('datatype.json');

$datatype = json_decode($Json_Data, true);
//=================

$title = "Homepage";
include "header.php";
?>

<P>Variables can store data of different types, and different data types can do different things.</P>
<strong>PHP supports the following data types:</strong>

<ul>
            <?php foreach ($datatype['Data_Type'] as $Data_Type_s): ?>
                <li><?php echo $Data_Type_s; ?></li>
                
            <?php endforeach; ?>
</ul>

