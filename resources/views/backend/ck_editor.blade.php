@extends('backend.layouts.app')

@section('title')
    CRM form elements
@endsection
@push('breadcrumb')
    Dashboard
@endpush

@push('bc-filter')

    <!--begin::Filter-->
    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->Filter</a>

    <!--begin::Menu 1-->
    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61b9d847434e3">
        <!--begin::Header-->
        <div class="px-7 py-5">
            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
        </div>
        <!--end::Header-->
        <!--begin::Menu separator-->
        <div class="separator border-gray-200"></div>
        <!--end::Menu separator-->
        <!--begin::Form-->
        <div class="px-7 py-5">
            <!--begin::Input group-->
            <div class="mb-10">
                <!--begin::Label-->
                <label class="form-label fw-bold">Status:</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61b9d847434e3" data-allow-clear="true">
                        <option></option>
                        <option value="1">Approved</option>
                        <option value="2">Pending</option>
                        <option value="2">In Process</option>
                        <option value="2">Rejected</option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-10">
                <!--begin::Label-->
                <label class="form-label fw-bold">Member Type:</label>
                <!--end::Label-->
                <!--begin::Options-->
                <div class="d-flex">
                    <!--begin::Options-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" value="1" />
                        <span class="form-check-label">Author</span>
                    </label>
                    <!--end::Options-->
                    <!--begin::Options-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                        <span class="form-check-label">Customer</span>
                    </label>
                    <!--end::Options-->
                </div>
                <!--end::Options-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-10">
                <!--begin::Label-->
                <label class="form-label fw-bold">Notifications:</label>
                <!--end::Label-->
                <!--begin::Switch-->
                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                    <label class="form-check-label">Enabled</label>
                </div>
                <!--end::Switch-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Form-->
    </div>
    <!--end::Menu 1-->

    <!--end::Menu-->
    </div>
    <!--end::Wrapper-->
@endpush

@push('bc-button')

    <!--begin::Button-->
    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>

@endpush

@section('content')
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-12">
            <!--begin::Mixed Widget 2-->
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <form action="#" class="form mb-15" method="post" id="kt_contact_form">
                                <h1 class="fw-bolder text-dark mb-9">Send Us Email</h1>

                                <div class="d-flex flex-column mb-10 fv-row">
                                    <label class="fs-6 fw-bold mb-2">Message</label>
                                    <textarea id="ckeditor" class="ckeditor form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
                                    <span class="indicator-label">Send Feedback</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection

@push('script')
    <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        const watchdog = new CKSource.EditorWatchdog();

        window.watchdog = watchdog;

        watchdog.setCreator( ( element, config ) => {
            return CKSource.Editor
                .create( element, config )
                .then( editor => {




                    return editor;
                } )
        } );

        watchdog.setDestructor( editor => {



            return editor.destroy();
        } );

        watchdog.on( 'error', handleError );

        watchdog
            .create( document.querySelector( '.ckeditor' ), {

                licenseKey: '',



            } )
            .catch( handleError );

        function handleError( error ) {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: 61tcw9qcwvl2-15eq3f5qr1bp' );
            console.error( error );
        }

    </script>
@endpush