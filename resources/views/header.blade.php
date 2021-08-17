<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       
        <img href="/" src="https://scontent.fdac13-1.fna.fbcdn.net/v/t1.6435-9/220439285_3023100564644226_1788858045719144565_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=730e14&_nc_eui2=AeHo9OvGKowP7HXAEYCmdklsmTFmhC6vEnaZMWaELq8SdiuPGfoQ_725TEkyBWu5pXtUHbeCxbUMqxmxI9VprLGT&_nc_ohc=7_zq0lEeD70AX861e-T&_nc_ht=scontent.fdac13-1.fna&oh=f5db5646b01efd3b1acabad2e590343f&oe=6124E392"  width="100" height="100" alt="ecolor">
        </a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <span class="icon-bar"></span>
        
        <a class="btn btn-" href="ordernow"></a> 
          <li > <a class="navbar-brand"  href="/"><b>Home</b></a></li>
          <li><a class="navbar-brand" href="/myorders"><b>Orders</b></a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
       
          <li><a href="/cartlist"><i style="font-size:24px" class="fa">&#xf07a;</i>({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
              <li><a href="/signup">Signup</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login"><button type="button" class="btn btn-dark">Login</button></a></li>
          <li><a href="/signup"><button type="button" class="btn btn-dark">Signup</button></a></li>
         
          
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>