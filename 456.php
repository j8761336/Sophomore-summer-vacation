<html>
<body  bgcolor="#deb887">
<h2>
<?php
$a=$_POST["A"];
$b=$_POST["B"];
for($i=1;$i<=$a;$i++){
    for($j=1;$j<=$b;$j++){
        echo str_pad( $i*$j, 5).'&nbsp;';
    }        echo str_pad( '<br>', 5).'&nbsp;';

}?>
</h2>

</body>
</html>