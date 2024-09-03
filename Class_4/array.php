<?php
$Json_Data = file_get_contents('datatype.json');

$datatype = json_decode($Json_Data, true);
//=========================

$title = "Array";
 include "header.php";
 
?>

<h2>PHP Array Types</h2>

<ul>
            <li>Indexed Arrays: <?= $datatype['array_type']['Indexed_arrays']; ?></li>
            <li>Associative Aarrays: <?= $datatype['array_type']['Associative_arrays']; ?></li>
            <li>Multidimensional Arrays: <?= $datatype['array_type']['Multidimensional_arrays']; ?></li>
            
            
        </ul>