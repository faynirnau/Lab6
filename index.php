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
            "Vienna", 
            "Bratislava",
            "Londres",
            "Berlin",
            "Madrid",
            "Rome",
            "Lisbonne",
            "Budapest",
            "Varsovie",
            "Prague"
        ];

        $links = [
            ["paris", "vienna"],
            ["vienna", "bratislava"],
            ["bratislava", "londres"],
            ["londres", "berlin"],
            ["berlin", "madrid"],
            ["madrid", "rome"],
            ["rome", "lisbonne"],
            ["lisbonne", "budapest"],
            ["budapest", "varsovie"],
            ["varsovie", "prague"],
            ["prague", "paris"]
        ];

        $matrice = [];

        for ($i = 0; $i < count($ville); $i++) {
            $matrice[$ville[$i]] = [];
            for ($j = 0; $j < count($ville); $j++) {
                if ($i == $j) {
                    $matrice[$ville[$i]][$ville[$j]] = 0;
                }else {
                    $matrice[$ville[$i]][$ville[$j]] = random_int(0, 500);
                }
            }
        }

    ?>

    <table style="border-collapse: collapse;">
        <?php
            for ($i = 0; $i <= count($matrice); $i++) {
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

