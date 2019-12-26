@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
            <div class="b-box">
            <h1>Room Details</h1>
            <div class="feature-inner">
                            <ul>
                                 
                                    <li class="list">Your Room Type:{{$roomstype->name}}</li>
                                    <li class="list">Your Room Floor:{{$roomstype->floor}}</li>
                                    <li class="list">Your Room No:{{$rooms->room_no}}</li>
                                    <li class="list">Your Bed:{{$roomsallocate->bed}}</li>
                              
                            </ul>
                        </div>
                   
            </div>
        </div>
    </div>

@endsection
