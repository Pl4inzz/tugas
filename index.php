<?php
    if(!isset($_GET['page'])){
        header('Location: index.php?page=login');
        exit();
    }
//ini test github
 include 'components/header.php'; 

?>


            <main>
                <div class="container-fluid px-4 mt-3">
                   <?php 
            if($_GET['page'] == 'register'){
                include 'pages/register.php';
            } elseif($_GET['page'] == 'login') {
                include 'pages/login.php';
            } elseif($_GET['page'] == 'databuku') {
                include 'pages/databuku.php';
            } elseif($_GET['page'] == 'datapeminjam') {
                include 'pages/datapeminjam.php';
            } elseif($_GET['page'] == 'proseslogin'){
               echo $_POST['password'];
            }
            
            else {
                include 'pages/dashboard.php';
            }

?>
                </div>
            </main>

<?php include 'components/footer.php'; ?>