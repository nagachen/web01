<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <?php
     //顯示更多消息的列表
    $News->moreNews();
    ?>
    <div style="text-align:center;">
    <!--顯示分頁連結-->
    <?=$News->links();?>
    </div>
</div>