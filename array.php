<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Nhập số hàng ,số cột của ma trận vuông</label>
    <input type="text" name="number"><br>
    <input type="submit" value="result">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $N = $_POST["number"];
    $arr = array();
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $arr[$i][$j] = rand(1, 100);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    $sum = 0;
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            if ($i ==$j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    echo "<br> tổng đường chéo = " . $sum;
}
?>

</body>
</html>
