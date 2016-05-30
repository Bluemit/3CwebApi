You are <?php
$a=$_GET["username"];
echo $a;

$link = mysqli_connect(
    'localhost', /* The host to connect to 连接MySQL地址 */
    'root',   /* The user to connect as 连接MySQL用户名 */
    'vagrant', /* The password to use 连接MySQL密码 */
    '3Cweb');  /* The default database to query 连接数据库名称*/

if (!$link) {
 die("Can't connect to MySQL Server. Errorcode: %s ");
}
$a=(String)$a;
mysqli_query($link,"INSERT INTO img (pic) VALUES ('$a')");

mysqli_close($link);
