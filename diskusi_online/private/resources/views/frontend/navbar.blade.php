<div class="container-fluid">
<div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index-2.html"><img src="images/logo.jpg" alt=""  /></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" >Kategori</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Web Programming</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Mobile Programming</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Unek - Unek</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                        
                            <div class="stnt pull-left">                            
                                <a href="{{url('post')}}" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                            </a>  
                            </div>

                            
                            
                            <div class="stnt pull-left">
                            <button class="btn btn-primary"><a class="dropdown-item" style="color:white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>                            
                                

                                    <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                            </div>
                            <div class="stnt pull-left">                       
                                <div class="container">
                                <h2 >{{Auth::user()->name}}</h2>
                             </div>
                            </div>
                            
                            
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>