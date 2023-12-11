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
                                <form  method="GET" action="{{route('showPhoto' , $cat)}}">
                                    @csrf
                                    <button class="btn btn-secondary mb-2">
                                        Show
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
