<?php REQUIRE 'head.php'; ?>
<?php #REQUIRE 'action_dlt.php'; ?>

<script type="text/javascript">
	
document.getElementById('imediato').onclick = function() {
   document.write(1 + 1);
}​;​



</script>


<!-- content here -->

<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-5 text-center">	    	
		    <h3>Você prefere receber</h3> <br><br><br>	    
	    	<form method="POST" id="dlcMonetario">
		    	
		    	<button type="submit" id="imediato" name ="choice" class="btn btn-primary btn-lg" value="500">R$500,00<br>Agora</button>
		    	<span> ou </span>    		
		    	<button type="submit" id="atrasado" name ="choice" class="btn btn-primary btn-lg" value="1000">R$1000,00<br>Em 1 Semana</button>
		    	<p id="teste"></p>

	    	</form>
 	    </div>
	</div>
</div>

<!-- content here/end -->
<?php REQUIRE 'footer.php'; ?>
   







    
