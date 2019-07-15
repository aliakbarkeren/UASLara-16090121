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
                            <!-- POST -->
                           
                           
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2>{{$post->judul}}</h2>
                                        <p>{{$post->isi}}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="postinfobot">


                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> post on {{$post->created_at}}</div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="fa fa-share"></i></a>

                                        <a href="#"><i class="fa fa-flag"></i></a>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="post">
                            <form action="{{route('komentar-create')}}" class="form newtopic" method="post">
                                    @csrf
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
                                            <div class="textwraper">
                                                <div class="postreply">Post a Reply</div>
                                                <textarea name="isi" id="reply" placeholder="Type your message here"></textarea>
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
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                            <div class="clearfix"></div>
                                        </div>
                                       
                                        <div class="posttext pull-left">
                                        
                                        <p></p>
                                    </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- POST -->


                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                            
                            <h3>Categories</h3>
                            <div class="divline"></div>
                            <div class="blocktxt">
                            <ul class="cats">
                           <li><a href="#">Web Programmingg<span class="badge pull-right"></span></a></li>
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