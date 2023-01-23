<?php
$Title = "Pasticceria Musa";
$Dolce1 = "Tiramisù";
$Dolce2 = "Cheesecake";
$Dolce3 = "Panna Cotta";
$name = "Alessia";
?>

<!DOCTYPE html>
<html lang="ita">
<head>
    <!-- page title -->
<title><?php echo $Title; ?></title>
</head>
<body>
    

<?php
echo "Ciao, ".$name."<br>";
?>

<p>
    <!-- date and time -->
       TIME: <?php echo date('H:i'); ?> <br>DAY <?php echo date('d/m/Y'); ?> 
       <!-- dessert table -->
       <?php echo "<ul><li>". $Dolce1 . "</li><li>". $Dolce2 . "</li><li>". $Dolce3 . "</li></ul>"; ?>
       


</p>

</body>
</html>