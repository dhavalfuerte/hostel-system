<div class="form-group col-md-12">
  <label for="email">Facilities</label>
  <input type="text" class="form-control"  name="facilities" value="{{ $facilities->facilities }}" required />
</div>



 <!-- closes the panel body div-->

<div class="panel-footer">
  <div class="row">
    <div class="col-md-12">
      <div class="form-action">
        <a href="{{route('adminFacilities.index')}}" class="btn btn-sm btn-default">Cancel</a>
        <button type="submit" id="btn-save" class="btn bg-olive btn-sm pull-right">
          {{ $submitButtonText ? : 'create' }}
        </button>
      </div>
    </div>
  </div>
</div>