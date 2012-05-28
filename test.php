<?php
    session_start();
    $a = 1;
    echo $a;
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
</head>

<body>
    <?php
        echo $a;
        if (1) {
        	$b = 2;
        }
        echo $b;
    ?>
</body>

</html>