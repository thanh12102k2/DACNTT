<?php
            session_start();
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['submit']);
                header('Location:index.php');
            }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
	<title>7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET</title>
  <link rel="shortcut icon" type="image/png" href="/Web/admin/product/uploads/avt3.png"/>
    <link rel="stylesheet" href="7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET.css" />
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET THU HÚT MỌI ÁNH</title>
</head>
<!-----------------------HEARDER ----------------------------------------->
<header>
<a href="/Web/index.php"><img src="/Web/images/avt.png" class="logo" style="width:130px;"><!--LOGO --></a>
  <div id="menu" style="margin-top:10px;">
                    <ul>
                        <li><a href="/Web/index.php">Home</a></li><!--Trang chủ -->
                        <li>
                            <a href="#">Top</a><!--Top -->
                            <ul class="sub-menu">
                                <li><a href="/Web/thucdon.php?id_category=1">Hoodie</a></li>
                                <li><a href="/Web/thucdon.php?id_category=2">T-Shirt</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Bottom</a><!--Bottom -->
                            <ul class="sub-menu">
                                <li><a href="/Web/thucdon.php?id_category=4">Trouser</a></li>
                                <li><a href="/Web/thucdon.php?id_category=3">Short</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Collection</a><!--Collection -->
                            <ul class="sub-menu">
                                <li><a href="/Web/thucdon_2.php?id_sanpham=1">One piece</a></li>
                                <li><a href="/Web/thucdon_2.php?id_sanpham=2">Spring of the Y</a></li>
                                <li><a href="/Web/thucdon_2.php?id_sanpham=3">Liliwyun</a></li>
                            </ul>
                        </li>
                        <li><a href="/Web/AboutUs/AboutUs.php">About us</a></li><!--About us -->
                    </ul>
                </div>
        
        <div class="other"><!--Other -->
            
            
            <div class="login"> 
                <?php
                
                if(isset($_SESSION['submit'])) {
                    $user_admin = $_SESSION['submit'];
                            if($user_admin == 'Admin_Chu') {
                                
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="/Web/admin/login.php"><i class="fas fa-user-edit"></i>Admin</a> <br>                               
                                <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                            else{
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="#"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>                           
                                <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                } 
                else {
                             echo '<a href="/Web/login.php"">Đăng nhập</a>';
                                }
                ?>
                    
            </div>
            
            
            <li><a href="/Web/cart.php" style="text-decoration:none; " ><i class="fas fa-shopping-bag"></i></a> <?php
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num']; // đếm tổng số item
                        }
                        ?>
                        <span><?= $count ?></span></li><!--icon GIỎ HÀNG -->
        </div>
        
        
</header>
<style>
    
    li{
        list-style: none;/* bỏ chấm tròn của Others*/
    }
    body{/* chỉnh màu background menu (màu ô chứa chữ ko thay đổi)*/
        background-color: white;
    }
    header{/* chỉnh menu*/
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 5%;
        margin-top:0px; 
        position:fixed; 
        top:0;
        left:0;
        right:0;
        background-color: #ffffff;
        z-index: 1;
        box-shadow: 2px 2px 2px rgba(241, 241, 241, 0.873);
        float: left;
    }



    /* ---------------chỉnh logo----------------*/
    header img{
        width:150px;
        cursor:pointer;
    }



    /* ---------------chỉnh other (search,shopping,user)----------------*/
    .other{
        display:flex;
    }
    .other >li{
        padding:0 12px;
    }
    .other >li:first-child{
        position:relative;
    }
    .other >li:first-child input{/* chỉnh ô tìm kiếm*/
        width:100%;/* chỉnh  độ dài ô tìm kiếm*/
        height:100%;/* chỉnh độ rộng ô tìm kiếm*/
        margin-top: -20px;
        margin-left: -20px;
        border:10;
    }
    .other >li:first-child i{
        position:absolute;
        right:10px;/* chỉnh vị trí  Icon search */
    }


    /* ---------------------------chỉnh Menu-------------------------------*/
    .login {
    padding: 0px;
    border: 1px solid rgb(196, 196, 196);
    border-radius: 3px;
    margin: 0 50px;
    position: relative;
    }
    .login:hover {
    box-shadow: 0px 0px 3px 0px grey;
    cursor: pointer;
    }
    .login a {
    padding: 15px;
    text-decoration: none;
    color: #676767;
    font-weight: 700;
    }
    .login:hover .logout{
    display: block;
    }
    .login .logout{
    display: none;
    position: absolute;
    top: 2.3rem;
    left: 0px;
    z-index: 10;
    width: 150%;
    border: 1px solid grey;
    border-radius: 5px;
    padding: 10px 0;
    }
    .login .logout a{
    color: black;
    font-weight: 500;
    border-radius: 5px;
    margin: 10px 0;
    }
    .login .logout a:hover{
    opacity: 0.8;
    }
    #menu {
        list-style:none;
        display: flex;
    }

    #menu ul{
        list-style-type: none;
        background:#ffffff;   /*  chỉnh màu ô chứa chữ */
        text-align: center;
    }
    #menu ul li{
        color:#0f0f0f;
        display:inline-table;
        width:120px;/* khoảng cách giữa các chữ trong menu */
        height:30px;/* khoảng cách giữa menu và banner*/
        line-height: 50px;/* khoảng cách giữa menu và thanh tìm kiếm*/
        position:relative;   /* chỉnh khung menu xuống thành 1 hàng dọc */
    
    }
    #menu ul li a{
        color:#060606;/* chỉnh màu chữ trên thanh menu */
        text-decoration: none;
        display:block;
        font-size:17px;/* chỉnh cỡ chữ trên thanh menu*/
    }
    #menu ul li a:hover{
        background:rgba(123, 123, 123, 0.262);/* chỉnh màu Ô lúc dê chuột vào */
        color:#333;/* chỉnh màu chữ trong Ô lúc dê chuột vào */
        
    }
    #menu ul li >.sub-menu{
        display: none;
        position: absolute;
        background-color:  #ffffff;/* chỉnh màu Ô đa cấp lúc dê chuột vào */
        z-index: 1;
        list-style: none;
    }

    #menu ul li:hover .sub-menu{
        display:block;
    }
