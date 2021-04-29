 <script src="vendor/assets/js/jquery-3.5.1.slim.min.js"></script>
     <script src="vendor/assets/js/popper.min.js"></script>
     <script src="vendor/assets/js/bootstrap.min.js"></script>
     <script>
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
 
     <!-- AOS JS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>