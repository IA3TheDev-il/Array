<!DOCTYPE html>
<html>

    <head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array</title>
        <link rel="stylesheet" href="Assets/Css/main.css">
        <link rel="icon" type="image/x-icon" href="Assets/Images/ic_view_array_128_28789.ico">
    </head>

    <body>
        <header>
            <?php
                $array = array("Rob", "Kirsten", "Tommy", "Ralphie");

                $array[] = "Katie";

                print_r($array);

                echo $array[3];

                echo "<br><br>";

                $secondArray[0] = "Pizza";

                $secondArray[1] = "Yoghurt";

                $secondArray[2] = "Coffee";

                $secondArray["favoriteFood"] = "Ice Cream";

                print_r($secondArray);

                echo "<br><br>";

                $thirdArray = array(
                    "France" => "French",
                    "Usa" => "English",
                    "Germany" => "German"
                );

                print_r($thirdArray);

                unset($thirdArray["France"]);

                print_r($thirdArray);

                echo sizeof($thirdArray);
            ?>
        </header>

	    <p class="copyright">
            Copyright &copy; 2024, All Rights Reserved. Designed By <a href="https://devilcodes.com" style="display: inline; text-decoration: none; color: red; letter-spacing: 1px; font-weight: 400; margin: 0 5px;">DEVIL</a>
        </p>
    </body>

</html>