</style>

<h2><i class="fas fa-star"></i> 7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET THU HÚT MỌI ÁNH NHÌN</h2>
<h5>Từ một chiếc áo thể thao học đường, Varsity đã trở thành một biểu tượng đương đại của thời trang đường phố, với rất nhiều phong cách phối đồ đa dạng. Cùng DirtyCoins ‘chốt’ ngay những tips phối đồ cho Varsity jacket vừa cá tính vừa năng động nha!</h5></br>
<div class="image">
    <img src="ảnh1.1.png" />
</div>
<h5>Những năm gần đây, xu hướng thời trang đường phố lên ngôi cũng là lúc Varsity jacket một lần nữa tạo nên trào lưu mới trong nền thời trang thế giới. Những chiếc áo khoác vốn được xem là biểu tượng cho sức trẻ học đường nay được biến tấu với nhiều thiết kế thời thượng và cá tính hơn. Bạn có thể tìm hiểu rõ hơn về nguồn gốc của loại jacket này qua bài viết này và nắm ngay tips phối đồ với Varsity jacket sao cho đẹp nhất qua những cách dưới đây!</h5></br>
<h6>VARSITY JACKET + QUẦN ỐNG RỘNG</h6></br>
<h5>Công thức được coi như mẫu mực của cộng đồng những người yêu thích hiphop, sự kết hợp này khiến bạn có một diện mạo rất bụi bặm nhưng không kém phần hiện đại. Tuy không phải quá kén dáng người, nhưng bạn cần phải chú ý một chút khi chọn những item để layer với nhau mà không tạo cảm giác quá rối rắm hay luộm thuộm. </h5></br>
<h5>Bật mí một chút là bạn hoàn toàn có thể sử dụng những chất liệu ‘lạ’ như quần nhung tăm (còn gọi là corduroy) hay thậm chí là lông cừu (wool / fleece) để có một outfit mang chất retro nhưng cũng rất cá tính đó nha!</h5></br>
<div class="image">
    <img src="ảnh2.2.png" />
