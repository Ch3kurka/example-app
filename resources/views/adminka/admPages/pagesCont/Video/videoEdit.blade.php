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
                <form method="post" action="{{route('videoUpd')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">

                            <input type="text"  class="form-control"  name="first_text" value="{{$video->first_text}}" placeholder="First text">

                        </div>
                        <div class="col">
                            <input type="text"  class="form-control" name="second_text" value="{{$video->second_text}}" placeholder="Second text">
                        </div>
                    </div>
                    <div class="custom-file-container" data-upload-id="myFirstImage">
                        <label>Your file <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                        <label class="custom-file-container__custom-file" >
                            <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                   name="file_path" value="" accept="image/*">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>

                        <div class="custom-file-container__image-preview"></div>
                    </div>
                    @method('PUT')
                    <input type="submit" name="time" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset("/plugins/file-upload/file-upload-with-preview.min.js")}}"></script>

<script>
    let myFirstImage = new FileUploadWithPreview('myFirstImage',
        {
            presetFiles: ['{{asset('/storage/'.$video->file_path)}}']
        }
    )
</script>
