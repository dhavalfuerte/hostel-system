<!DOCTYPE HTML>
<html>
<head>
<title>Heaven Hostel</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="{{asset('Client/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('Client/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Client/js/rhinoslider-1.02.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Client/js/mousewheel.js')}}"></script>
<script type="text/javascript" src="{{asset('Client/js/easing.js')}}"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				$('#slider').rhinoslider({
					autoPlay: true
				});
			});

	</script>
</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="logo"><a>HEAVEN HOSTEL</a></div>
            <div class="phone">
                <ul>
                    <li><span class="icon mob"></span>Contact : +91 7096412049</li>
                    <li><span class="icon mail"></span>Email : heaven@hostel.com</li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="nav">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="Facilities">Facilities</a></li>
                    <li><a href="complain">Complain</a></li>
                    <li><a href="notice">Notices</a></li>
                    <li><a href="roomdetails">Room Details</a></li>
                    <li><a href="feesdetails">Fees Details</a></li>
                     <li><a href="aboutus">About</a></li>
                    <li><a href="Contact">Contact</a></li>
                    @guest
                        <li><a  href="login">Login</a></li>
                     @else
                        <li> <a  href="logout">Logout</a></li>
                    @endguest
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>