<html>
<head>    
    <link rel="stylesheet" type="text/css" href="stle.css"/>
</head>
<h1>Multiplication Tables</h1>
<body>
    <h2>"I never bothered to memorize these. Good thing I have this website!"</h2>
    <br>


    <table>
    
    <?php
    $value = $_POST["value"];
    echo "<caption>$value x $value Multiplication Table</caption>";
    echo "<tr>";
    for($i=0; $i <= $value; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";
    for($i=1;$i <= $value; $i++) {
        echo "<tr><th>$i</th>";
        for($j=1; $j <= $value; $j++) {
            $product = $i * $j;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>

<footer><br><br>  
    You can click this <a href="index.html">link</a> to go back to the home page!
</footer>
</html>