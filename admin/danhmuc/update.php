<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row title">
        <h1>CẬP NHẬT DANH MỤC HÀNG HÓA</h1>
    </div>
    <div class="row content">
    <form action="index.php?act=updatedm&id=<?=$id?>" method="post">
            <!-- <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai" value="<?=$id?>" disabled>
            </div>
            </br> -->
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>" required>
            </div>
            </br>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="nhap lai">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>    
        </form>
    </div>
</div>