    <!--  Separate Popper and Bootstrap JS  -->
    <script src="vendor/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="vendor/assets/js/popper.min.js"></script>
    <script src="vendor/assets/js/bootstrap.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

      <script src="vendor/assets/js/sweetalert2.all.min.js"></script>


     
<script>
$('.tombol').click(function(){
  
  Swal({
  title: 'Are you sure?',
  text: "It will permanently deleted !",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  Swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  );
})
  
})
</script>
