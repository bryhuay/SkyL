<!-- Footer -->
	<footer class="footer-section py-5">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 footer-grids">
					<h3>Contacto</h3>
					<p>Paz Soldan 423 Miraflores </p>
					<p class="my-2"> Arequipa, PERU</p>
					<p class="phone">959933555</p>
					<p class="phone my-2">950306444</p>
					<p class="phone">Mail:
						<a href="mailto:generadores.arequipa@gmail.com ">generadores.arequipa@gmail.com </a>
					</p>
					<p>
						<a href="mailto: operaciones@skylightgeneradores.com "> operaciones@skylightgeneradores.com </a>
					</p>
				</div>
				<div class="col-lg-4 footer-grids">
					<h2>Sky Light</h2>
					<p>SKYLIGHT, se crea en septiembre del 2010 con el fin de dar soluciones y alternativas en el campo de la energía, para lo cual nos especializamos en el rubro de grupos electrógenos, plantas eléctricas y generadores para la atención personalizada de eventos, sucesos y proyectos</p>
				</div>
				<div class="col-lg-4 footer-grids">
					<h3>Redes Sociales</h3>
					<div class="social-lsicon">
								<a href="#" class="social-button youtube">
									<span class="fab fa-youtube"></span>
								</a>
								<a href="#" class="social-button facebook">
									<span class="fab fa-facebook-f"></span>
								</a>
								
							</div>
							<br/>
					<h3>Links</h3>
					
				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	<!-- copyright -->
	<section class="copyright-w3layouts">
		<div class="container">
			<p class="py-xl-4 py-3">© 2018 Exertion . All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts </a>
			</p>
		</div>
	</section>
	<!-- //copyright -->

    <!-- Required common Js -->
     <script src="js/jquery.min.js"></script>
    <!-- //Required common Js -->
	<!-- Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Responsiveslides -->
	<script src="js/easyResponsiveTabs.js"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			//Vertical Tab
			$('#parentVerticalTab').easyResponsiveTabs({
				type: 'vertical', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo2');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Js for bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //Js for bootstrap working -->
</body>

</html>