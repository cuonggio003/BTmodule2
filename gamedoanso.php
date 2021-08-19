<?php

$sum= 25;
$ketqua = 0;
$min= 1;
$max = 100;
function random($min, $max) {
    return rand($min, $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $anwser = $_POST['so'];

    $maytinhdoan = (int) $_POST['result'];
    if($anwser == 'lonhon'){
        $max = $maytinhdoan;
        $min = (int) $_POST['min'];
        echo "min:" . $min . "<br/>";
        echo "max:" . $max . "<br/>";
        echo "máy tính đoán:" . $maytinhdoan;
       
    }else {
        $min = $maytinhdoan;
        $max = (int) $_POST['max'];
        $maytinhdoan = random($maytinhdoan, $max);
        echo "min:" . $min . "<br/>";
        echo "max:" . $max . "<br/>";
        echo "máy tính đoán" . $maytinhdoan;
    }

}else {
    $min = 1;
    $max = 100;
    $maytinhdoan= random(1, 100);
    echo "máy tính đoán" . $maytinhdoan;
} 
echo "<br /> bố mày chọn:" .$sum;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Anh đoán em đi</h1>
</head>
<body>
<form>
    <input name="so" type="radio" value="lonhon"> lớn hơn
    <input name="so" type="radio" value="nhohon"> nhỏ hơn
    <input name="result" type="hidde" value="<?php echo $maytinhdoan ?>" >
    <input name="so" type="submit" value="submit"> ớ ấn đi anh
</form>
</body>
</html>