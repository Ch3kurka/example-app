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
                      @foreach($show as $sh)
                          <tr>
                            <td><h5>{{$sh->category}}</h5></td>
                              <td class="text-xl-center">
                                  <div>
                                      <button type="button" class="btn btn-danger mb-2" data-toggle="modal"
                                                  data-target="#exampleModal{{$sh->id}}">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none"
                                                   stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                   stroke-linejoin="round"
                                                   class="feather feather-edit-2">
                                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                  </path>
                                              </svg>
                                      </button>

                                      <div class="modal fade" id="exampleModal{{$sh->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="post" action="/galleryEdit/{{$sh->id}}" enctype="multipart/form-data">
                                                          @csrf



                                                          <div class="row mb-4">

                                                          <div class="col">
                                                              <input type="hidden" value="{{$sh->id}}">
                                                              <input type="text" class="form-control" name="category" placeholder="Update your category" value="{{$sh->category}}">
                                                          </div>
                                                      </div>
                                                          @method('PUT')
                                                      <input type="submit" name="time" class="btn btn-primary">
                                                      </form>
                                                  </div>

                                              </div>
                                          </div>

                                      </div>
                                        </div>
                                  <form method="POST" action="/galleryEdit/{{$sh->id}}">
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