</div>
<h5>(Nguồn: pinterest, pause magazine)</h5></br>
<h5>Varsity jacket cổ điển có form classic fit, tức loại áo này sẽ vừa với dáng người mặc và có ống tay rộng vì là áo khoác thể thao. Sau này, khi đã bước chân ra khỏi thời trang học đường và len lỏi vào thế giới streetwear, chiếc áo này mới dần được biến tấu thêm form oversize fit.</h5></br>
<h6>VARSITY JACKET + QUẦN JEANS</h6></br>
<h5>Cách phối đồ ‘cổ điển’ đã từng cực kì phổ biến tại Mĩ thời kì thập niên 50, 60 của thế kỉ trước, khi những chiếc quần jeans slim fit trở thành một biểu tượng của phong trào nổi loạn và cách tân văn hóa đương thời. Trải qua nhiều năm, sự kết hợp giữa Varsity Jacket và quần jeans vẫn giữ nguyên hơi thở hiện đại khi được phối cùng phụ kiện hay được biến tấu cùng nhiều dáng quần jeans, đa dạng cho cả nam và nữ.</h5></br>
<h5>Sự kết hợp đầy khỏe khoắn giữa Varsity Jacket và jeans thịnh hành trong suốt một thời gian khá dài và form áo có ống tay rộng nhưng phần thân vừa vặn trở thành một định nghĩa cho ‘classic fit’ đối với Varsity Jacket. Tới thời kỳ cuối thập niên 90, đầu 2000, khi những form dáng oversize trở nên phổ biến trong cộng đồng thời trang đường phố, Varsity Jacket cũng được biến tấu với phần thân dài và rộng hơn, Tuy nhiên, vẫn không khó để bắt gặp những chiếc áo Varsity với classic fit được những thương hiệu như Tommy Hilfiger, Polo Ralph Lauren ‘trình làng’. </h5></br>
<div class="image">
    <img src="ảnh3.3.png" />
</div>
<h5>(Nguồn: pinterest, pause magazine)</h5></br>
<h6>VARSITY JACKET + QUẦN JOGGER</h6></br>
<h5>Đây được xem là cách phối đồ cơ bản và dễ áp dụng nhất, set đồ này phù hợp với nhiều hoàn cảnh và mang đến sự thoải mái nhưng không kém phần khỏe khoắn. Đừng ngại mix thêm một đôi hype hay chunky sneakers nữa để có một outfit ‘chuẩn’ streetwear nha!</h5></br>
<div class="image">
    <img src="ảnh4.4.png" />
</div>
<h5>(Nguồn: pinterest)</h5></br>
<h5>Bật mí là bạn có thể tham khảo mẫu quần mới nhất của DirtyCoins <a href="#">tại đây</a></h5></br>
<h5>Đây chắc chắn sẽ là set đồ hoàn hảo cho những dịp gặp mặt trong thời tiết cuối năm.</h5></br>
<h6>VARSITY JACKET + ÁO CROPTOP</h6></br>
<h5>Đây sẽ là lựa chọn thích hợp cho các bạn nữ muốn khoe vòng eo nhỏ xinh một cách sexy và khéo léo, trong khi đó chiếc áo varsity sẽ mang đến sự cá tính hơn cho toàn set đồ của bạn đó! Hãy chú ý tới màu sắc của croptop để có thể hài hòa với tông màu của áo Varsity mặc cùng nha!</h5></br>
<div class="image">
    <img src="ảnh5.5.png" />
</div>
<h5>(Nguồn: fr24news, dailymail)</h5></br>




<!--------------------------------BÀI VIẾT LIÊN QUAN---------------------- -->
<hr  width="35.6%" align="center" /><!--đường kẻ ngăn cách giữa bài viết liên quan với ảnh trên -->
<h1>BÀI VIẾT LIÊN QUAN</h1>

<ul id="list-new">
    <div class="item"><!--sản phẩm 1 -->
        <img src="new1.jpg"width="345" height="345"  alt="">                   
        <div class="name">DIRTYCOINS X LIL' WUYN: CÚ BẮT TAY </div>
        <div class="name">ĐẬM CHẤT VĂN HÓA ĐƯỜNG PHỐ</div>
    </div>
    <div class="box-left" >
        <a href="/Web/AboutUs/Dirtycoins/Dirtycoins.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>   
    <div class="item"><!--sản phẩm 1 -->
        <img src="new3.jpg"width="345" height="345"  alt="">                   
        <div class="name">THÔNG TIN CHƯƠNG TRÌNH </div>
        <div class="name">THẺ THÀNH VIÊN DIRTYCOINS</div>
    </div>
    <div class="box-left" >
        <a href="/Web/AboutUs/THÔNG TIN CHƯƠNG TRÌNH/THÔNG TIN CHƯƠNG TRÌNH.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>       
