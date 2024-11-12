<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <!-- <th>Iduser</th>
                    <th>Idpro</th> -->
                    <th>Ngày bình luận</th>
                    <th>Hành động</th>
                </tr>
                <?php
                    foreach ($listbinhluan as $binhluan){
                        extract($binhluan);
                        $xoabl="index.php?act=xoabl&id=".$id;
                        
                    echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td><a href="'.$xoabl.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bình luận này?\');"><input type ="button" value="Xóa bình luận"></a></td>
                        </tr>';
                    }
                    // <td>'.$iduser.'</td>
                    // <td>'.$idpro.'</td>
                ?>
                 
            </table>
        </div>
        <!--<div>
            <td><a href="'.$suabl.'"><input type ="button" value="sua"></a> <a href="'.$xoabl.'"><input type ="button" value="xoa"></a> </td>
            <input type="button" value="chon tat ca">
            <input type="button" value="bo chon tat ca">
            <input type="button" value="xoa cac muc da chon">
            <a href="index.php?act=adddm"><input type="button" value ="nhap them"></a>
        </div>-->
    </div>
</div>