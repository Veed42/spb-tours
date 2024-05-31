@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Реадактирование программы тура</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Реадактирование программы тура</li>
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
                    <div class="col-12">

                        <form action="{{route('admin.program_tour.update',  $program->id)}}"
                              method="POST"
                              enctype="multipart/form-data"
                              >
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <label for="title">Название</label>

                                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Название тура" value="{{$program->title}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" >
                                <textarea id="summernote" name="description" >{{$program->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <textarea class="summernote" name="begin_tour_banner" >{{$program->begin_tour_banner}}</textarea>
                                @error('begin_tour_banner')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="w-25 mb-3">
                                    <img src="{{asset( 'storage/' . $program->back_image)}}" class="card-img-top" alt="">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="back_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>

                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Выберите тур или измените</label>
                                <select name="tour_id"
                                        class="form-control">
                                    @foreach($tours as $tour)
                                        <option value="{{$tour->id}}"
                                            {{$tour->id == $tour->title ? 'selected' : ''}}
                                        >{{$tour->title}}</option>
                                    @endforeach

                                </select>
                                @error('tour_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content -->
@endsection

