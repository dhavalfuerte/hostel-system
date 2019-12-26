<div class="form-group col-md-12">
  <label for="email">User</label>
  <select class="form-control" name="user_id" id="roomType">
  @foreach($user as $use)
        @if($seluser != null && $seluser->id == $use->id)
        {
            <option value="{{ $use->id }}" selected> {{ $use->first_name }} </option>
        }
        @else
            <option value="{{ $use->id }}"> {{ $use->first_name }} </option>
        @endif
  @endforeach
  </select>
</div>

<div class="form-group col-md-12">
  <label for="email">Room No</label>
  
  <select class="form-control" name="room_id" id="roomType">
    @foreach($room as $room)
        @if($selroom != null && $selroom->id == $room->id)
        {
            <option value="{{ $room->id }}" selected> {{ $room->room_no }} </option>
        }
        @else
            <option value="{{ $room->id }}" > {{ $room->room_no }} </option>
        @endif
  @endforeach
  </select>
</div>



<div class="form-group col-md-12">
  <label for="email">Bed</label>
  <input type="text" class="form-control" name="bed" value="{{ $roomsallocate->bed }}" required>
</div> 


 <!-- closes the panel body div-->

<div class="panel-footer">
  <div class="row">
    <div class="col-md-12">
      <div class="form-action">
        <a href="{{route('adminRoomsallocate.index')}}" class="btn btn-sm btn-default">Cancel</a>
        <button type="submit" id="btn-save" class="btn bg-olive btn-sm pull-right">
          {{ $submitButtonText ? : 'create' }}
        </button>
      </div>
    </div>
  </div>
</div>