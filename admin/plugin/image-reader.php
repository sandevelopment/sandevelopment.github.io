<style media="screen">
/* NOTE: stylenya harus disini biar gak hancur */

/*style for edit profil - masukin gambar*/
#fileDisplayArea {
width: 100%;
overflow-x: auto;
}
#fileDisplayArea img {
overflow-x: auto;
width:150px;height:150px;
display: block;
    margin-left: auto;
    margin-right: auto;
}

#fileDisplayArea2 {
width: 100%;
overflow-x: auto;
}
#fileDisplayArea2 img {
overflow-x: auto;
width:150px;height:150px;
display: block;
    margin-left: auto;
    margin-right: auto;
}
/*end*/
</style>

<script type="text/javascript">
window.onload = function() {
  var fileInput = document.getElementById('fileInput');
  var fileDisplayArea = document.getElementById('fileDisplayArea');

  fileInput.addEventListener('change', function(e) {
    var file = fileInput.files[0];
    var imageType = /image.*/;

    if (file.type.match(imageType)) {
      var reader = new FileReader();

      reader.onload = function(e) {
        fileDisplayArea.innerHTML = "";

        var img = new Image();
        img.src = reader.result;

        fileDisplayArea.appendChild(img);
      }

      reader.readAsDataURL(file);
    } else {
      fileDisplayArea.innerHTML = "File not supported!"
    }
  });


  var fileInput2 = document.getElementById('fileInput2');
  var fileDisplayArea2 = document.getElementById('fileDisplayArea2');

  fileInput2.addEventListener('change', function(e) {
    var file2 = fileInput2.files[0];
    var imageType2 = /image.*/;

    if (file2.type.match(imageType2)) {
      var reader2 = new FileReader();

      reader.onload = function(e) {
        fileDisplayArea2.innerHTML = "";

        var img2 = new Image();
        img.src = reader2.result;

        fileDisplayArea2.appendChild(img2);
      }

      reader.readAsDataURL(file2);
    } else {
      fileDisplayArea2.innerHTML = "File not supported!"
    }
  });
}

</script>
