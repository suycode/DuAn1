<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
           
            <h1 class="boxtitle">DANH MỤC <div style="color: red; font-size: 1.5vw"><?=$tendm?></div></h1>
            <div class="row boxcontent">
                <?php
                    $i=0;
                    foreach ($dssp as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$hinh;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                            $mr="mr";
                        }else{
                            $mr="";
                        }
                        echo '<div class="boxsp '.$mr.'">
                            <div class="row img"> <a href="'.$linksp.'"><img style="width: 200px; height: 200px" src="'.$img.'" alt=""></a></div>                                <p>'.$gia.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                        $i+=1;
                    }
                ?>
            </div>
        </div>
        
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>