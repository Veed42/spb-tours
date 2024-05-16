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
                                <img src="{{asset( 'storage/' . $tour->preview_image)}}" class="card-img-top" alt="">
                                <h5 class="mb-5 blue">Категория
                                    {{$tour->category->title}}
                                </h5>
                                <div class="d-flex flex-column">
                                    <h5 class="card-title">Название тура:{{$tour->title}}</h5>
                                    <h3>Гид:
                                        {{
    $tour->guid->name    }}
                                        {{
    $tour->guid->surname
        }}
                                        {{
    $tour->guid->patronymic
        }}
                                    </h3>
                                    <div class="div">
                                    <span>
                                        Продожительность тура: {{$tour->duration_tour}}
                                    </span>
                                        <div class="d-flex">
                                            <p>Начало:</p> <p>
                                                {{date('H:m', strtotime($tour->begin_tour))}}
                                            </p>
                                        </div>
                                        <div class="waiting_for_programs">
                                                    {!! $tour->waiting_for_programs !!}

                                        </div>

                                    </div>
                                    <div class="waiting_for_programs" style="">


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
