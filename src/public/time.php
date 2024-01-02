<!-- ?php -->
<!-- // $date = new DateTime(); -->
<!-- // echo $date->format('Y-m-d H:i:s');  -->

<!-- new DateTime(value) -->
<!-- ?php -->
<!-- // $date = new DateTime('1999-11-02 05:27:42'); -->
<!-- // echo $date->format('Y-m-d H:i:s'); -->

<?php
$date = new DateTime();
echo $date->modify('-1 years')->format('Y-m-d H:i:s') . "\n";

$date = new DateTime();
echo $date->modify('1 years')->format('Y-m-d H:i:s');