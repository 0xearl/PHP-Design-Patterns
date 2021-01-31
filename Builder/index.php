<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder | Design Patterns</title>
</head>
<body>
    <form method="GET" action="index.php">
        Select Train Type:
        <select name="type">
            <option value="default">Default Car</option>
            <option value="full">Full Featured Car</option>
            <option value="custom">Custom Car</option>
        </select>
        <button>Submit</button>
    </form>
    <?php 
        require_once('Builder.php');
        require_once('Car.php');
        require_once('CarBuilder.php');
        require_once('Director.php');

        function clientCode(Director $director, Builder $builder, string $type) {
            $director->setBuilder($builder);

            switch ($type) {
                case 'default':
                    echo "default car <br>";
                    $director->buildDefaultCar();
                    $builder->getProduct()->listParts();
                    break;
                case 'full':
                    echo "full featured car <br>";
                    $director->buildFullFeaturedCar();
                    $builder->getProduct()->listParts();
                    break;
                case 'custom':
                    echo 'custom car <br>';
                    $builder->makeWheel();
                    $builder->setSeatCount();
                    $builder->getProduct()->listParts();
                    break;
                default: 
                    break;

            }
        }

        if(isset($_GET['type'])) {
            $carBuilder = new CarBuilder();
            $director = new Director();
            clientCode($director, $carBuilder, $_GET['type']);
        }
    ?>
</body>
</html>
