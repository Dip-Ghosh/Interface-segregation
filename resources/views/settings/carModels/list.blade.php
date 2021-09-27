@extends('layouts.admin.master')
@section('dashboard')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List of Car Model</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <section class="content">
        <div class="card">
            <div class="card-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-info alert-dismissible">{{ $message }}  <button type="button" class="close" data-dismiss="alert">×</button></div>
                @endif
                    <table id="location" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>ModelName</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 0; @endphp
                        @foreach($data as $datum)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$datum->name}}</td>
                                <td>{{$datum->status}}</td>
                                <td>
                                    <form action="{{ route('car-models.destroy',$datum->id)}}" method="POST">
                                        @CSRF
                                        @method('DELETE')
                                        <a href="{{route('car-models.edit',$datum->id)}}"
                                           class="btn btn-sm btn-success"><i
                                                class="fas fa-edit"></i></a>


                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>

        </div>
    </section>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script>
        $(function () {
            $("#location").DataTable();
        });
    </script>

@endsection

