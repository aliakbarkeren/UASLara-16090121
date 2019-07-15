@extends('frontend.user')
@section('main')
 

 <!-- END REVOLUTION SLIDER -->


<!-- Mirrored from forum.azyrusthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 04:38:29 GMT -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Create New account</a> 
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
               <!-- POST -->
                <div class="post">
                    <form action="{{route('frontend.registerpost')}}" class="form newtopic" method="post">
                            {{csrf_field()}}
                        <div class="postinfotop">
                            <h2>Create New Account</h2>
                        </div>

                        <!-- acc section -->
                        <!-- {!! Form::open(['route' => 'frontend.registerpost', 'method' => 'post', 'files' => true]) !!} -->
                        
                        <div class="accsection">
                            <div class="acccap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="topwrap">
                                <div class="userinfo pull-left">
                                    <div class="avatar">
                                        <img src="images/avatar-blank.jpg" alt="" />
                                        <div class="status green">&nbsp;</div>
                                    </div>
                                    <div class="imgsize">60 x 60</div>
                                    <div>
                                        <button class="btn">Add</button>
                                    </div>
                                </div>
                                <div class="posttext pull-left">
                                <div>
                                        <input name="name" type="text" placeholder="Name" class="form-control" />
                                    </div>
                                    <div>
                                        <input name="username"type="text" placeholder="User Name" class="form-control" />
                                    </div>
                                        <div>
                                        <input name="email" type="text" placeholder="Email" class="form-control" />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input name="password" type="password" placeholder="Password" class="form-control" id="pass" name="pass" />
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="password" placeholder="Retype Password" class="form-control" id="pass2" name="pass2" />
                                        </div>
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
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                                <div class="clearfix"></div>
                             
                            </div>


                                        <div class="clearfix"></div>
                                    </div>
                                    </form> 
                            </div><!-- POST -->
                          
                        
                    </div>
                </div>
                 </section>
                 </body>
                 </html>
@stop

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