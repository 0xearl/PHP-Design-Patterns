<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Method | Design Patterns</title>
</head>
<body>
    <form method="GET" action="index.php">
        What Kind Of Stove Do You Want?:
        <select name="stove_type">
            <option value="electric">Electric Stove</option>
            <option value="gas">Gas Stove</option>
        </select>
        <button>Submit</button>
    </form>
    <?php 
        require_once('StoveFactory.php');
        require_once('GasPoweredStoveFactory.php');
        require_once('ElectricPoweredStoveFactory.php');
        require_once('ElectricPoweredStoveProduct.php');
        require_once('GasPoweredStoveProduct.php');

            function clientCode(StoveFactory $factory) {
                
                return $factory->createProduct();
            
            }

            if(isset($_GET['stove_type'])) {
                switch ($_GET['stove_type']) {
                    case 'electric':
                        echo clientCode(new ElectricPoweredStoveFactory());
                        break;
                    case 'gas':
                        echo clientCode(new GasPoweredStoveFactory());
                        break;
                    default:
                        # code...
                        break;
                }
            }
    ?>
</body>
</html>