@extends('kickMain')
@section('content')
    @include('adminka/admPages/pagesCont/Gallery/galleryCont')
    <div class="widget widget-content-area br-4">
        <div class="widget-one"></div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>

                <tr>
                    <th class="text-center">#</th>
                    <th>Categories</th>
                    <th class="text-center">Action</th>
                </tr>

                </thead>
                @foreach($cate as $cat)
                <tbody>
                    <tr>
                        <td class="text-center"><h4>{{$cat->id}}</h4></td>
                        <td class="text-center"><h4>{{$cat->category}}</h4></td>
                        <td class="text-xl-center">
                            <div>
                                <form  method="POST" action="">
                                    @csrf
                                    <button class="btn btn-danger mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <form method="POST" action="">
                                @csrf
                                <button class="btn btn-dark mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline
                                            points="3 6 5 6 21 6">
                                        </polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line
                                            x1="10" y1="11" x2="10" y2="17">
                                        </line>
                                        <line x1="14" y1="11" x2="14" y2="17">
                                        </line>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
