@extends('kickMain')
@section('content')
    @include('adminka.admPages.pagesCont.Gallery.galleryCont')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="row-cols-xl-1 col-md-12 col-sm-10 col-10">
                        <h4>Categories</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-condensed mb-4">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($index as $ind)
                        <tr>
                            <td>{{$index->category}}</td>
                            <td class="text-center">
                                <div>
                                <ul class="table-controls">
                                    <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                    <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>

                                </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Category</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
