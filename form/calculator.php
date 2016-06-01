<?php include 'header.php' ?>

<?php
$operand1 = $_GET['operand1'];
$operand2 = $_GET['operand2'];
$operator = $_GET['operator'];
?>

<form action="" method="GET">
    <input type="text" name="operand1" value="<?=$operand1?>"/>&nbsp;
    <select name="operator">
        <?php if($operator == "-") { ?>
            <option value="+">+</option>
            <option value="-" selected>-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        <?php } elseif ($operator == "*") {?>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*" selected>*</option>
            <option value="/">/</option>
        <?php  } elseif ($operator == "/") {?>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/" selected>/</option>
        <?php  } else {?>
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
       <?php } ?>
    </select>
    &nbsp;
    <input type="text" name="operand2" value="<?=$operand2?>"/>&nbsp;
    <input type="submit" value="=">
</form>
<?php
$res = '';
$patternSum = '(^\d+(?:[.]\d{1,999}|$)$)';
if(isset($operand1) && isset($operand2) && isset($operator) &&
    !empty($operand1) && !empty($operand2) && !empty($operator)) {
    if (preg_match($patternSum, $operand1) && preg_match($patternSum, $operand2)) {
        //Сюда дописать код, выполняющий вычисления
        if ($operator == "+") {
            $res = $operand1 + $operand2;
        } elseif ($operator == "-") {
            $res = $operand1 - $operand2;
        } elseif ($operator == "*") {
            $res = $operand1 * $operand2;
        } elseif ($operator == "/" && $operand1 !== 0 && $operand2 !== 0) {
            $res = $operand1 / $operand2;
        }
        echo 'Результат: ' . round((sprintf("%f",$res)), 2);
    } else {
        echo 'Результат: Неверно указанные данные, следует сказать целое число или дробное через \'.\'';
    }
} else {
    echo 'Результат: пустое поле';
}
?>
<?php include 'footer.php' ?>



