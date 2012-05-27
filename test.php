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
        if (isset($_GET['article'])) {
            echo '$_GET[\'article\'] = \'' . $_GET['article'] . '\'';
        }
        else
            echo 'N\'est pas défini.';
    ?>
</body>

</html>