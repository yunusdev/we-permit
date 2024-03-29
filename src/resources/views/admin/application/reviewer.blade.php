@extends('admin.layouts.base')


@section('title')
    Applications (Reviewer)
@endsection

@section('styles')

    <link rel="stylesheet" href="{{asset('admin/datatables/dataTables.bootstrap4.css')}}">

@endsection

@section('content')

    <div class="section-header">
        <h1>Applications! (Reviewer)</h1>
    </div>

    <div class="section-body" style="">

        <div class="row">

            <div class="col-12" >

                <div class="card" style="padding: 20px">

                    <applications raw_applications = "{{$applications}}" is_reviewer="{{true}}"></applications>

                </div>


            </div>

        </div>

    </div>

@endsection

@section('scripts')


    <script src="{{asset('admin/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/datatables/dataTables.bootstrap4.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

@endsection
