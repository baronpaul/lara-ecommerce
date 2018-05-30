<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Micromaxx</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/font-awesome.css" />
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/linearicon.css" />
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/styles.css" />
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/responsive.css" />
</head>
<body>
    <header>
        <div id="top_section">
            <div class="container">
                <div class="top_nav">
                    <ul>
                        <li><a href="">Bulk Purchase</a></li>

                        <li><a href="">Contact us</a></li>

                        <li><a href="">Return Policy</a></li>

                        <li><a href="">Sign up</a></li>

                        <li class="login"><a href="" class="login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="main_section">
            <div class="container">
                
                <div class="flex-container">
                    <div class="logo">
                        <img src="assets/images/micromaxx-logo.png" />
                    </div>

                    <div class="search">
                        
                    </div>

                    <div class="extras">
                        <div class="likes">
                            <span class="lnr lnr-heart"></span> Favourites
                        </div>
                        
                        <div class="cart">
                            <span class="lnr lnr-cart"></span> Cart
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

        <div id="main_nav">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="">Phones & Tablets</a>
                            <div class="dropdown_wrap">
                                <div class="container">
                                    <div class="dropdown_ins">
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li><a href="">Computers</a></li>
                        
                        <li><a href="">Electronics</a></li>
                        
                        <li><a href="">Home & Kitchen</a></li>
                        
                        <li><a href="">Sports & Fitness</a></li>
                        
                        <li><a href="">Drinks</a></li>
                        
                        <li><a href="">Medical Equipment</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <main>
        <div class="container">
            
            <section class="banner_area"><!-- banner_area -->
                <div class="main_banner">
                    <div class="banner_ins">
                        
                    </div>
                </div>

                <div class="side_banner">
                    <div class="side_banner_itm"></div>

                    <div class="side_banner_itm"></div>

                    <div class="side_banner_itm"></div>
                </div>
            </section>


            <section class="deals"></section>


            <section class="index_category_wrap">
                <ul>
                
                    <li class="index_cat">
                        <div class="cat_nav">
                            <div class="nav_title">Product Department</div>
                            <div class="nav_content">
                                
                            </div>
                        </div>

                        <div class="cat_main_banner">
                            
                        </div>

                        <div class="cat_showcase">
                            
                        </div>
                    </li>

                </ul>
            </section>

        </div>
    </main>

    <div id=""></div>

    <footer>
        
    </footer>

    <script src="assets/js/jquery-1.10.2.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript"> 
    $(document).ready(function() { 
        $('nav ul li a').hover(function () { 
            $('.dropdown_wrap').eq($(this).parent().index()).toggle(); 
        }); 
    })
    </script>
</body>
</html>