<?php
$Json_Data = file_get_contents('datatype.json');

$datatype = json_decode($Json_Data, true);
//=========================

$title = "String";
 include "header.php";
 
?>
<h2>Common PHP String Functions</h2>

<ul>
    <?php foreach ($datatype['common_string'] as $job_Skill): ?>
    <li> <?php echo $job_Skill; ?></li>
    <?php endforeach; ?>
</ul>

<h2>PHP String Type</h2>
<ul>
 <?php foreach ($datatype['string_type'] as $String_Type_S):?>
    <li><h3>Modify Strings:<br></h3><?php echo implode('<br>', $String_Type_S["Modify_Strings"]);?></li>
    
    <li><h3>Concatenate Strings:</h3><?php echo $String_Type_S["Concatenate_Strings"];?></li>

    <li><h3>Slicing Strings:<br></h3><?php echo implode('<br>', $String_Type_S["Slicing_Strings"]);?></li>

    <li><h3>Escape Characters:<br></h3><?php echo implode('<br>', $String_Type_S["Escape_Characters"]);?></li>


    <?php endforeach; ?>
</ul>