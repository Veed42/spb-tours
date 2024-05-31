@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-md-center ">
                        <h1 class="m-0 mr-4">{{$program->title}}</h1>
                        <a href="{{route('admin.program_tour.edit', $program->id)}}" class="text-success">
                            <i class="fa fa-edit "></i>
                        </a>
                        <form action="{{route('admin.program_tour.delete', $program->id)}}"
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
                            <li class="breadcrumb-item active">Туры</li>
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
                    <div class="col-6 ">
                        <div class="card " >
                            <div class="card-body">
                            <div class="form-group">
                                <img src="{{asset( 'storage/' . $program->back_image)}}" class="card-img-top" alt="">
                                <h5 class="mb-5 blue">Название программы
                                    {{$program->title}}<br>
                                    id - tour
                                    {{$program->tour_id}}

                                </h5>
                                <div class="d-flex flex-column">

                                    <div class="div">
                                        <div class="waiting_for_programs">
                                            <strong style="font-size: 18px">Описание</strong>
                                                    {!! $program->description !!}

                                        </div>
                                    </div>
                                    <div class="waiting_for_programs " style="margin-top:20px">
                                        <strong>
                                            Баннер
                                        </strong>
                                        <div class="bg-blue">
                                            {!! $program->begin_tour_banner !!}
                                        </div>


                                    </div>
                                </div>

                            </div>


                            </div>
                         </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
@endsection
