<?php
 session_start();
 ob_start();
 include "../model/pdo.php";
 include "../model/danhmuc.php";
 include "../model/sanpham.php";
 include "../model/taikhoan.php";
 include "../model/binhluan.php";
 include "../model/cart.php";
 include "header.php";
 if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
 //controller cho danhmuc
 if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'adddm':
        // kiểm tra xem người dùng có click nút add
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tenloai = $_POST['tenloai'];
            insert_danhmuc($tenloai);
            $thongbao = "Thêm thành công";
        }
            
        include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
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
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
    
            // Controller cho sản phẩm
                    case 'addsp':
                    // kiểm tra xem người dùng có click nút add
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $thongtin = $_POST['thongtin'];
                        $mota  = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                        }else{

                        }
                        insert_sanpham($tensp,$giasp,$hinh,$thongtin,$mota,$iddm);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/add.php";
                        break;
                    case 'listsp':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw = $_POST['kyw'];
                            $iddm = $_POST['iddm'];
                        }else{
                            $kyw='';
                            $iddm=0;
                        }
                        $listdanhmuc = loadall_danhmuc();
                        $listsanpham = loadall_sanpham($kyw,$iddm);
                        include "sanpham/list.php";
                        break;
                    case 'xoasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_sanpham($_GET['id']);
                        }
                        $listsanpham = loadall_sanpham("",0);
                        include "sanpham/list.php";
                        break;
                    case 'suasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                           $sanpham=loadone_sanpham($_GET['id']);
                        }
                        $listdanhmuc=loadall_danhmuc();
                        include "sanpham/update.php";
                        break;
                    case 'updatesp':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $thongtin = $_POST['thongtin'];
                        $mota  = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                        }else{

                        }
                            update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$thongtin,$mota);
                            $thongbao = "Cập nhật thành công";
                           }
                            $listdanhmuc=loadall_danhmuc();
                            $listsanpham=loadall_sanpham();
                            include "sanpham/list.php";
                            break;
            //Controller cho khách hàng
                    case 'dskh':
                        $listacc = loadall_acc();
                        include "taikhoan/list.php";
                        break;
                    case 'xoatk':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_acc($_GET['id']);
                         }
                        $listacc = loadall_acc();
                        include "taikhoan/list.php";
                        break;
            //Controller cho bl
                    case 'addbl':
                // kiểm tra xem người dùng có click nút add
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $noidung = $_POST['noidung'];
                    $iduser = $_POST['iduser'];
                    $idpro = $_POST['idpro'];
                    $ngaybl = $_POST['ngaybl'];
                    insert_binhluan($noidung,$iduser,$idpro,$ngaybl);
                    $thongbao = "Thêm thành công";
                }
                include "binhluan/add.php";
                break;
                    case 'dsbl':
                        $listbinhluan = loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;
                    case 'thongke':
                        $listthongke=loadall_thongke();
                        $listlx=listluotxem();
                        include "thongke/list.php";
                        break;
                    case 'bieudo':
                        $listthongke=loadall_thongke();
                        $listlx=listluotxem();
                        include "thongke/bieudo.php";
                        break;
                    case 'xoabl':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                         }
                         $listbinhluan = loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;
                    case 'suabl':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                            $bl = loadone_binhluan($_GET['id']);
                            }
                            include "binhluan/update.php";
                            break;
                    case 'updatebl':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $noidung = $_POST['noidung'];
                                $id = $_POST['id'];
                                update_binhluan($noidung,$id);
                                $thongbao = "Cập nhật thành công";
                            }
                            $listbinhluan = loadall_binhluan(0);
                            include "binhluan/list.php";
                            break;
                    //  case 'signin':		
                    //             if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    //             $user = $_POST['user'];
                    //             $pass = $_POST['pass'];
                    //             $login = dangnhap($user,$pass);
                    //             if(is_array($login)){
                    //             $_SESSION['admin']=$login;
                    //             header('Location: index.php');
                    //             }else{
                    //                 $thongbao="Tài khoản hoặc mật khẩu không đúng. Vui lòng đăng nhập lại!";
                    //             }
                    //             }
                    //             include "index.php";
                    //             break;
                    case 'signout':
                        session_unset();
			            header('Location: login.php');
                        break;
                        case 'listbill':
                            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                                $kyw=$_POST['kyw'];
                            }else{
                                $kyw="";
                            }
                            $listbill=loadall_bill($kyw=0);
                            include "bill/listbill.php";
                            break;
                            case 'xoadh':
                                if(isset($_GET['id'])&&($_GET['id']>0)){
                                    delete_donhang($_GET['id']);
                                     }
                                     $listbill = loadall_bill(0);
                                    include "bill/listbill.php";
                                    break;
                                    case 'suadh':
                                        if(isset($_GET['id'])&&($_GET['id']>0)){
                                           $bill=loadone_bill($_GET['id']);
                                        }
                                        include "bill/update.php";
                                        break;
                                        case 'updatedh':
                                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                                
                                            $id = $_POST['id'];
                                            $bill_name = $_POST['bill_name'];
                                            $email = $_POST['bill_email']; 
                                            $bill_address = $_POST['bill_address'];
                                            
                                            $tel = $_POST['bill_tel'];
                                            $ttdh= $_POST['bill_status']; 
                                            update_bill($id,$bill_name,$email,$bill_address,$tel,$ttdh);
                                                $thongbao = "Cập nhật thành công";
                                               }
                                                $listbill=loadall_bill();
                                                include "bill/listbill.php";
                                                
                                                break;
                    
                    default: 
                    include "home.php";
                    break;
                      }
    
 }else{
 
 include "home.php";

 }
 include "footer.php";
}else{
    session_unset();
	header('Location: login.php');
}

 ?>