<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="../js/jquery.js" charset="utf-8"></script>
    <script src="js/master.js" charset="utf-8"></script>
    <script src="../js/font-awesome.js" charset="utf-8"></script>
    <?php include 'plugin/image-reader.php'; ?>
    <!-- DATA TABLE NEEDED -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
  </head>
  <body>
      <div class="">
        <div class="menu-mobile">
          <div class="mm-head">
            <img class="circle-profil" src="../img/asdasd.png" alt="" width="100px;" height="100px">
            <br><br>
            <span>Hello, Agung</span><br>
            <span><b>Admin</b></span>
            <a href="#!" class="close-mm">
              <span class="btn-1" style="background-color:#12a0d4;">
                <i class="fas fa-times" style="color:#f2f2f2;"></i>
              </span>
            </a>
          </div>
          <div class="mm-menu">
            <div class="menu-link">
              <ul class="menus-link" style="width:100%">
                <a href="?show=home" id="home"><li>
                  <span><i class="fa fa-home"></i></span>
                  <span class="menu-cont-link"> Home</span>
                </li></a>

                <a href="?show=portofolio" id="portofolio"><li>
                  <span><i class="fas fa-check-square"></i></span>
                  <span class="menu-cont-link"> Portofolio</span>
                </li></a>

                <a href="?show=project" id="project"><li>
                  <span><i class="fa fa-code"></i></span>
                  <span class="menu-cont-link"> Project</span>
                </li></a>

                <a href="?show=keuangan" id="keuangan"><li>
                  <span><i class="fas fa-money-bill-alt"></i></span>
                  <span class="menu-cont-link"> Keuangan</span>
                </li></a>

                <a href="#!" id="logout"><li>
                  <span><i class="fas fa-sign-out-alt"></i></span>
                  <span class="menu-cont-link"> Logout</span>
                </li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="menu-atas">
          <div class="menu-atas-right" style="margin-top:30px;">
            <a href="#" style="float:right;display:none;" class="open-mm show-s">
              <span class="btn-1">
                <i class="fas fa-bars" style="color:#3169b2;"></i>
              </span>
            </a>
            <a href="inc/logout.php" class="hide-s" style="float:right">
              <span class="btn-1">
                <i class="fas fa-sign-out-alt" style="color:#3169b2;"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="menu hide-s col-m4 col-l3" style="margin-top:-150px;">
          <div class="menu-wrapper">
            <div class="menu-header">
              <div class="menu-header-content">
                <div class="menu-profil-img">
                  <img class="circle-profil" src="../img/asdasd.png" alt="" width="70px;" height="70px">
                </div>
                <div class="menu-profil-text">
                  <span>Hello, Agung</span><br>
                  <span><b>Admin</b></span>
                </div>
              </div>
            </div>

            <div class="menu-link">
              <ul class="menus-link">
                <a href="?show=home" id="home"><li>
                  <span><i class="fa fa-home"></i></span>
                  <span class="menu-cont-link"> Home</span>
                </li></a>

                <a href="?show=portofolio" id="portofolio"><li>
                  <span><i class="fas fa-check-square"></i></span>
                  <span class="menu-cont-link"> Portofolio</span>
                </li></a>

                <a href="?show=project" id="project"><li>
                  <span><i class="fa fa-code"></i></span>
                  <span class="menu-cont-link"> Project</span>
                </li></a>

                <a href="?show=keuangan" id="keuangan"><li>
                  <span><i class="fas fa-money-bill-alt"></i></span>
                  <span class="menu-cont-link"> Keuangan</span>
                </li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="content menu col-m8 col-l9">
          <div class="all">
            <div class="content-container">
              <?php include 'content/content.php'; ?>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript">
    function click1() {
      var x = document.getElementById("1-bawah");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
    }
    </script>
  </body>
</html>
