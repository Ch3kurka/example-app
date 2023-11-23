@extends('kickMain')
@section('content')
    @include('adminka.admPages.pagesCont.Gallery.galleryCont')
    <div class="col-lg-10 col-10 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row mb-4">
                    <div class="col mt-lg-2">
                        <h4>Create Your Photo</h4>
                    </div>
                </div>
            </div>
            <form action="{{route('createPhoto')}}" enctype="multipart/form-data" method="post">
                @csrf
            <div class="widget-content widget-content-area">
                <div class="custom-file-container" data-upload-id="mySecondImage">
                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file" >
                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="photo_path" accept="image/*">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>

                    <div class="custom-file-container__image-preview"></div>
            </div>
                <div id="fs2Tagging" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col mt-lg-2">
                                    <h4>Choose your category</h4>
                                </div>

                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <select class="form-control tagging js-example-basic-multiple" multiple="multiple" name="categories[]">
                                @foreach($show as $sh)
                                <option value="{{$sh->id}}">{{$sh->category}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <input type="submit" name="time" class="btn btn-primary">

            </div>
        </form>

        <script src="{{asset("/plugins/file-upload/file-upload-with-preview.min.js")}}"></script>
    <script src="{{asset("plugins/select2/select2.min.js")}}"></script>
    <script>
        var firstUpload = new FileUploadWithPreview('mySecondImage')
    </script>
                <script>
                    $(document).ready(function() {
                        $('.js-example-basic-multiple').select2();
                    });
                </script>
@endsection
