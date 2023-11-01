<div class="widget widget-content-area br-4">
    <div class="widget-one"></div>
    <div class="widget-header">
        <div>
            <a href="/slider" aria-expanded="false" class="dropdown-toggle">
                <button class="btn btn-warning mb-4 mr-2 btn-rounded">Add your slide
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-edit-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
{{--            @foreach($slider_forms as $data)--}}
            <tr>
                <th class="text-center"></th>
                <th>#</th>
                <th>First text</th>
                <th>Second text</th>
                <th>Button text</th>
                <th>Button link</th>
                <th class="text-center">Action</th>
            </tr>
{{--            @endforeach--}}
            </thead>
            <tbody>

            <tr>
                <td class="text-center"></td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td>

                </td>
                <td></td>
                <td class="text-xl-center">
                    <button class="btn btn-danger mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-edit-2">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                            </path>
                        </svg>
                    </button>
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

                </td>

            </tr>


            </tbody>
        </table>
    </div>


</div>
