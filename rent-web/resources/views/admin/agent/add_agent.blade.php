@extends('layouts.admin_layout.admin_layout')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center">Add New Agent</h3>
                            </div>
                            <hr>
                            <form action="{{route('admin.add.agent')}}" method="post" novalidate="novalidate" enctype="multipart/form-data"> @csrf

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name <span style="color:red;">*</span></label>
                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Name">
                                </div>
                                <div class="form-group has-success">
                                    <label for="email" class="control-label mb-1">Email <span style="color:red;">*</span></label>
                                    <input id="email" name="email" type="email" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Email">

                                </div>

                                <div class="form-group has-success">
                                    <label for="phone" class="control-label mb-1">Phone <span style="color:red;">*</span></label>
                                    <input id="phone" name="phone" type="tel" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Phone">

                                </div>

                                <div class="form-group has-success">
                                    <label for="link_in" class="control-label mb-1">LinkIn Profile Link <span style="color:red;">*</span></label>
                                    <input id="link_in" name="link_in" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter LinkIn profile Link">

                                </div>

                                <div class="form-group has-success">
                                    <label for="image" class="control-label mb-1">Image <span style="color:red;">*</span></label>
                                    <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">

                                </div>

                                    <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> <!-- .card -->

        </div>
    </div>
@endsection

@push('js')

@endpush
