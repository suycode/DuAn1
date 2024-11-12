<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$hinh;
    if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $img="no photo";
    }
?>
<div class="row">
    <div class="row title">
        <h1>CẬP NHÂT SẢN PHẨM</h1>
    </div>
    <div class="row content">
        <form action="index.php?act=updatesp&id=<?=$id?>" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdm as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id) echo '<option value="'.$id.'"selected>'.$danhmuc['name'].'</option>';
                            else echo '<option value="'.$id.'">'.$danhmuc['name'].'</option>';                          
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?=$sanpham['name']?>" required>
            </div>
            <div class="row mb10">
                Giá sản phẩm<br>
                <input type="text" name="giasp" value="<?=$gia?>" required>
            </div>
            <div class="row mb10">
                Hình ảnh<br>
                <input type="file" name="hinh" required>
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Mô tả sản phẩm<br>
                <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>    
        </form>
    </div>
</div>