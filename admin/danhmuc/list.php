<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH DANH MỤC HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <div>
            <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=adddm"><input type="button" value ="Nhập thêm"></a>
        </div>
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listdm as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$name?></td>
                    <td>
                        <a href=<?=$suadm?>><input type ="button" value="Sửa"></a>
                        <a href="<?=$xoadm?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');"><input type="button" value="Xóa"></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                 
            </table>
        </div>
        
    </div>
</div>