<?php
include('./header.php');
include('check_login_sv.php');

$checkTrangThai = '';
$sql7 = "SELECT DISTINCT * FROM admin";
$result7 = mysqli_query($conn, $sql7);
if (mysqli_num_rows($result7) > 0) {
    $row = mysqli_fetch_assoc($result7);
    $checkTrangThai = $row['trang_thai'];
}

?>

<!-- <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section> -->




    <!-- <section class="navbar">
 
        <div class=" row">
        <div class="logo col-2">
            <a href="./index.php" title="Logo">
                <img src="../images/log.png" alt="Restaurant Logo" class="img-responsive">
            </a>
        </div>
        <div class="menu text-right ">
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></span>

                    </button>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">                       
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">                           
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 row col-10">
                            <li class="nav-item ">
                            <div class="offcanvas-header">
                                <h6 class="offcanvas-title" id="offcanvasScrollingLabel"><a class="nav-link" href="index.php"><i class="fas fa-home"></i>Đăng kí học</a></h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>                                    
                            </li>
                            <div class="offcanvas-body ">
                                
                                    <form class="d-flex ">
                                        
                                        <input <?php if ($checkTrangThai == 'Đóng') {
                                            echo 'disabled';
                                        }; ?> class=" me-2" type="search" placeholder="Nhập môn học" onchange="handleGetName(this.value)" aria-label="Search">
                                <button <?php if ($checkTrangThai == 'Đóng') {
                                    echo 'disabled';
                                } ?> class="btn btn-danger tim_kiem" id="btnSearch"><a id="hrefSearch">Tìm kiếm</a></button>
                            </form>
                        </div>
                        <div class="col-3">
                           
                        <li class="nav-item ">                                   
                            <a class="nav-link" href="dangki.php"><i class="far fa-calendar-alt me-1"></i>Các môn đăng kí học</a>
                        </li>
                        </div>
                        <div class="col-1" >
                           
                        <li class="nav-item ">
                                
                                <a class="nav-link " href="../index/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                
                            </li>    
                            </div>                  
                            </div>
                        </ul>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
        </div>

</section> -->


<div class="tuychon">
<nav class="mb-4 navbar navbar-expand-lg navbar-light pink lighten-4">
    <a class="navbar-brand font-bold" href="#">
        <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/log.png" alt="Restaurant Logo" class="img-responsive">
                </a>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link font-bold" href="index.php"><i class="fas fa-home me-1"></i>Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-bold" href="dangki.php"><i class="far fa-calendar-alt me-1"></i>Các môn đăng kí học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-bold" href="../index/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
            </li>
        </ul>
        <form class="form-inline md-form mb-0">
        <!-- <i class="fas fa-search"></i> -->
            <button <?php if ($checkTrangThai == 'Đóng') {
                echo 'disabled';
            } ?> class="btn btn-primary" id="btnSearch"><a id="hrefSearch"><i class="fas fa-search"></i></a></button>
            
            <input <?php if ($checkTrangThai == 'Đóng') {
                        echo 'disabled';
                    }; ?> class="form-control font-bold w-75 ml-3" type="text" placeholder="Search" aria-label="Search" onchange="handleGetName(this.value)" aria-label="Search">
        </form>
    </div>
</nav>
</div> 
   






<div class="main-content bg-light table_sv">
    <div class="container">
        <?php
        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add']; //Displaying Session Message
            unset($_SESSION['add']); //REmoving Session Message
        }
        ?>

        <?php if ($checkTrangThai == 'Đóng') {
            echo '<h6>Trạng thái đăng kí học đã hết hạn</h6>';
        } ?>
    </div>
    <div class="d-flex main-content back_sv">
        <div class="col-sm-2 bg-primary_sv ">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Môn học</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM mon_hoc";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<tr>';
                            echo '<td><a href ="" class ="text-primary ms-2 text-center">' . $row['mh_ten_mon'] . '</a></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-10 ">
            <h5 class="text-center my-3">Lớp học phần</h5>
            <div class="container">
                <table class="table table-hover">
                    <thead class="bg-primary_sv ">
                        <tr>
                            <th scope="col">Tên học phần</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tổng sinh viên</th>
                            <th scope="col">Số sinh viên</th>
                            <th scope="col">Tên phòng</th>
                            <th scope="col">Tuần học</th>
                            <th scope="col">Giờ học</th>
                            <th scope="col">Đăng kí</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="end_sv"></div>
<?php
    include('../index/footer.php');
?>
<script>
    var search;

    function handleGetName(value) {
        search = value;
    }

    $(document).ready(async function() {
        $("#btnSearch").click(function() {
            $("#hrefSearch").attr("href", `search.php?q=${search}`)
        })
    })
</script>