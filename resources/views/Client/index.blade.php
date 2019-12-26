@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
                    @guest
                    @else
                        <div class="wrap">
                            <div class="content">
                                
                                    <h3 align="right">Welcome :- {{ Auth::user()->first_name }}</h3>
                                
                            </div>
                        </div>
                    @endguest   
    <div class="content">
            <div class="slide-box">
                <ul id="slider">
                    <li><img src="{{asset('Client/images/i1.jpg')}}"></li>
                     <li><img src="{{asset('Client/images/i2.jpg')}}"></li>
                    <li><img src="{{asset('Client/images/i3.jpg')}}"></li>
                    
                   
                    <li><img src="{{asset('Client/images/i6.jpg')}}"></li>
                   
                    <li><img src="{{asset('Client/images/i8.jpg')}}"></li>
                   
                </ul>
            </div>
            
     </div>
                    
</div>

@endsection
