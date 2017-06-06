@extends ('layouts.admin.coreui.master')

@section ('content')
 <!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>-->
<h1>Events</h1>
<div class="card">
    <div class="card-header">
        <strong>Events</strong> Elements
    </div>
    <div class="card-block">

        <form action="/admin/events" method="post" class="form-horizontal ">
        {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Title</label>
                <div class="col-md-9">
                    <input type="text" id="title" name="title" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">End date</label>
                <div class="col-md-9">
                    <input type="date" id="end" name="end" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Website</label></label>
                <div class="col-md-9">
                    <input type="url" id="website" name="website" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Phone</label></label>
                <div class="col-md-9">
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Map</label>
                <div class="col-md-9">
                    <input type="url" id="map" name="map" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Address</label>
                <div class="col-md-9">
                    <input type="text" id="address" name="address" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Short Info</label>
                <div class="col-md-9">
                    <textarea name="short_info" class="form-control" id="short_info" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Detailed Info</label>
                <div class="col-md-9">
                    <textarea  name="detailed_info" class="form-control" id="detailed_info" rows="8"></textarea>
                </div>
            </div>

    <div class="card-footer">
      <div class="offset-sm-2 col-md-5">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
</div>
@endsection