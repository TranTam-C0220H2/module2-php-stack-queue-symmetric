<?php
include 'Stack.php';
include 'Queue.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>String: <input type="text" name="string"></label>
    <input type="submit" value="Check">
</form>
<?php
$queue = new Queue();
$stack = new Stack(100);
$string = $_POST['string'];
if ($string == '') {
    echo 'Yeu cau nhap chuoi can kiem tra';
} else {
    try {
        for ($i = 0; $i < strlen($string); $i++) {
            $queue->enqueue($string[$i]);
            $stack->push($string[$i]);
        }
        $count = 0;
        $halfString = floor(strlen($string) / 2);
        for ($i = 0; $i < $halfString; $i++) {
            if ($queue->dequeue() != $stack->pop()) {
                break;
            } else {
                $count++;
            }
        }
        if ($count == $halfString) {
            echo "String is symmetric.";
        } else {
            echo "String isn't symmetric.";
        }
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}
?>
</body>
</html>


