<?php
// $pattern = '/[a-z]/'; //cocokan huruf kecil
// $text = 'This is a Sample Text.';

// if (preg_match($pattern, $text)) {
//     echo "Huruf kecil ditemukan!";
// }else{
//     echo "Tidak ada huruf kecil";
// }
// echo "<br>";
// $pattern = '/[0-9]+/'; // cocokan satu atau lebih digit
// $text = 'There are 123 apples';
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokan: " . $matches[0];
// }else{
//     echo "Tidak ada yang cocok!";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        .result {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .match-found {
            color: green;
            font-weight: bold;
        }

        .no-match {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h2>Regex Matching Results</h2>
    <div class="result">
        <?php
        // Cek huruf kecil
        $pattern = '/[a-z]{1,4}/'; // Cocokan huruf kecil
        $text = 'This is a Sample Text.';

        if (preg_match($pattern, $text)) {
            echo "<p class='match-found'>Huruf kecil ditemukan!</p>";
        } else {
            echo "<p class='no-match'>Tidak ada huruf kecil.</p>";
        }

        echo "<br>";

        // Cek angka (digit)
        $pattern = '/[0-9]{2,3}/'; // Cocokan satu atau lebih digit
        $text = 'There are 123 apples';

        if (preg_match($pattern, $text, $matches)) {
            echo "<p class='match-found'>Cocokan angka ditemukan: " . $matches[0] . "</p>";
        } else {
            echo "<p class='no-match'>Tidak ada angka yang cocok.</p>";
        }

        echo "<br>";

        $pattern = '/apple/';
        $replacement = 'banana';
        $text = 'I like apple pie.';
        $new_text = preg_replace($pattern, $replacement, $text);
        echo $new_text;

        echo "<br>";

        $pattern = '/god/';
        $text = 'godd is good.';
        if (preg_match($pattern, $text, $matches)) {
            echo "<p class='match-found'>Cocokan ditemukan: " . $matches[0] . "</p>";
        }else{
            echo "Tidak ada yang cocok!";
        }
        ?>
    </div>

</body>

</html>