@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление программы тура</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Добавление Программы тура</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
{{--<div class="row flex-column">--}}
{{--    @foreach($tours as $tour)--}}
{{--        <div class="card flex-column" >--}}
{{--            <div class="back-image">--}}
{{--                <div class="day-container">--}}
{{--                    {{$tour->program->day}}--}}
{{--                </div>--}}
{{--                <img src="{{asset('storage' . $tour->program->back_image) }} @if(!$tour->program->back_image) null @endif"--}}
{{--                     alt="">--}}
{{--                <div class="title ">--}}
{{--                <h3>{{$tour->program->title}}</h3>--}}
{{--            </div>--}}
{{--                <div class="description_program_tour">--}}
{{--                    <p>--}}
{{--                        {{$tour->program->description_program_tour}}--}}
{{--                    </p>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--</div>--}}
                <div class="row">
                    <div class="col-12 mb-5">


                        <form action="{{route('admin.program_tour.store')}}"
                              method="POST"
                              class=""
                              enctype="multipart/form-data"
                        >

                            @csrf
                            <div class="form-group ">
                                <label>Выберите Тур</label>
                                <select  name="tour_id"
                                        class="form-control">
                                    @foreach($tours as $tour)
                                        <option value="{{$tour->id}}"
                                            {{$tour->id == old('tour_id') ? 'selected' : ''}}
                                        >{{$tour->title}}

                                        </option>
                                    @endforeach

                                </select>
                                @error('tour_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="day-fields">
                                <div class="form-group ">
                                    <label for="title">Название </label>
                                    <input name="title"
                                           type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           placeholder="Название программы день" >
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group" >
                                    <span class="font-weight-bolder">Описание программы</span>
                                    <textarea id="summernote" name="description" ></textarea>
                                </div>
                                <div class="form-group" >
                                    <span class="font-weight-bolder">Описание программы баннер краткое</span>
                                    <textarea  class="summernote" name="begin_tour_banner" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Добавить фотографию для дня</label>
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

                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content -->


@endsection

