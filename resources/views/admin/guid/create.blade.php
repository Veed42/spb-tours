@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление гида</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Добавление гида</li>
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

                        <form action="{{route('admin.guid.store')}}"
                              method="POST"
                              class=""
                              enctype="multipart/form-data"
                        >
                            @csrf
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
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
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Имя Гида" >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="surname">Фамилия</label>
                                <input name="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="Фамилия" >
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="patronymic">Фамилия</label>
                                <input name="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" placeholder="Отчество" >
                                @error('patronymic')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="year_work">Опыт работы (лет)</label>
                                <input name="year_work"
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
                                <textarea id="summernote" name="guides_quality" ></textarea>
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

