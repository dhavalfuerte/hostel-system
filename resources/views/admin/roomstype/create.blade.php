@extends('admin.common.layout')

@section('content')

<div class="row">
    <div class="col-md-7 col-md-offset-2" style="margin-top: 10%;">
      <div class="panel panel-default">
        <div class="panel-heading" style="padding-top: 22px;">
          <h3 class="panel-title text-center">Create RoomType</h3>
        </div>

        <div class="panel-body overflow-hidden">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form
             action="{{ route('adminRoomstype.store') }}" method="post" id="form">
              @csrf
              
            @include('admin.roomstype.form', [
             'submitButtonText' => 'create',
             'roomstype' => new \App\roomstype,
            ])

          </form>
        </div>
      </div>

    </div>
</div>
@stop