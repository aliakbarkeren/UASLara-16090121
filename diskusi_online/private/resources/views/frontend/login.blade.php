<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from forum.azyrusthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 04:37:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>

        <!-- Bootstrap -->
        <link href="{{asset('layouts/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{asset('layouts/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('layouts/font-awesome-4.0.3/css/font-awesome.min.css')}}">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="{{asset('layouts/css/style.css')}}" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('layouts/rs-plugin/css/settings.css')}}" media="screen" />

    </head>

    <body>
    
    @yield('main')
    @yield('footer')
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="{{asset('layouts/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js')}}"></script>
 

 <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
 <script type="text/javascript" src="{{asset('layouts/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('layouts/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

 <script src="{{asset('layouts/js/bootstrap.min.js')}}"></script>


 <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
 <script type="text/javascript">
     
     var revapi;

     jQuery(document).ready(function() {
         "use strict";
         revapi = jQuery('.tp-banner').revolution(
                 {
                     delay: 15000,
                     startwidth: 1200,
                     startheight: 278,
                     hideThumbs: 10,
                     fullWidth: "on"
                 });

     });	//ready

 </script>
 
 

 <!-- END REVOLUTION SLIDER -->


<!-- Mirrored from forum.azyrusthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 04:38:29 GMT -->

<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Login</a> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                     <!-- POST -->
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="postinfotop">
                                        <h2>Login</h2>
                                    </div>

                                    <!-- acc section -->
									
                                    <div class="accsection">
                                        <div class="topwrap">
										<div class="userinfo pull-left">
                                                
                                                
                                            </div>
                                            <div class="posttext pull-left">
                                                
                                                    <div>
                                                        <input type="text" placeholder="Username" class="form-control" />
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="Password" class="form-control" />
                                                    </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->

                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input type="checkbox" name="note" id="note" class="form-control" />
                                        </div>

                                        <div class="pull-left lblfch">
                                            <label for="note"> I agree with the Terms and Conditions of this site</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Login</button></div>

                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Register</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->
                       
                        
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                 </section>
                 </body>
                 </html>


@section('footer')
<footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="images/logo.jpg" alt=""  /></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>
                        
                    </div>
                </div>
            </footer>
        </div>
@stop