@extends('layouts.admin.master')
@section('dashboard')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Area</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="card text-white" style="background-color: #183757;">
                    @if ($errors->any())
                        <div class="alert alert-dismissible fade show" style="color: black; background-color: #d4edda" role="alert">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <br>
                    <form action="{{route('areas.update',$data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="location_id">City  </label>
                                        <select name="location_id" id=""   class="form-control">
                                            <option value="" class="select">select an Option</option>
                                            @foreach($locations as $location)
                                                <option value="{{$location->id}}" @if (isset($data->location_id) && ($data->location_id == $location->id)) selected @endif >{{$location->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name"  value="{{$data->name}}"  class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Status </label>
                                        <select name="status" id=""   class="form-control">
                                            <option value="" class="select">select an Option</option>
                                            <option value="Active" @if($data->status == 'Active') selected @endif >Active </option>
                                            <option value="Inactive" @if($data->status == 'Inactive') selected @endif >Inactive </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3" style="margin-top: 32px">
                                    <button type="submit" class="form-group form-control btn btn-info"> Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

@endsection
