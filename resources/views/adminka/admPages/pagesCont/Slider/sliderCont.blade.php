  <div class="widget widget-content-area br-4">
                        <div class="widget-one"></div>

      <form action="{{ route('slider.form') }}" enctype="multipart/form-data" method="POST">
          @csrf
 <div class="custom-file-container" data-upload-id="myFirstImage">
    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
    <label class="custom-file-container__custom-file" >
        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="file_name" accept="image/*">
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>

    <div class="custom-file-container__image-preview"></div>

</div>
    <div class="form-group mb-4">
        <label for="formGroupExampleInput">First text</label>
        <input type="text" class="form-control" name="first_text" id="formGroupExampleInput" placeholder="Enter first text...">
    </div>
    <div class="form-group mb-4">
        <label for="formGroupExampleInput2">Second text</label>
        <input type="text" class="form-control" name="second_text" id="formGroupExampleInput2" placeholder="Enter second text...">
    </div>
    <div class="form-group mb-4">
        <label for="formGroupExampleInput2">Button text</label>
        <input type="text" class="form-control" name="button_text" id="formGroupExampleInput2" placeholder="Enter button text...">
    </div>
    <div class="form-group mb-4">
        <label for="formGroupExampleInput2">Button link</label>
        <input type="text" class="form-control" name="button_link" id="formGroupExampleInput2" placeholder="Enter button link...">
    </div>
    <input type="submit" name="time" class="btn btn-primary mb-4 mr-2" >
</form>
  </div>









    {{--<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">--}}
{{--    <ol class="carousel-indicators">--}}
{{--        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>--}}
{{--        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--}}
{{--        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>--}}
{{--    </ol>--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img class="d-block w-100" src="assets/img/600x300.jpg" alt="First slide">--}}
{{--            <div class="carousel-caption d-none d-sm-block">--}}
{{--                <h3>First slide</h3>--}}
{{--                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="assets/img/600x300.jpg" alt="Second slide">--}}
{{--            <div class="carousel-caption d-none d-sm-block">--}}
{{--                <h3>Second slide</h3>--}}
{{--                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="assets/img/600x300.jpg" alt="Third slide">--}}
{{--            <div class="carousel-caption d-none d-sm-block">--}}
{{--                <h3>Third slide</h3>--}}
{{--                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block w-100" src="assets/img/600x300.jpg" alt="Third slide">--}}
{{--            <div class="carousel-caption d-none d-sm-block">--}}
{{--                <h3>Forth slide</h3>--}}
{{--                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--</div>--}}

