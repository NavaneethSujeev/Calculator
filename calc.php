<!DOCTYPE html>

<head>
	<title>Simple Calculator</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <center>
        <div id="page-wrap">
        <h1>PHP - Simple Calculator</h1>
        <form action="" method="post" id="quiz-form">
                <p>
                    <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
                </p>
                <p>
                    <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
                </p>
                <p>
                    <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
                </p>
                <input type="submit" class="btn btn-primary" name="operator" value="Add" />
                <input type="submit" class="btn btn-primary" name="operator" value="Subtract" />
                <input type="submit" class="btn btn-primary" name="operator" value="Multiply" />
                <input type="submit" class="btn btn-primary" name="operator" value="Divide" />
        </form>
        </div>
    </center>
</body>
</html>