<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>

<body>
    <?php
    require_once("search.inc"); 
    // 顯示表頭

    if (isset($_GET['s'])) { // 如果有搜尋文字顯示搜尋結果
        echo "<table>
                    <tr>
                    <th>商店名稱</th>
                    <th>品名</th>
                    <th>分類</th>
                    </tr>";

        $s = mysqli_real_escape_string($link, $_GET['s']);
        $sql = "SELECT * FROM search WHERE 品名 LIKE '%" . $s . "%'";
        $result = mysqli_query($link, $sql);

        // SQL 搜尋錯誤訊息
        if (!$result) {
            echo ("錯誤：" . mysqli_error($link));
            exit();
        }

        // 搜尋無資料時顯示「查無資料」
        if (mysqli_num_rows($result) <= 0) {
            echo "<tr><td colspan='4'>查無資料</td></tr>";
        }

        // 搜尋有資料時顯示搜尋結果
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['商店名'] . "</td>";
            echo "<td>" . $row['品名'] . "</td>";
            echo "<td>" . $row['分類'] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    mysqli_close($link); // 連線結束
    ?>

</body>

</html>