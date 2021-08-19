<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>SOLID</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .container {
                width: 75%;
                margin-left: auto;
                margin-right: auto;
            }

            .inner-container {
                width: 97%;
                margin-left: auto;
                margin-right: auto;
            }

        </style>
    </head>

    <body>

        <div class="container">

            <h1>SOLID Programming</h1>

            <p>
                In software engineering, SOLID is a mnemonic acronym for five design principles intended to make 
                software designs more understandable, flexible, and maintainable. The principles are a subset of 
                many principles promoted by American software engineer and instructor Robert C. Martin, first 
                introduced in his 2000 paper Design Principles and Design Patterns.
            </p>

            <h3>The SOLID concepts are</h3>

            <ul>
                <li><strong>S</strong>ingle-responsibility principle: "There should never be more than one reason for a class to change." In other words, every class should have only one responsibility.</li>
                <li><strong>O</strong>pen–closed principle: "Software entities ... should be open for extension, but closed for modification."</li>
                <li><strong>L</strong>iskov substitution principle: "Functions that use pointers or references to base classes must be able to use objects of derived classes without knowing it."</li>
                <li><strong>I</strong>nterface segregation principle: "Many client-specific interfaces are better than one general-purpose interface."</li>
                <li><strong>D</strong>ependency inversion principle: "Depend upon abstractions, [not] concretions."</li>
            </ul>

            <p>SOLID acronym was introduced later, around 2004, by Michael Feathers.</p>

            <p>
                Although the SOLID principles apply to any object-oriented design, they can also form a core 
                philosophy for methodologies such as agile development or adaptive software development.
            </p>

            <hr>

            <div class="inner-container">
<?php
                include('Classes\shape_interface.php');
                include('Classes\square.php');
                include('Classes\circle.php');
                include('Classes\area_calculator.php');
                include('Classes\volume_calculator.php');
                include('Classes\calculator_output.php');

                $shapes = [
                    new Circle(2),
                    new Square(5),
                    new Square(6),
                ];

                $areas = new AreaCalculator($shapes);
                $output = new SumCalculatorOutputter($areas);
?>
                <h4>JSON Output:</h4>
                <p><?= $output->JSON(); ?></p>

                <h4>HTML Output:</h4>
                <p><?= $output->HTML(); ?></p>

            </div>

            <hr>

            <h2>Single-Responsibility Principle</h2>
            <h2>Open-Closed Principle</h2>
            <h2>Liskov Substitution Principle</h2>

            <div class="inner-container">
<?php
                $volumes = new VolumeCalculator($shapes);
                $output2 = new SumCalculatorOutputter($volumes);
?>

                <h4>JSON Output:</h4>
                <p><?= $output2->JSON(); ?></p>

                <h4>HTML Output:</h4>
                <p><?= $output2->HTML(); ?></p>

            </div>

        </div>

    </body>

</html>
