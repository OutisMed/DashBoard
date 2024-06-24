  

			<!------main-content-end----------->
              
         <!----footer-design------------->
        <footer class="footer bg-light text-dark text-center">
                <div class="container-fluid">
                    <div class="footer-in text-center">
                        <p class="mb-0 w-100">&copy 2024 Portail Universitaire . All Rights Reserved.</p>
                    </div>
                </div>
        </footer>
</div>


<!-------complete html----------->


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../assets/js/popper.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/js/jquery-3.3.1.min.js"></script>
   <script src="../assets/js/script.js"></script>

   <script src="../assets/js/jquery.js"></script>
    <script src="../assets/css/summernote/summernote-lite.min.js"></script>

    <!------- Script pour afficher l'éditeur de texte----------->
    <script>
        function display_image_edit(file)
        {
             document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
        }
    </script>
        <script>
        $('#summernote').summernote({
            placeholder: 'Votre contenu',
            tabsize: 2,
            height: 200
        });

        $('#editor').summernote({
            placeholder: 'Votre contenu',
            tabsize: 2,
            height: 200,
        });

        $('#message').summernote({
            placeholder: 'Votre message',
            tabsize: 2,
            height:70,
        });
        $('#projet').summernote({
            placeholder: 'Votre message',
            tabsize: 2,
            height:120,
        });
        </script>


  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });

		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });

	   });
  </script>





  </body>

  </html>


