<?PHP
session_start();
if(!isset($_SESSION['username'])){
 header('location:../');
}
include 'links.php';
?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        } 
      }

    /* This is loader */

    #table{
      height:70vh;
      width:80vw;
      display:flex;
      justify-content:center;
      align-items:center;
      flex-direction:column;
    } 
    </style>
    
    <script>


    // this function is for ajax call
      function user_data(){
        let xhr = new XMLHttpRequest();
        xhr.open('POST','display.php','TRUE');
        if(xhr.readyState < 4){
          document.getElementById('load').style.display = "";
          }
        xhr.onreadystatechange = function (){
          if(xhr.status == 200 && xhr.readyState == 4){
            document.getElementById('table').innerHTML = xhr.responseText;
          }
        }
        xhr.send();
      }

    </script>
    
<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow mt-1">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?= $_SESSION['username']; ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" onclick="user_data()">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> -->
        </ul>

       
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" id="title">Admin Panel</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <!-- <button type="button" class="btn btn-primary px-4">Print</button> -->
        </div>
      </div>

<!-- ///////////Main content/////////////////////// -->


<div id="table" class="container">
<img src="../images/load.gif" style="height: 5rem; display:none;" id="load">
</div>


