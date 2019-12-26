<div class="form-group col-md-12">
  <label for="email">Room Type</label>
  <select class="form-control" name="room_type_id" id="roomType">
    @foreach($roomTypes as $roomType)
        @if($selroomtype != null && $selroomtype->id == $roomType->id)
            <option value="{{ $roomType->id }}" selected> {{ $roomType->name }} | Room Capacity: {{$roomType->capacity  }} guests</option>
        @else
            <option value="{{ $roomType->id }}"> {{ $roomType->name }} | Room Capacity: {{$roomType->capacity  }} guests</option>
        @endif
  @endforeach
  </select>
</div>


<div class="form-group col-md-12">
  <label for="name">Room Number</label>
  <input type="text" class="form-control" name="room_no" value="{{ $rooms->room_no }}" required>
</div>

<div class="form-group col-md-12">
  <label for="email">Description</label>
  <input type="text" class="form-control" name="description" value="{{ $rooms->description }}" required>
</div> 

 <!-- closes the panel body div-->

<div class="panel-footer">
  <div class="row">
    <div class="col-md-12">
      <div class="form-action">
        <a href="{{route('adminRooms.index')}}" class="btn btn-sm btn-default">Cancel</a>
        <button type="submit" id="btn-save" class="btn bg-olive btn-sm pull-right">
          {{ $submitButtonText ? : 'create' }}
        </button>
      </div>
    </div>
  </div>
</div>