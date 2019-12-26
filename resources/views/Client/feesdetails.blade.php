@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
        <div class="b-box">
            <h1>Fees Details</h1>
           
                <table class="table table-hover table-condensed" id="table">
          <thead>
          <tr>
            
            <th><p>Room Type</p></th>
            <th><p>Capacity</p></th>
            <th><p>Fees(Only For Six Months)</p></th> 
          </tr>
          
          @forelse ($result as $row)
          <tr>
            
            <td><p>{{$row->name}}</p></td>
            <td><p>{{$row->capacity}}</p></td>
            <td><p>{{$row->fees}}</p></td>
          </tr>
          @empty
          @endforelse
          </thead>
        </table>
        
            
        </div>
    </div>
</div>
@endsection