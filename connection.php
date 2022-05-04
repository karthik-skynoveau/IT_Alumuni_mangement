<?php

$Link=mysqli_connect("localhost","root","") or die(mysqli_error($Link));
mysqli_select_db($Link,"attendance_system_it") or die(mysqli_error($Link));

?>