<h2 class="ct">會員管理</h2>
<table class="all">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="tt ct">會員帳號</td>
        <td class="tt ct">註冊日期</td>
        <td class="tt ct">操作</td>
    </tr>
    <?php
    $rows=$Mem->all();
    foreach($rows as $row){
    ?>
    <tr>
        <td class="pp ct"><?=$row['name'];?></td>
        <td class="pp ct"><?=$row['acc'];?></td>
        <td class="pp ct"><?=$row['regdate'];?></td>
        <td class="pp ct">
            <?php
            echo "<button onclick='location.href=&#39;?do=edit_admin&id={$row['id']}&#39;'>修改</button>";
            echo "<button onclick='del(&#39;admin&#39;,{$row['id']})'>刪除</button>";
            ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>