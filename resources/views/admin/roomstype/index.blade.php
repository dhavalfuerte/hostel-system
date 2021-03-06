@extends('admin.common.layout')

@section('content')


<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

      <div class="box-header with-border">
       <a href="{{ route('adminRoomstype.create') }}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i> Rooms Type</a>      
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
            
            <th>Name</th>
            <th>Capacity</th>
            <th>Floor</th>
            <th>Fees</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
          
          @forelse ($result as $row)
          <tr>
            
            <td>{{$row->name}}</td>
            <td>{{$row->capacity}}</td>
            <td>{{$row->floor}}</td>
            <td>{{$row->fees}}</td>
            <td>{{$row->description}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   <li><a  href= "{{route('adminRoomstype.edit',$row->id)}} "><i class="glyphicon glyphicon-edit"></i>Edit </a></li>
                   
                   <li><form method="post" action="{{  route('adminRoomstype.destroy',$row->id)}}">
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
          {{ $result->onEachSide(1)->links() }}
      </div>
      <!-- /.box-body -->
      <div class="panel-footer">
        Details of All Rooms Type
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop