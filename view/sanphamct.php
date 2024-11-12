<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <h1 style="color: red" class="boxtitle" ><?=$name?></h1>
            <div class="row boxcontent">
                <?php
                    $img=$img_path.$hinh;
                    echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                    echo '<h1 style="color: red; text-align: center; font-size: 1vw">Giá niêm yết: '.$gia.' VNĐ</h1>';
                    echo '<h1 style="color: blue">Mô tả sản phẩm:</h1>'.$mota.''
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row" id="binhluan">
            
        </div>
        <div class="row mb">
            <h1 class="boxtitle">SẢN PHẨM CÙNG LOẠI</h1>
            <div class="row boxcontent">
                <?php
                    foreach ($sp_cung_loai as $sp){
                        // extract($sp);
                        // $linksp="index.php?act=sanphamct&idsp=".$sp['id'];
                        // $img=$img_path.$hinh;
                        // echo '<li>
                        //     <a href"'.$linksp.'">'.$sp['name'].'</a>
                        // </li>';
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$hinh;
                        echo '<div class="row mb10 top10">
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>