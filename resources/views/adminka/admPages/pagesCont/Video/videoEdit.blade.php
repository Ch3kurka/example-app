<div class="row">
    {{--<div id="form_grid_layouts" class="col-lg-12">
        <div class="seperator-header">
            <h4 class="">Add your video</h4>
        </div>
    </div>--}}

    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Video</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text"  class="form-control"  name="first_text" placeholder="First text">
                        </div>
                        <div class="col">
                            <input type="text"  class="form-control" name="second_text" placeholder="Second text">
                        </div>
                    </div>
                    <div class="form-group mb-4 mt-3">
                        <label for="exampleFormControlFile1"></label>
                        <input type="file" class="form-control-file" name="file_path" id="exampleFormControlFile1">
                    </div>
                    @method('PUT')
                    <input type="submit" name="time" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>
</div>
