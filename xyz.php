<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics Gallery</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .image {
            margin: 10px;
            max-width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .image img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <h1>Cosmetics Gallery</h1>
    <div class="container">
        <?php
        // Array of cosmetic images and descriptions
        $cosmetics = array(
            array("1.jpg", "Lipstick", "Enhance your pout with our vibrant lipstick shades."),
            array("2.jpg", "Eyeshadow", "Create stunning eye looks with our versatile eyeshadow palettes."),
            array("3.jpg", "Foundation", "Achieve flawless skin with our range of foundation formulas."),
            array("4.jpg", "Mascara", "Make your lashes pop with our lengthening and volumizing mascaras."),
            array("5.jpg", "Nail Polish", "Complete your manicure with our selection of trendy nail polish colors.")
        );

        // Display each cosmetic image with description
        foreach ($cosmetics as $cosmetic) {
            // Construct the full path to the image
            $image_path = 'basic php programs/' . $cosmetic[0]; // Assuming images are stored in a directory named 'images'

            // Output the HTML for each cosmetic item
            echo '<div class="image">';
            echo '<img src="' . $image_path . '" alt="' . $cosmetic[1] . '">';
            echo '<h3>' . $cosmetic[1] . '</h3>';
            echo '<p>' . $cosmetic[2] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
