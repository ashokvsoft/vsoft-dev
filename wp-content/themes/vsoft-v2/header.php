<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsoft-v2
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-Soft Website</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/vsoft-dev/wp-content/themes/vsoft-v2/assets/css/style.css">
   

    
</head>
<body  <?php body_class(); ?>>
<header>
    <!-- START: RUBY DEMO HEADER -->
<div class="ruby-menu-demo-header">
      <!-- ########################### -->
      <!-- START: RUBY HORIZONTAL MENU -->
      <div class="ruby-wrapper">
        <button class="c-hamburger c-hamburger--htx visible-xs">
          <span>toggle menu</span>
        </button>
        <ul class="ruby-menu">
            <li><a href="#"><img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/v-soft-logo.png" alt="v-soft" ></a></li>
            
            <li class="ruby-menu-item"><a href="#">Knowledgebase</a></li>
            
            

            
            <li class="ruby-menu-mega-know"><a href="#">Expertise</a>
                <div style="height: auto;" class="">
                    <ul class="ruby-menu-mega-know-nav">

                        <li class="ruby-menu-item">
                            <a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Automotive</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        </li>

                        <li class="hidden-md">
                            <a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> BFSI</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        </li>

                        <li><a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Government</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        
                        </li>

                        <li><a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Healthcare</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        </li>

                        <li><a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Insurance</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        
                        </li>


                        <li><a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Manufacturing</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        
                        </li>

                        <li>
                            <a href="#">
                            <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Automotive.png" width= "24" height= "24" alt="Automotive"> Media</a>
                            <div class="ruby-grid ruby-grid-lined" style="height: auto;">
                                <div class="ruby-row">
                                    <div class="ruby-col-3">
                                        <img src="http://localhost/vsoft-dev/wp-content/uploads/2025/08/Frame-media.png" alt="media">
                                    </div>
                                </div>
                            </div>
                            <span class="ruby-dropdown-toggle"></span>
                        
                        </li>
                    </ul>
                </div>
                <span class="ruby-dropdown-toggle"></span>
            </li>
            <li class="ruby-menu-right"><a href="#">Contact</a></li>
            <li class="ruby-menu-right"><a href="#">Locations</a></li>
        </ul>
      </div>
      <!-- END:   RUBY HORIZONTAL MENU -->
      <!-- ########################### -->

    </div>
<!-- END: RUBY DEMO HEADER -->


</header>