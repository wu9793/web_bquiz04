<h2>管理員登入</h2>
<table class="all">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt">驗證碼</td>
        <td class="pp">
        <?php
        $a=rand(10,99);
        $b=rand(10,99);
        $_SESSION['ans']=$a+$b;
        echo $a . "+" .$b . " ="
        ?>
        <input type="text" name="chk" id="chk"></td>
    </tr>
</table>
<div class="ct"><button>確認</button></div>