@extends('kickMain')
@section('content')
    @include('adminka/admPages/pagesCont/Gallery/galleryCont')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Gallery</h4>
                    <a href="/editphcat" aria-expanded="false" class="dropdown-toggle">
                        <button class="btn btn-dark mb-4 mr-2 btn-rounded"> Back
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-refresh-ccw">
                                <polyline
                                    points="1 4 1 10 7 10">
                                </polyline>
                                <polyline
                                    points="23 20 23 14 17 14">
                                </polyline>
                                <path
                                    d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15">
                                </path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
            <div class="gallery">
                @foreach($photo as $qwe)
                    <div class="gallery-item">
                        <a class="img-container" href="{{asset('/storage/'.$qwe['photo_path'])}}" data-size="1600x1068"
                           data-med="assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                            <div>
                                <form action="{{route('detachPhoto')}}">
                                    @csrf
                                    <button class="btn btn-primary mt-2 mb-2 mr-2 m btn-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        Detach
                                    </button>
                                </form>
                            </div>
                            <img src="{{asset('/storage/'.$qwe['photo_path'])}}" height="300" width="350" alt="image-gallery">
                        </a>
                    </div>
                @endforeach
            </div>

        <script src="{{asset("plugins/lightbox/photoswipe.min.js")}}"></script>
        <script src="{{asset("plugins/lightbox/photoswipe-ui-default.min.js")}}"></script>
        <script src="{{asset("plugins/lightbox/custom-photswipe.js")}}"></script>
@endsection
