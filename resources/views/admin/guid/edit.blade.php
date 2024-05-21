@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Реадактирование гида</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Редактирование Тура</li>
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

                        <form action="{{route('admin.guid.update', $guid->id)}}"
                              method="POST"
                              class=""
                              enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="w-25 mb-3">
                                    <img src="{{asset( 'storage/' . $guid->image_guid)}}" class="card-img-top" alt="">
                                </div>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image_guid') is-invalid @enderror" id="exampleInputFile" name="image_guid">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>
                                        @error('image_guid')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-25">
                                <label for="name">Имя Гида</label>
                                <input name="name"
                                       value="{{$guid->name}}"
                                       type="text"
                                       class="form-control @error('name') is-invalid @enderror" placeholder="Имя Гида" >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="surname">Фамилия</label>
                                <input name="surname"
                                       value="{{$guid->surname}}"
                                       type="text"
                                       class="form-control @error('surname') is-invalid @enderror" placeholder="Фамилия" >
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="patronymic">Фамилия</label>
                                <input name="patronymic"
                                       value="{{$guid->patronymic}}"
                                       type="text"
                                       class="form-control @error('patronymic') is-invalid @enderror" placeholder="Отчество" >
                                @error('patronymic')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="year_work">Опыт работы (лет)</label>
                                <input name="year_work"
                                       value="{{$guid->year_work}}"
                                       max="20"
                                       min="0"
                                       type="number"
                                       step="any"
                                       class="form-control @error('year_work') is-invalid @enderror" placeholder="Опыт работы(лет)" >
                                @error('year_work')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <textarea id="summernote" name="guides_quality" >{{$guid->guides_quality}}</textarea>
                            </div>
                            <div class="form-group" >
                                <textarea class="summernote" name="description" >{{$guid->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Выберите Тур</label>
                                <select name="tour_id"
                                        class="form-control">
                                    @foreach($tours as $tour)
                                        <option value="{{$tour->id}}"
                                            {{$tour->id == $guid->tour_id ? 'selected' : ''}}
                                        >{{$tour->title}}</option>
                                    @endforeach

                                </select>
                                @error('tour_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

