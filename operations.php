<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a <?php if ($_GET['operation'] === 'sum') echo 'class="active"'; ?> href="arithmetic.php?operation=sum">Sum</a>
        <a <?php if ($_GET['operation'] === 'difference') echo 'class="active"'; ?> href="arithmetic.php?operation=difference">Difference</a>
        <a <?php if ($_GET['operation'] === 'product') echo 'class="active"'; ?> href="arithmetic.php?operation=product">Product</a>
        <a <?php if ($_GET['operation'] === 'division') echo 'class="active"'; ?> href="arithmetic.php?operation=division">Division</a>
    </div>
    <div class="content">
        <h2><?php echo ucfirst($_GET['operation']); ?></h2>
        <?php
            $var1 = $_GET['var1'];
            $var2 = $_GET['var2'];
            $operation = $_GET['operation'];
            
            switch ($operation) {
                case 'sum':
                    $result = $var1 + $var2;
                    echo "The sum of $var1 and $var2 is: $result";
                    break;
                case 'difference':
                    $result = $var1 - $var2;
                    echo "The difference of $var1 and $var2 is: $result";
                    break;
                case 'product':
                    $result = $var1 * $var2;
                    echo "The product of $var1 and $var2 is: $result";
                    break;
                case 'division':
                    if ($var2 == 0) {
                        echo "Cannot divide by zero";
                    } else {
                        $result = $var1 / $var2;
                        echo "The division of $var1 by $var2 is: $result";
                    }
                    break;
                default:
                    echo "Invalid operation";
                    break;
            }
        ?>
    </div>
</body>
</html>
