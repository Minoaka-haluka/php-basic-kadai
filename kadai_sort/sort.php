<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way(array &$array, bool $order)
        {
            if ($order === true) {
                sort($array);
            } else {
                rsort($array);
            }
        }


        $nums = [15, 4, 18, 23, 10];


        sort_2way($nums, true);
        echo "昇順ソート：<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }

        echo "<br>";


        $nums = [15, 4, 18, 23, 10];


        sort_2way($nums, false);
        echo "降順ソート：<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>