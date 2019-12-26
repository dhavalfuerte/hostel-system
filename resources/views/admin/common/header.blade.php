<header class="header fixed-top clearfix"> <!--logo start--> 
<div class="brand"> 
	<a href="index.html" class="logo"> HEAVEN </a> 
	<div class="sidebar-toggle-box"> 
		<div class="fa fa-bars">
			
		</div> 
	</div> 
</div>

<!--logo end--> 
<div class="top-nav clearfix"> <!--search & user info start-->
<ul class="nav pull-right top-menu"> 
<!-- <li> <input type="text"
class="form-control search" placeholder=" Search"> </li>--> <!-- user login
dropdown start--> <li class="dropdown"> <a data-toggle="dropdown"
class="dropdown-toggle" style="padding: 7px 10px;" href="#">   
	<span class="username">Admin</span> <b class="caret"></b> </a> 

<ul class="dropdown-menu extended logout">
                
                <li> <a class="dropdown-item" href="adminlogout"><i class="fa fa-key"></i> {{ __('Logout') }}</a></li>
                
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>