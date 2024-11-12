<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "header.php";


    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {

            /*controller danh muc*/
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thành công";
                    header('Location: index.php?act=listdm');
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':             
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();              
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_GET['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="cap nhat thanh cong";
                }
                $listdm=loadall_danhmuc();                    
                include "danhmuc/list.php";
                break;
            

            /*controler san pham */ 
            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    // $img=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensp, $gia, $_FILES["anh"]["name"], $mota, $iddm);
                    $thongbao="Thêm thành công";
                    header('Location: index.php?act=listsp');
                }
                $listdm = loadall_danhmuc(); 
                include "sanpham/add.php";                                                                          
                break;

            case 'listsp':
                if(isset($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                echo($kyw);
                echo($iddm);
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham($kyw,$iddm);
                //var_dump($listdm);
                include "sanpham/list.php";
                break;

            case 'xoasp':             
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp = loadall_sanpham("",0);              
                include "sanpham/list.php";
                break;

            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_GET['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($hinh);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $iddm,$tensp,$gia,$mota,$hinh);
                    $thongbao="Cập nhật thành công";
                }
                $listdm=loadall_danhmuc(); 
                $listsp=loadall_sanpham();                   
                include "sanpham/list.php";
                break;

            
                
            //controller binh luan, khach hang
            case 'dskh':             
                $listtaikhoan = loadall_taikhoan();              
                include "taikhoan/list.php";
                break;
            case 'dsbl':             
                $listbinhluan = loadall_binhluan(0);              
                include "binhluan/list.php";
                break;  
            case 'xoabl':             
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);              
                include "binhluan/list.php";
                break;    
                
            case 'thongke':             
                $listthongke = loadall_thongke();              
                include "thongke/list.php";
                break;
            case 'bieudo':             
                $listthongke = loadall_thongke();              
                include "thongke/bieudo.php";
                break;

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }


    include "footer.php";
?>