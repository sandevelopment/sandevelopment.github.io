<!-- Rubah All Atribut -->
<style media="screen">
  #portofolio li{
    background: -moz-linear-gradient(-45deg, rgba(18,160,212,1) 0%, rgba(49,105,178,0.9) 100%);
    background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(18,160,212,1)), color-stop(100%, rgba(49,105,178,0.9)));
    background: -webkit-linear-gradient(-45deg, rgba(18,160,212,1) 0%, rgba(49,105,178,0.9) 100%);
    background: -o-linear-gradient(-45deg, rgba(18,160,212,1) 0%, rgba(49,105,178,0.9) 100%);
    background: -ms-linear-gradient(-45deg, rgba(18,160,212,1) 0%, rgba(49,105,178,0.9) 100%);
    background: linear-gradient(135deg, rgba(18,160,212,1) 0%, rgba(49,105,178,0.9) 100%);
    -webkit-box-shadow: 1px 1px 5px -1px rgba(0,0,0,0.63);
    -moz-box-shadow: 1px 1px 5px -1px rgba(0,0,0,0.63);
    box-shadow: 1px 1px 5px -1px rgba(0,0,0,0.63);
    color: #fff;
  }

</style>

<div class="kotak-title">
  <!-- Title Halaman -->
  <span id="page-data"><b style="color:#3169b2;">Portofolio</b></span>
  <a href="#" id="open-form"><span id="page-data"><b style="color:#3169b2;"><i class="fa fa-plus"></i> Tambah Data</b></span></a>
  <a href="#" id="close-form" class="hide"><span id="page-data"><b style="color:#3169b2;"><i class="fa fa-angle-left"></i> Back</b></span></a>
</div>

<div class="kotak-content" id="info-data" style="padding:20px;">
  <div class="row" >
    <table id="table" class="display" style="width:100%;overflow-x:scroll;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th class="th-act">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Harma Madika Hotel</td>
                <td>Website</td>
                <td class="td-act">
                  <a href="#!" class="btn-act-edit"><i class="fas fa-pencil-alt"></i></a>
                  || <a href="#!" class="btn-act-delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td>Mcantery Restaurant</td>
                <td>Mobile Applcation</td>
                <td class="td-act">
                  <a href="#!" class="btn-act-edit"><i class="fas fa-pencil-alt"></i></a>
                  || <a href="#!" class="btn-act-delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>

<!-- Form -->
<div class="kotak-content" id="isi-form" style="padding:20px;">
  <div class="row">
    <form class="" action="" method="post">
      <div class="col-s12 col-m6 col-l6">
        <div class="inside-form">
          <div class="form">
            <label>Name</label>
            <input type="text" placeholder="Input Your Name"/>
          </div>
          <div class="form">
            <label>Catergory</label>
            <input type="text" placeholder="Input Your Email"/>
          </div>
          <div class="form">
            <label>Project Date</label>
            <input type="text" placeholder="Input Subject"/>
          </div>
          <div class="form">
            <label>Subject</label>
            <input type="text" placeholder="Input Subject"/>
          </div>
          <div class="form">
            <label>Description</label>
            <textarea name="name" rows="8" cols="80" placeholder="Input Description"></textarea>
          </div>
        </div>
      </div>
      <div class="col-s12 col-m6 col-l6">
        <div class="inside-form">
          <div class="row">
            <div class="col-s12 col-m6 col-l6">
              <div class="form">
                <div class="pengaturan-gambar">
                  <div style="text-align:center">
                    <img src="../img/admin/no-img.jpg" alt="" width="150px" height="150px">
                  </div>
                  <input type="file" id="fileInput" style="display: none;" accept="image/*" />
                  <input type="button" class="btn-act-edit" style="width:100%;" value="Header Image" onclick="document.getElementById('fileInput').click();" />
                </div>
              </div>
            </div>
            <div class="col-s12 col-m6 col-l6">
              <div class="form">
                <div class="pengaturan-gambar">
                  <div style="text-align:center">
                    <img src="../img/admin/no-img.jpg" alt="" width="150px" height="150px">
                  </div>
                  <input type="file" id="fileInput" style="display: none;" accept="image/*" />
                  <input type="button" class="btn-act-edit" style="width:100%;" value="Support Image" onclick="document.getElementById('fileInput').click();" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <label> Rating </label><br><br>
            <div class="form">
              <input type="number" min="0" max="100" placeholder="Design"/>
            </div>
            <div class="form">
              <input type="number" min="0" max="100" placeholder="Useable"/>
            </div>
            <div class="form">
              <input type="number" min="0" max="100" placeholder="Technology"/>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
