<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tag aldeen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    #كود جلب البيانات من القاعده 
include('../API/con.php');
$select = mysqli_query($conn, "SELECT * FROM `std`") or die('query failed');#die قتل الصفحه وطباعه الامر الجواها
    #query داله الاستعلام او الطلب
    ?>
    <div class="table">
        <table>
            <th>التخصص</th>
            <th>اسم الطالب</th>
            <th>الرقم الجامعي</th>
            <?php
            #حلقه تكراريه لطباعه البيانات
while ($row  = mysqli_fetch_array($select)){
    echo '<tr>';
    echo '<td>'.$row['it'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['numberuni'].'</td>';
    echo'</tr>';
}
?>

        </table>
    </div>
    <center>
    <a href="insert.html">العوده للخلف</a>
    </center>
</body>
</html>