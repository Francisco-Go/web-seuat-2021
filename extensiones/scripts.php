

</main>






    <?php 
    if ($paginaweb == 'raiz' || $paginaweb == 'home'){
      echo '
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/function.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script>
		function may(obj, id){
			obj = obj.toUpperCase();
			document.getElementById(id).value = obj;
		}
	  </script>
      ';
    }elseif ($paginaweb == 'primer_nivel'){
      echo '
	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/function.js"></script>
	  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  <script>
		function may(obj, id){
			obj = obj.toUpperCase();
			document.getElementById(id).value = obj;
		}
	  </script>
	  <script>
		$("#TabPlantelRequisitos").on("click", function (e) {
		  e.preventDefault()
		  $(this).tab("show")
		})
	 </script>
      ';
    }elseif ($paginaweb == 'home'){
      echo '
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/function.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script>
		function may(obj, id){
			obj = obj.toUpperCase();
			document.getElementById(id).value = obj;
		}
	  </script>
      ';
    }else{
      echo '';
    }
    ?>



