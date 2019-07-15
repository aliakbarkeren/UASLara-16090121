@extends('frontend.user')
@section('main')

<section class="content">
<div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">Topic Details</a>
                        </div>
                    </div>
                </div>
   <div class="container">
       <div class="row">
           <div class="col-lg-8 col-md-8">
               <!-- POST -->
               
               @foreach($post as $p)
               
                <div class="post">
                   <div class="wrap-ut pull-left">
                       <div class="userinfo pull-left">
                           <div class="avatar">
                               <img src="images/avatar2.jpg" alt="" />
                               <div class="status red">&nbsp;</div>
                           </div>

                           <div class="icons">
                               <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                           </div>
                       </div>
                       <div class="posttext pull-left">
                           <h2><a href="{{route('komentar',$p->id)}}">{{$p->judul}}</a></h2>
                           <p>{{substr($p->isi, 0, 200)}} </p>
                           
                       </div>
                       
                       <div class="clearfix"></div>
                       
                   </div>
                
                   <div class="clearfix"></div>
               
               </div>
               
               @endforeach
               <!-- POST -->


               <!-- POST -->
 <div class="container"></div>
 <br>
 <br>
 <br>
               <div class="post">
                   <div class="wrap-ut pull-left">
                       
                       
                       <div class="clearfix"></div>
                   </div>
                  
                   <div class="clearfix"></div>
               </div><!-- POST -->

           </div>
           <div class="col-lg-4 col-md-4">

               <!-- -->
               <div class="sidebarblock">
                   <h3>Categories</h3>
                   <div class="divline"></div>
                   <div class="blocktxt">
                       <ul class="cats">
                           <li><a href="#">Web ProgrammingG<span class="badge pull-right"></span></a></li>
                           <li><a href="#">Mobile Programming <span class="badge pull-right"></span></a></li>
                           <li><a href="#">Unek - Unek <span class="badge pull-right"></span></a></li>
                           
                       </ul>
                   </div>
               </div>

               <!-- -->
              

               <!-- -->
              


           </div>
       </div>
   </div>



   <div class="container">
     
   </div>


</section>
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