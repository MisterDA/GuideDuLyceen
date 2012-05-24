<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
    <?php
        foreach ($_SESSION as $key => $var) {
        	echo '[\'' . $key . '\'] = ' . $var . '<br />';
        }
        $arr = $_SESSION['userNames'];
        for ($i=0; $i<3; $i++) {
        	echo $arr[$i];
        }
    ?>
</body>
</html>