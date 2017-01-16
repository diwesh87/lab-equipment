<form class="form-horizontal" id="add_more_equipment">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Title of Equipment</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title of Equipment" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="model" class="col-sm-2 control-label">Model No</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="model_no" name="model_no" placeholder="Model No" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="maker" class="col-sm-2 control-label">Maker</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="maker" name="maker" placeholder="Maker" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="time_unit" class="col-sm-2 control-label">Time Unit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="time_unit" name="time_unit" placeholder="Time Unit">
        </div>
    </div>
    <div class="form-group">
        <label for="reservation_time" class="col-sm-2 control-label">Max Reservation Time</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="reservation_time" name="reservation_time" placeholder="Max Reservation Time">
        </div>
    </div>
    <div class="form-group">
        <label for="price_per_unit" class="col-sm-2 control-label">Price per unit Time</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="price_per_unit" name="price_per_unit" placeholder="Price per unit Time">
        </div>
    </div>
    <div class="form-group">
        <label for="availability" class="col-sm-2 control-label">Availability</label>
        <div class="col-sm-10">
            <select name="availability" id="availability" class="form-control" required="required">
                <option value="">Availability</option>
                <option value="0">Available</option>
                <option value="1">Unavailable</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="assign_lab" class="col-sm-2 control-label">Assign to Lab</label>
        <div class="col-sm-10">
            <select name="assign_lab" id="assign_lab"  name= "assign_lab" class="form-control" required="required">
                <option value="0">Choose Lab</option>
                @if ($labs->count() > 0)
                @foreach($labs as $lab)
                <option value="{{ $lab->id }}">{{ $lab->title }}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label">Photo</label>
        <div class="col-sm-10">
            <input type="file" name="photo" id="photo" class="form-control" value="" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-large btn-default" id="save-equipment">Save</button>
        </div>
    </div>
</form>