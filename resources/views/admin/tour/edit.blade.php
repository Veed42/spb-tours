@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Реадактирование Тура</h1>
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

                        <form action="{{route('admin.tour.update', $tour->id)}}"
                              method="POST"
                              class="w-25">
                            @csrf
                            @method('PATCH')
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
                                <label for="exampleInputFile">Главное изобаражение</label>
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

