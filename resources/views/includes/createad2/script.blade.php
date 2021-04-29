 <script>
        $(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
// 	to remove card
  $(this).parent().remove();
// to clear image
  // $(this).parent().find('.imagePreview').css("background-image","url('')");
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});

 $(".next-step,.skip-step").click(function (e) {
			var $activeN = $('#wizardNav .nav-link.active').next();
			$activeN.removeClass('disabled');
			$activeN.prev().addClass('pass');
			$activeN.trigger("click");
		});
		$(".prev-step").click(function (e) {
			var $activeP = $('#wizardFormNav .nav-link.active').prev();
			$activeP.trigger("click");
			if ($activeP.hasClass('active')) {
				$activeP.removeClass('pass');
			} else {
				$activeP.addClass('pass')
			};
		});
    </script>




      <!--  Separate Popper and Bootstrap JS  -->
      <script src="vendor/assets/js/jquery-3.5.1.slim.min.js"></script>
      <script src="vendor/assets/js/popper.min.js"></script>
      <script src="vendor/assets/js/bootstrap.min.js"></script>
  
      <!-- AOS JS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>


    <script src="vendor/assets/js/jquery-3.5.1.slim.min.js"></script>
     <script src="vendor/assets/js/popper.min.js"></script>
     <script src="vendor/assets/js/bootstrap.min.js"></script>
 

     <script>
   document.getElementById('tel').onclick = function changee() {

   document.getElementById('tel').textContent = "089517322791";
   document.getElementById('tel').style = "Color: grey";

   

   
}

document.getElementById('email').onclick = function d() {
  document.getElementById('email').textContent = "ichsandwihimawan@gmail.com";
  document.getElementById('email').style = "Color: grey";
}


document.getElementById('tel1').onclick = function b() {
  document.getElementById('tel1').textContent = "089517322791";
  document.getElementById('tel1').style = "Color: grey";
}


document.getElementById('email1').onclick = function c() {
  document.getElementById('email1').textContent = "ichsandwihimawan@gmail.com";
  document.getElementById("email1").style = "Color: grey";
}
     </script>
     <!-- AOS JS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>