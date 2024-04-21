@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-md-center ">
                        <h1 class="m-0 mr-4">{{$tour->title}}</h1>
                        <a href="{{route('admin.tour.edit', $tour->id)}}" class="text-success">
                            <i class="fa fa-edit "></i>
                        </a>
                        <form action="{{route('admin.tour.delete', $tour->id)}}"
                              method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent"> <i class="fas fa-trash text-danger" role="button" ></i></button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-6">
                            <div class=" table-responsive p-0 mt-5">
                                <table  class="table table-hover text-center text-nowrap shadow">
                                    <tbody class="">
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$tour->id}}</td>

                                        </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$tour->title}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                     </div>
                 </div>
        </section>
    </div>
@endsection
