<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdm as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            <input type="submit" name="listok" value="Tìm">
    </form>
    <div class="row frmcontent">
        <div>
            <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=addsp"><input type="button" value ="Nhập thêm"></a>
        </div>
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>Mã sản phâm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listsp as $sanpham){
                        extract($sanpham);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;
                        $hinhpath="../upload/".$hinh;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80'>";
                        }else{
                            $hinh="no photo";
                        }
                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$gia.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$view.'</td>
                                <td>
                                    <a href="'.$suasp.'"><input type ="button" value="Sửa"></a>
                                    <a href="'.$xoasp.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa sản phẩm này?\');">
                                        <input type="button" value="Xóa">
                                    </a>
                                </td>
                            </tr>';
                    }
                ?> 
            </table>
        </div>
        
    </div>
</div>