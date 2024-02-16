<?php
$goods = $Goods->find($_GET['id'])
?>
<style>
    .item {
        width: 80%;
        margin: 5px auto;
        background-color: #f4c591;
        display: flex;
    }

    .item .img {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #fff;
        padding: 5px;
        text-align: center;
    }

    .item .info {
        width: 40%;
        display: flex;
        flex-direction: column;
    }

    .info div {
        border: 1px solid #fff;
        border-left: 0px;
        border-top: 0px;
        flex-grow: 1;
    }

    .info div:nth-child(1) {
        border-top: 1px solid #fff;
    }
</style>

<h2 class="tt ct"><?= $goods['name']; ?></h2>

<div class="item">
    <div class="img">
        <a href='?id=<?= $goods['id']; ?>'>
            <img src="./img/<?= $goods['img']; ?>" alt="" style="width:90%;height:200px;">
        </a>
    </div>
    <div class="info">
        <div>分類:</div>
        <div>編號:<?= $goods['no']; ?></div>
        <div>價錢:<?= $goods['price']; ?></div>
        <div>詳細說明:<?= $goods['intro']; ?></div>
        <div>庫存量:<?= $goods['stock']; ?></div>
    </div>
</div>
<div class="tt ct">
    <input type="number" value="1" style="width:50px;">
    <img src="./icon/0402.jpg" alt="">
</div>