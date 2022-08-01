@extends('layouts.admin_layout.admin_layout')
@push('css')
    <link rel="stylesheet" href="{{asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
@endpush
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Property Area</th>
                                    <th>Region</th>
                                    <th>Living Room</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($property as $pro)
                                    <tr>
                                        <td>{{$pro->property_title}}</td>
                                        <td><img width="100" height="70" src="{{asset($pro->featured_imaged)}}" alt=""></td>
                                        <td>{{$pro->property_area}}</td>
                                        <td>{{$pro->region}}</td>
                                        <td>{{$pro->living_room}}</td>
                                        <td>
                                            <form action="{{route('admin.delete.property', $pro->id)}}" method="post">@csrf

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form></td>

                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table').DataTable();
        } );
    </script>
@endpush

