<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsoft-v2
 */

?>
<footer>

    </footer>
    <!-- jQuery - must be first! -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- jQuery (must come before Owl Carousel JS) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- slider js -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
        $(".autoplay-banner-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,           // Show arrows
            dots: false,         // Hide dots
            navText: ['‹','›']   // Customize arrows
        });
        });
    </script>
    <script>
                $(document).ready(function(){
                    $("#expertise-carousel").owlCarousel({
                        loop: true,
                        margin: 24,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        smartSpeed: 600,
                        responsive:{
                        0:{ items:1 },
                        600:{ items:2 },
                        1000:{ items:3 },
                        1200:{ items:4 }
                        }
                    });
                });

            </script>
	<?php wp_footer(); ?>
</body>
</html>



