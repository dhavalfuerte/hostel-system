@extends('admin.common.layout')

@section('content')


<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

      <div class="box-header with-border">
       <a href="{{ route('adminRoomsallocate.create') }}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Rooms Allocate</a>      
        <div class="box-tools pull-left">

          <div class="btn-group btn-group-sm">
         
           
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="panel-body ">
        <table class="table table-hover table-condensed" id="table">
          <thead>
          <tr>
           
            <th>Room</th>
            <th>User</th>
            <th>Bed</th>
            <th>Action</th>
          </tr>
          
          @forelse ($room as $row)
          <tr>
           
            <td>{{$row->room_no}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->bed}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   <li><a  href= "{{route('adminRoomsallocate.edit',$row->id)}} "><i class="glyphicon glyphicon-edit"></i>Edit </a></li>
                    <li><form method="post" action="{{  route('adminRoomsallocate.destroy',$row->id)}}">
                        @method('DELETE')
                        @csrf
                     <button type="submit" class="btn" style = "background-color:transparent">
                            <i class="glyphicon glyphicon-trash"></i>Delete
                        </button>
             </form>
                      </li>
                  </ul>
                </div>
            </td>
          </tr>
          @empty
          @endforelse
          </thead>
        </table>
          {{ $room->onEachSide(1)->links() }}
      </div>
      <!-- /.box-body -->
      <div class="panel-footer">
        Details of All Rooms Allocate
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop