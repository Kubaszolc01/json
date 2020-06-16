<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>json</title>
</head>
<body>
    <ul id="autorzy">
        
    </ul>

    <?php
            $conn = new mysqli('localhost', 'root', 'zaq1@WSX', 'library');

            $result = $conn->query("SELECT * FROM autorzy");

            $json_array = array();

            while($row=$result->fetch_assoc()){
                $json_array[] = $row;
            }

            $json = '{ "autorzy": ' . json_encode($json_array) . '}';
            $plik = fopen('lib.json', 'w');
            fwrite($plik, $json);
            fclose($plik);

            // echo('<pre>');
            // print_r($json_array);
            // echo('</pre>');
    ?>
</body>
<script src="script.js"></script>
</html>