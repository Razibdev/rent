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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>system@gamil.com</td>
                                    <td>017xxxxxxxxxx</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis facilis pariatur, perspiciatis quibusdam recusandae sint? Accusamus aut cupiditate doloremque eaque eligendi enim nobis officia porro quia, similique suscipit voluptatum?</td>
                                </tr>

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
