@extends('frontend.user')
@section('main')

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
    <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">New Topic</a>
            </div>
        </div>
     </div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
        
<div class="post">
     
     <div class="topwrap">
     <div class="userinfo pull-left">
        <div class="avatar">
            <img src="images/avatar4.jpg" alt="" />
            <div class="status red">&nbsp;</div>
        </div>

        <div class="icons">
            <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
        </div>
    </div>
        <div class="posttext pull-left">
        <form action="{{route('frontend.posting')}}" class="form newtopic" method="post">
                            {{csrf_field()}}
            <div>
                <input name="judul" type="text" placeholder="Enter Topic Title" class="form-control" />
             </div>

    <div class="row">
        <div class="col-lg-6 col-md-6">
            
        <select name="kategori" id="category"  class="form-control" >
            <option value="" disabled selected>Select Category</option>
            <option value="web">WEB PROGRAMMING</option>
            <option value="mobile">MOBILE PROGRAMMING</option>
            <option value="unek2">UNEK-UNEK</option>
        </select>
        </div>
    </div>

            <div>
                 <textarea name="isi" id="desc" placeholder="Description"  class="form-control" ></textarea>
            </div>
    <div class="row newtopcheckbox">
        <div class="col-lg-6 col-md-6">
            <div><p>Who can see this?</p></div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="checkbox">
               <label>
                  <input type="checkbox" id="everyone" /> Everyone
                </label>
            </div>
         </div>
        <div class="col-lg-6 col-md-6">
            <div class="checkbox">
               <label>
                  <input type="checkbox" id="friends"  /> Only Friends
                </label>
            </div>
         </div>
        </div>
    </div>
        <div class="col-lg-6 col-md-6">
           <div>
               <p>Share on Social Networks</p>
          </div>                                    
    <div class="row">
    <div class="col-lg-3 col-md-4">
        <div class="checkbox">                                                     
          <label>
             <input type="checkbox" id="fb"/> <i class="fa fa-facebook-square"></i>
           </label>
        </div>
    </div>
        <div class="col-lg-3 col-md-4">
        <div class="checkbox">
            <label>
              <input type="checkbox" id="tw" /> <i class="fa fa-twitter"></i>
            </label>
        </div>
    </div>
     <div class="col-lg-3 col-md-4">
       <div class="checkbox">
          <label>
             <input type="checkbox" id="gp"  /> <i class="fa fa-google-plus-square"></i>
          </label>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
    <div class="clearfix"></div>
</div>                              
    <div class="postinfobot">
        <div class="notechbox pull-left">
            <input type="checkbox" name="note" id="note" class="form-control" />
        </div>
    <div class="pull-left">
       <label for="note"> Email me when some one post a reply</label>
    </div>
<div class="pull-right postreply">
    <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
        <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
        
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        </div>
    </form>
 </div>
 </div>
 <div class="col-lg-4 col-md-4">
 
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