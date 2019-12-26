@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
        <div class="b-box">
            <h1>Contact</h1>
            <div class="form">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <form action="/Contact" method="post">
                    @csrf
                    <div>
                        <span><label for="name">Name</label></span>
                        <span><input type="text" name="name" id="name" required/></span>
                    </div>
                    <div>
                        <span><label for="email">Email</label></span>
                        <span><input type="text" name="email" id="email" required/></span>
                    </div>
                    <div>
                        <span><label for="subject">Subject</label></span>
                        <span><textarea name="sub" id="sub" required></textarea></span>
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