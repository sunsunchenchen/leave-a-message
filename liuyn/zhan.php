<?php
header("content-type:text/html;charset=utf-8");

?>
<center>
<table border="2">
    <form action="lian.php"method="post">
    <tr>
        <td>用户名</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>留言内容</td>
        <td><textarea name="nei"></textarea></td>
    </tr>
    <tr>
        <td><input type="submit" value="提交"></td>
        <td></td>
    </tr>
</table>
</center>