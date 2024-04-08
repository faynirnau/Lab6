<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $ville = [
            "Paris",
            "Vienne", 
            "Bratislava",
            "Londres",
            "Berlin",
            "Madrid",
            "Rome",
            "Lisbonne",
            "Budapest",
            "Varsovie",
            "Prague",
            "Bucarest",
            "Sofia",
            "Athènes",
            "Amsterdam",
            "Bruxelles",
            "Copenhague",
            "Dublin",
            "Helsinki",
            "Lisbonne"
        ];

        $matrice = [];

        for ($i = 0; $i < count($ville); $i++) {
            
            $matrice[$ville[$i]] = [];
            
            for ($j = 0; $j < count($ville); $j++) {
                $areConnected = random_int(0, 1);
                if ($i == $j) {
                    $matrice[$ville[$i]][$ville[$j]] = 0;
                }elseif ($areConnected == 1) {
                    $matrice[$ville[$i]][$ville[$j]] = random_int(1, 500);
                }elseif ($areConnected == 0) {
                    $matrice[$ville[$i]][$ville[$j]] = "X";
                }
            }
        }

        for ($i = 0; $i < count($ville); $i++) {
            for ($j = 0; $j < count($ville); $j++) {
                $matrice[$ville[$j]][$ville[$i]] = $matrice[$ville[$i]][$ville[$j]];
            }
        }

        //find the shortest path
        

    ?>

    <table style="border-collapse: collapse;">
        <?php
            for ($i = 0; $i <= count($matrice)+1; $i++) {
                if ($i >= 1) {
                    echo "<tr><th>" . $ville[$i-1] . "</th>";
                }
                if ($i > 0) {
                    $i1 = $i-1;
                }
                for ($j = 0; $j < count($ville); $j++) {
                    if ($i == 0 && $j == 0) {
                        echo "<th></th>";
                    }
                    elseif ($i == 0 && $j >= 1) {
                        echo "<th>" . $ville[$j-1] . "</th>";
                    }elseif ($i >= 1) {
                        echo "<td>" . $matrice[$ville[$i1]][$ville[$j]] . "</td>";
                    }

                    if ($i == 0 && $j == count($ville)-1) {
                        echo "<th>". $ville[$j]."</th>";
                    }
                }
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>

