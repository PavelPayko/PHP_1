
<h3>Task 1</h3>
<form action="#">
    <input type="text" name="num1" id="num1">
    <select name="operator" id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="num2" id="num2">
    <input type="submit" value="=">
</form>
<span><?= print "Result: $res"?></span>

<h3>Task 2</h3>
<form action="#">
    <input type="text" name="num1" id="num1">
    <input type="text" name="num2" id="num2">
    <input type="submit" value="+" name="operator">
    <input type="submit" value="-" name="operator">
    <input type="submit" value="/" name="operator">
    <input type="submit" value="*" name="operator">
</form>
<span>Result: <?= print $res?></span>

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "+":
            return $arg1 + $arg2;
        break;
        case "-":
            return $arg1 - $arg2;
        break;
        case "/":
            if($arg2 == 0){
                return "Error!";
            }else{
                return $arg1 / $arg2;
            }
        break;
        case "*":
            return $arg1 * $arg2;
        break;
    }
}
echo $res = mathOperation($num1, $num2, $operator);
?>

<h3>Task 3</h3>

<?php
include "config.php";
$sql = "SELECT * from reviews";
$sqlRes = mysqli_query($connect, $sql);

while($data = mysqli_fetch_assoc($sqlRes)){
    // echo $data['path'];
    echo "<div style='border: 1px solid black' ><span> Отзыв от: ".$data['name']."</span><p>".$data['text']."</p><br><span>".$data['dt']."</span></div>";
}
?>
<form action="server.php" method="POST">
    <span>Ваше имя</span>
    <br>
    <input type="text" name="name" id="name">
    <br>
    <span>Ваш отзыв</span>
    <br>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Отправить">
</form>






