<div class="row">
    <div class="row frmtitle">
        <h1>THÊM SẢN PHẨM MỚI</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục sản phẩm<br>
                <select name="iddm">
                    <?php
                        foreach ($listdm as $dm){
                            extract($dm);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" required>
            </div>
            <div class="row mb10">
                Giá sản phẩm<br>
                <input type="text" name="giasp" required>
            </div>
            <div class="row mb10">
                Hình ảnh<br>
                <input type="file" name="anh" required>
            </div>
            <div class="row mb10">
                Mô tả sản phẩm<br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>    
        </form>
    </div>
</div>