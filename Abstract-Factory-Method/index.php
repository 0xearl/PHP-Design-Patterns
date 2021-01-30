<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Method | Design Patterns</title>
</head>
<body>
    <form method="GET" action="index.php">
        Select Train Type:
        <select name="train_type">
            <option value="BTB">Bullet Train</option>
            <option value="BDT">Bombardier Train</option>
        </select>
        <button>Submit</button>
    </form>
    <?php 
        require_once('AbstractTrainA.php');
        require_once('AbstractTrainB.php');
        require_once('BombardierTrainA.php');
        require_once('BombardierTrainB.php');
        require_once('BulletTrainA.php');
        require_once('BulletTrainB.php');
        require_once('BulletTrainFactory.php');
        require_once('BombardierTrainFactory.php');
        require_once('TrainFactory.php');

        function clientCode(TrainFactory $factory) {
            $trainA = $factory->createTrainA();
            $trainB = $factory->createTrainB();

            echo $trainB->someFunction() . '<br>';
            echo $trainB->anotherFunction($trainA) . '<br>';
            
        }

        if(isset($_GET['train_type'])) {
            switch ($_GET['train_type']) {
                case 'BTB':
                    echo clientCode(new BulletTrainFactory());
                    break;
                case 'BDT':
                    echo clientCode(new BombardierTrainFactory());
                    break;
                default:
                    # code...
                    break;
            }
        }
    ?>
</body>
</html>