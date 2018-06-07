<?php
header("content-type:text/html;charset=utf-8");
mysql_connect("127.0.0.1", 'root', 'root') or die('连接失败');
mysql_select_db("xiao") or die('打开失败');
$sql = "select * from yi";
$res = mysql_query($sql);
$data = array();
while ($arr = mysql_fetch_assoc($res)){
    $data[] = $arr;
}
?>
<center>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>留言人</td>
            <td>留言内容</td>
        </tr>
        <?php foreach ($data as $k => $v) { ?>
            <tr>
                <td><?php echo $v['id'] ?></td>
                <td><?php echo $v['name'] ?></td>
                <td><?php echo $v['nei'] ?></td>
                <td><a href="er.php?id=<?php echo $v["id"] ?>">删除</a></td>
            </tr>
        <?php } ?>
    </table>
</center>