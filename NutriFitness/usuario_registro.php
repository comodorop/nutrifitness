<!DOCTYPE html>
<html>

    <!-- Mirrored from responsivewebinc.com/premium/cakefactory12/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Oct 2014 04:11:54 GMT -->
    <head>
        <meta charset="utf-8">
        <!-- Title here -->
        <title>Checkout - CakeFactory</title>
        <!-- Description, Keywords and Author -->
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your,Keywords">
        <meta name="author" content="ResponsiveWebInc">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Portfolio CSS -->
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">	
        <!-- Custom Less -->
        <link href="css/less-style.css" rel="stylesheet">	
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>

    <body>


        <!-- Shopping cart Modal -->
        <div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Shopping Cart</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Items table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Exception Reins Evocative</a></td>
                                    <td>2</td>
                                    <td>$200</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
                                    <td>1</td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Sinter et Molests Perfectionist</a></td>
                                    <td>4</td>
                                    <td>$99</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>$489</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
                        <button type="button" class="btn btn-info">Checkout</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Model End -->

        <!-- Page Wrapper -->
        <div class="wrapper">

            <!-- Header Start -->

            <?php include './menu.php'; ?>

            <!-- Header End -->

            <!-- Banner Start -->

            <div class="banner padd">
                <div class="container">
                    <!-- Image -->
                    <img class="img-responsive" src="img/crown-white.png" alt="" />
                    <!-- Heading -->
                    <h2 class="white">Registro de Usuario</h2>
                    <!--<ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="items.html">Shopping</a></li>
                        <li><a href="item-single.html">Order Now</a></li>
                        <li class="active">Checkout</li>
                    </ol>-->
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- Banner End -->



            <!-- Inner Content -->
            <div class="inner-page padd">

                <!-- Checkout Start -->

                <div class="checkout">
                    <div class="container">
                        <!-- Heading -->
                        <h4>Completa el formulario y regístrate para disfrutar de todos nuestros servicios.</h4>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- Checkout Form -->
                                <form id="form" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="inputName" class="col-md-2 control-label">Nombre</label>
                                        <div class="col-md-8">
                                            <input  type="text" title="Se necesita un nombre"  class="form-control" name="inputName" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-md-2 control-label">Dirección</label>
                                        <div class="col-md-8">
                                            <textarea title="Se necesita una direccion de entrega"  class="form-control" name="inputAddress" rows="3" placeholder="La dirección donde haremos llegar tus pedidos" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-md-2 control-label">Codigo postal</label>
                                        <div class="col-md-4">
                                            <input  type="number" class="form-control" name="inputCp" placeholder="Codigo postal" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-md-2 control-label">Telefono</label>
                                        <div class="col-md-8">
                                            <input  type="number" class="form-control" name="inputTel" placeholder="Telefono" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-md-2 control-label">Celular</label>
                                        <div class="col-md-8">
                                            <input  type="number" class="form-control" name="inputCel" placeholder="Celular" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-md-2 control-label">Correo electrónico</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="inputEmail" placeholder="Correo electrónico" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-md-2 control-label">Contraseña</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="inputPass" id="pass" placeholder="Contraseña"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-md-2 control-label">Reescribir contraseña</label>
                                        <div class="col-md-8">
                                            <input  type="text" class="form-control" name="inputRepass" id="repass" placeholder="Reescribir contraseña" required>
                                        </div>
                                    </div>                                                                     
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="inputChk" id="chkterm"  type="checkbox"> Acepto los terminos y conciones
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-8">
                                            <button  type="submit" hidden></button>
                                            <button  type="button" class="btn btn-danger btn-sm" id="btnreg">Registrar</button>&nbsp;
                                            <button type="reset" class="btn btn-default btn-sm">Limpiar formulario</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--                            <div class="col-md-5 col-sm-6">
                                                             Checkout sidebar items 
                                                            <div class="sidebar-item">
                                                                 Heading 
                                                                <h5 class="pull-left">Free Delivery</h5>
                                                                 Sidebar content icon 
                                                                <i class="fa fa-truck br-green pull-right"></i>
                                                                <div class="clearfix"></div>
                                                                 Sidebar Paragraph 
                                                                <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusmod tempor incid idunt ut labore et conse ctetur adipi sicing elit, sed do eiusmod dolore magna aliqua.</p>
                                                            </div>
                                                             Checkout sidebar items 
                                                            <div class="sidebar-item">
                                                                 Heading 
                                                                <h5 class="pull-left">Complain / Support</h5>
                                                                 Sidebar content icon 
                                                                <i class="fa fa-headphones br-red pull-right"></i>
                                                                <div class="clearfix"></div>
                                                                 Sidebar Paragraph 
                                                                <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusmod tempor incid idunt ut labore et conse ctetur adipi sicing elit, sed do eiusmod dolore magna aliqua.</p>
                                                            </div>
                                                        </div>-->
                        </div>
                    </div>
                </div>

                <!-- Checkout End -->

                <!-- Showcase Start -->

                <div class="showcase">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- Showcase section item -->
                                <div class="showcase-item">
                                    <!-- Image -->
                                    <img class="img-responsive" src="img/fruit2.png" alt="" />
                                    <!-- Heading -->
                                    <h3><a href="#">Equine Porno Sumos</a></h3>
                                    <!-- Paragraph -->
                                    <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- Showcase section item -->
                                <div class="showcase-item">
                                    <!-- Image -->
                                    <img class="img-responsive" src="img/fruit3.png" alt="" />
                                    <!-- Heading -->
                                    <h3><a href="#">Equine Porno Sumos</a></h3>
                                    <!-- Paragraph -->
                                    <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Showcase End -->

            </div><!-- / Inner Page Content End -->	

            <!-- Footer Start -->

            <div class="footer padd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Logo area -->
                                <div class="logo">
                                    <img class="img-responsive" src="img/logo.png" alt="" />
                                    <!-- Heading -->
                                    <h1>CakeFactory</h1>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                                <hr />
                                <!-- Heading -->
                                <h6>On-line Payment Clients</h6>
                                <!-- Images -->
                                <a href="#"><img class="payment img-responsive" src="img/payment/2co.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/authorizenet.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/discover.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/egold.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/mastercard.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/paypal.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/visa.gif" alt="" /></a>
                                <a href="#"><img class="payment img-responsive" src="img/payment/worldpay.gif" alt="" /></a>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Famous Dishes</h4>
                                <!-- Images -->
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Join Us Today</h4>
                                <!-- Paragraph -->
                                <p>There is no one who loves pain itself, who seeks after it and wants to have it.</p>
                                <!-- Subscribe form -->
                                <form role="form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your name" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Your email" />
                                    </div>
                                    <button class="btn btn-danger" type="button">Subscribe</button>
                                </form>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Contact Us</h4>
                                <div class="contact-details">
                                    <!-- Address / Icon -->
                                    <i class="fa fa-map-marker br-red"></i> <span>#768, 5th floor, N S Building,<br />Csm Block, Park Road,<br /> Bangalore - 234567</span>
                                    <div class="clearfix"></div>
                                    <!-- Contact Number / Icon -->
                                    <i class="fa fa-phone br-green"></i> <span>+91 88-88-888888</span>
                                    <div class="clearfix"></div>
                                    <!-- Email / Icon -->
                                    <i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">abc@example.com</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Social media icon -->
                                <div class="social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div> <!--/ Footer widget end -->
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="footer-copyright">
                        <!-- Paragraph -->
                        <p>&copy; Copyright 2014 <a href="#">Company Name</a></p>
                    </div>
                </div>
            </div>

            <!-- Footer End -->

        </div><!-- / Wrapper End -->


        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 




        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Javascript files -->
        <script src="js/usuario_registro.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Pretty Photo JS -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <!-- JS code for this page -->
        <script>

        </script>
    </body>	

    <!-- Mirrored from responsivewebinc.com/premium/cakefactory12/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Oct 2014 04:11:54 GMT -->
</html>