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

