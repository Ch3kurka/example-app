@extends('kickMain')

@section('content')

    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Create Your Category</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Your category...">
                        </div>
                    </div>
                    <input type="submit" name="time" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

@endsection