</ul>
</html>

</html>



<!--------------------FOOTER--------------------------- -->
<footer class="section-p1"><!--mục footer -->
    <div class="col">
        <h4>HỆ THỐNG CỬA HÀNG</h4><!--Hệ thông cửa hàng -->
        <p>Quận 10 - 561 Sư Vạn Hạnh, Phường 13.</p>
        <p>Quận Tân Bình - 136 Nguyễn Hồng Đào, Phường 14.</p>
        <p>Quận Gò Vấp - 41 Quang Trung, Phường 3.</p>
        <p>Đống Đa - 49-51 Hồ Đắc Di, Phường Nam Đồng.</p>
    </div> 
    <div class="col">
        <h4>THÔNG TIN LIÊN HỆ</h4><!--Thông tin liên hệ -->
        <p>Tuyển dụng:<a href ="liên kết "> link Website </a> </p>
        <p>Website:<a href ="liên kết "> link Website </a></p>
        <p>Liên hệ CSKH: support@<a href ="liên kết "> link Website </a></p>
        <p>For business: contact@<a href ="liên kết "> link Website </a></p>
    </div>
    <div class="col">
        <h4>FOLLOW US ON SOCIAL MEDIA</h4><!--Follow us on social media-->
        <li><i class="fa fa-facebook"></i></li>
        <li><i class="fa fa-instagram"></i></li>
        <li><i class="fa fa-youtube"></i></li>        
    </div>    
</footer>
<style>
    *{
    margin: 0;
    padding: 0;
}
i{/*  chỉnh icon ngôi sao */
    font-size:16px;
    text-align: center;
    padding-right: 10px;
}

h2{/*  chỉnh ô chứa chữ H2 */
text-align: center;
font-size:23px; 
padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
padding-right:343px;
padding-bottom:70px;
padding-top:100px;
}

h5{/*  chỉnh ô chứa chữ H5 */
    text-align: left;
    font-size:16px; 
    font-weight: 50;
    padding-left:340px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-top:10px;
    padding-bottom:18px;


    }

h6{/*  chỉnh ô chứa chữ H6 */
    text-align: left;
    font-size:17.5px; 
    font-weight: 600;
    text-decoration: underline;
    padding-left:355px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:10px;
    margin-top:-10px;/*  chỉnh khoảng cách so với chữ bên trên */
}
.image{/*  chỉnh ảnh trong mục body */
    align-items: center;
    text-align: center;
}



/*-----------------BÀI VIẾT LIÊN QUAN--------------------------*/


hr{/*  chỉnh thanh kẻ giữa bài viết liên quan với ảnh trên */
    margin-top:70px;/*  chỉnh khoảng cách so với chữ bên trên */padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    margin-left:313px;
}
h1{/*  chỉnh ô chứa chữ H1 */
    text-align: left;
    font-size:16px; 
    font-weight: 550;
    padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:18px;
    margin-top:15px;/*  chỉnh khoảng cách so với chữ bên trên */
}
#list-new {/*  chỉnh ảnh bài viết liên quan */
    font-size:10px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    padding-left:190px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:317px;
    margin-top:40px;

}

#list-new .item .name {/*  chỉnh chữ bài viết liên quan */
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


#list-new .box-left{
    text-align: center;
    margin-top:435px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-490px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:12px;/*chỉnh size chữ*/
    width: 80px;/*chỉnh size dài bóng đen*/
    height: 30px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}


/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:70px;
    justify-content: space-around;
    margin-bottom:0px;
    padding-bottom: 20px;   /*chỉnh size background đen */
    padding-left:150px;
    
}
footer.col{
    
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    margin-top: 100p;
}
footer h4{   /*chỉnh size chữ H4*/
    color:rgb(255, 255, 255);
    font-size: 16px;
    padding-bottom:30px;
    margin-top:40px;
    font-weight: bold;
}
footer p{  /*chỉnh size chữ P*/
    color:rgb(255, 255, 255);
    font-size: 13px;
    text-decoration:none;
    margin-bottom:15px;

 
}
footer li{ /*chỉnh icon fb,instagram,youtube*/
    color:#fff;
    margin-top: 3px;
    font-weight: bold;
    
   
}
  @media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: 1500px;
    }

</style>

<style>

</style>