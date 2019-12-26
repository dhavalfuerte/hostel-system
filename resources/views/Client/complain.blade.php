@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
        <div class="b-box">
            <h1>Complain</h1>
            <div class="form">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <form action="adminComplain" method="post">
                    @csrf
                    <div>
                        <span><label for="name">Email</label></span>
                        <span><input type="email" name="email" id="email" required/></span>
                    </div>
                    <div>
                        <span><label for="email">Cotntact No</label></span>
                        <span><input type="text" name="contactno" id="contactno" required/></span>
                    </div>
                    <div>
                        <span><label for="subject">Complain</label></span>
                        <span><textarea name="complain" id="complain" required></textarea></span>
                    </div>
                    <div>
                        <span><input class="submit" type="submit" value="Submit"/></span>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection