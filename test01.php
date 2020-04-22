<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$kigou = $_POST["kigou"];
$kekka = 0;
switch ($kigou) {
    case "plus":
        $kekka = $num1 + $num2;
        break;
    case "minus":
        $kekka = $num1 - $num2;
        break;
    case "mul":
        $kekka = $num1 * $num2;
        break;
    case "div":
        $kekka = $num1 / $num2;
        break;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>2桁の数字を入力してください</p>
    <form method="POST">
        <input type="text" name="num1" value="<?php echo $num1; ?>">
        <select name="kigou">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mul">×</option>
            <option value="div">÷</option>
        </select>
        <input type="text" name="num2" value="<?php echo $num2; ?>">
        <input type="submit" value="=">
        <?php echo $kekka; ?>
    </form>
</body>

</html>