<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post() ?>
<?php  the_content(); ?>
<?php endwhile; endif; ?>
<!-- SERVICES -->
<div class="container-fluid">
		<div class="container services w-100">
			<div class="text-center pt-5 pb-5 services-title text-uppercase">Servicios</div>
			<div class="card-group">
                <?php get_sidebar('servicios'); ?>
			</div>
		</div>
</div>
<!-- SERVICES -->
<!-- GALLERY -->
<div class="container-fluid">

	<div class="text-uppercase text-center galeria-tittle">Galeria</div>
	  <div class="gallery d-flex align-items-center justify justify-content-center flex-wrap">
	    <figure>
	    	<img src="images/card1.jpeg" alt="" data-toggle="modal" data-bigimage="images/slider1.png" data-target="#myModal" class="img-fluid">
	    	<figcaption class="text-white">Fig1. - A view of the pulpit rock in Norway.</figcaption>
	    </figure>

	    <figure>
	    	<img src="images/card2.jpeg" alt="" data-toggle="modal" data-bigimage="images/card2.jpeg"  data-target="#myModal" class="img-fluid">
	    	<figcaption class="text-white">Fig1. - A view of the pulpit rock in Norway.</figcaption>
	    </figure>
	    <figure>
	    	<img src="images/card3.jpeg" alt="" data-toggle="modal" data-bigimage="images/card3.jpeg"  data-target="#myModal" class="img-fluid">
	    	<figcaption class="text-white">Fig1. - A view of the pulpit rock in Norway.</figcaption>
	    </figure>
	    <figure>
	    	<img src="images/card1.jpeg" alt="" data-toggle="modal" data-bigimage="images/card1.jpeg"  data-target="#myModal" class="img-fluid">
	    	<figcaption class="text-white">Fig1. - A view of the pulpit rock in Norway.</figcaption>
	    </figure>
	    <figure>
	    	<img src="images/card2.jpeg" alt="" data-toggle="modal" data-bigimage="images/card2.jpeg"  data-target="#myModal" class="img-fluid">
	    	<figcaption class="text-white">Fig1. - A view of the pulpit rock in Norway.</figcaption>
	    </figure>
	  </div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">

	      
	      <div class="modal-body">

	       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>        
	                <img src="//media.tenor.com/images/556e9ff845b7dd0c62dcdbbb00babb4b/tenor.gif" alt="" id="image" class="img-fluid">
	      </div>

	    </div>
	  </div>
	</div> 
</div>

<!-- GALLERY -->

<!-- CLIENTS -->
 <div class="container text-center marcas">
 	<div class="text-center text-uppercase marca-tittle">CONFIAN EN NOSOTROS</div>
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mt-5 mb-5">
            <div class="carousel-item active">
								<?php get_sidebar('servicios-image'); ?>
            </div>
        </div>
    </div>
</div>


<!-- CLIENTS -->

<?php get_footer(); ?>