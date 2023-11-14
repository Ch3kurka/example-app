<div class="widget widget-content-area br-4">
    <div class="widget-one"></div>
    <div class="widget-header">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4>Edit your slide</h4>
            </div>
        </div>
    </div>
    <form enctype="multipart/form-data" method="POST">
        @csrf
        <div class="custom-file-container" data-upload-id="myFirstImage">
            <label>Your file <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                title="Clear Image">x</a></label>
            <label class="custom-file-container__custom-file" >
                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                       name="file_name" accept="image/*">
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                <span class="custom-file-container__custom-file__custom-file-control"></span>
            </label>

            <div class="custom-file-container__image-preview"></div>
        </div>
        <div class="form-group mb-4">
            <label for="formGroupExampleInput" >First text</label>
            <input type="text" class="form-control" name="first_text" value="{{$edit->first_text}}" id="formGroupExampleInput" placeholder="Enter first text...">
        </div>
        <div class="form-group mb-4">
            <label for="formGroupExampleInput2">Second text</label>
            <input type="text" class="form-control" name="second_text" value="{{$edit->second_text}}" id="formGroupExampleInput2" placeholder="Enter second text...">
        </div>
        <div class="form-group mb-4">
            <label for="formGroupExampleInput2">Button text</label>
            <input type="text" class="form-control" name="button_text" value="{{$edit->button_text}}" id="formGroupExampleInput2" placeholder="Enter button text...">
        </div>
        <div class="form-group mb-4">
            <label for="formGroupExampleInput2">Button link</label>
            <input type="text" class="form-control" name="button_link" value="{{$edit->button_link}}" id="formGroupExampleInput2" placeholder="Enter button link...">
        </div>
        @method('PUT')
        <input type="submit" name="time" class="btn btn-primary mb-4 mr-2" >
    </form>
</div>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset("/plugins/file-upload/file-upload-with-preview.min.js")}}"></script>

    <script>
        let myFirstImage = new FileUploadWithPreview('myFirstImage',
            {
                presetFiles: ['{{asset('/storage/'.$edit->file_name)}}']
            }
        )
    </script>
