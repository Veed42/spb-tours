@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление тура</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Домой</a></li>
                            <li class="breadcrumb-item active"> Добавление Тура</li>
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
                    <div class="col-12 mb-5">

                        <form action="{{route('admin.tour.store')}}"
                              method="POST"
                              class=""
                              enctype="multipart/form-data"
                        >
                            @csrf
                            <div class="form-group w-25">
                                <label for="title">Название</label>
                                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Название тура" >
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Цена тура</label>
                                <input name="price"
                                       max="50000"
                                       min="0"
                                       type="number"
                                       step="any"
                                       class="form-control @error('title') is-invalid @enderror" placeholder="Цена тура" >
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <span class="font-weight-bolder">Описание тура</span>
                                <textarea id="summernote" name="waiting_for_programs" ></textarea>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Продолжительность тура</label>
                                <input name="duration_tour"
                                       type="text"
                                       class="form-control @error('duration_tour') is-invalid @enderror" placeholder="Продолжительность тура" >
                                @error('duration_tour')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="begin_tour">Начало тура</label>
                                <input name="begin_tour"
                                       type="time"
                                       class="form-control @error('begin_tour') is-invalid @enderror" placeholder="Начало тура" >
                                @error('begin_tour')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select name="category_id"
                                        class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                        {{$category->id == old('category_id') ? 'selected' : ''}}
                                        >{{$category->title}}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group guid_container">
                                <label>Выберите Гида</label>
                                <select name="guid_id"
                                        class="form-control guid_select">
                                    @foreach($guides as $guid)
                                        <option value="{{$guid->id}}"
                                            {{$guid->id == old('guid_id') ? 'selected' : ''}}
                                        >{{$guid->name}} {{$guid->surname}}

                                        </option>
                                    @endforeach

                                </select>
                                @error('guid_id')
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

