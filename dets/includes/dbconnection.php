<?php
DB_HOST=aws-us-east-2.connect.psdb.cloud
DB_USERNAME=rpleb80jo6oqco2twh52
DB_PASSWORD=pscale_pw_C9LHLo4vxkTPybDnjfpayfii8UD9FJPHl57q4NCWF3L
DB_NAME=detsdb

$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
