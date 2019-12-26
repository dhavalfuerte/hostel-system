@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
            <div class="b-box">
            <h1>Notice</h1>
            <div class="feature-inner">
                            <ul>
                                 @forelse ($result as $row)
                                    <li class="list">{{$row->notice}}</li>
                                 @empty
                                 @endforelse
                              
                            </ul>
                        </div>
                   
            </div>
        </div>
    </div>

@endsection
