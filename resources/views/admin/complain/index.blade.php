@extends('admin.common.layout')

@section('content')


<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

      <div class="box-header with-border">
       
       
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
            
            <th>Email ID</th>
            <th>Contact No</th>
            <th>Complain</th>
           
            <th>Action</th>
          </tr>
          
          @forelse ($result as $row)
          <tr>
            
            <td>{{$row->emailid}}</td>
            <td>{{$row->contactno}}</td>
            <td>{{$row->complain}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                  <li><form method="post" action="{{  route('adminComplain.destroy',$row->id)}}">
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
        Details of All Complain
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop