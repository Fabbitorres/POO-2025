<!DOCTYPE html>
<head>
    <title>Tabla de multiplicar - Versión 1</title>
</head>
<body>
    <?php
        $n = $_REQUEST ["numero"];
        echo "<table border='1'>";
        echo "<tr><td colspan='5'>Tabla de multiplicar del numero $n</td></tr>";
        echo "<tr>";
        for ($i = 1; $i <= 25; $i++) {
            if (($i-1) % 5 == 0) echo "</tr><tr>";
            echo "<td>$n x $i = " . $n * $i . "</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
    
</body>
</html>