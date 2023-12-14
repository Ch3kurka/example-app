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
        <div class="widget-content widget-content-area">
            <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">
            @foreach($photo as $qwe)
                    <a class="img-1" href="{{asset('/storage/'.$qwe['photo_path'])}}" data-size="1600x1068"
                       data-med="assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                        <img src="{{asset('/storage/'.$qwe['photo_path'])}}" height="400" alt="image-gallery">
                    </a>
            @endforeach
            </div>
            <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">
                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>

                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">

                        <div class="pswp__top-bar">

                            <!--  Controls are self-explanatory. Order can be changed. -->
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset("plugins/lightbox/photoswipe.min.js")}}"></script>
        <script src="{{asset("plugins/lightbox/photoswipe-ui-default.min.js")}}"></script>
        <script src="{{asset("plugins/lightbox/custom-photswipe.js")}}"></script>
@endsection
