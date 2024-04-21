@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
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
                    <div class="col-4 mb-3" >
                        <a href="{{route('admin.category.create')}}"
                            class="btn btn-block btn-primary">
                            Добавить категорию туров
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                            <div class=" table-responsive p-0 mt-5">
                                <table  class="table table-hover text-center text-nowrap shadow">
                                    <thead class="">
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Название категории</th>
                                        <th scope="col">Посмотреть</th>
                                        <th scope="col">Отредактировать</th>
                                        <th scope="col">Удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody class="">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                            <td><a href="{{route('admin.category.show', $category->id)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a></td>
                                            <td><a href="{{route('admin.category.edit', $category->id)}}" class="text-success">
                                                    <i class="fa fa-edit"></i>
                                                </a></td>
                                            <td>
                                                <form action="{{route('admin.category.delete', $category->id)}}"
                                                      method="POST"
                                                >
                                                    @csrf
                                                    @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent"> <i class="fas fa-trash text-danger" role="button" ></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                         </div>
                     </div>
                 </div>
        </section>
    </div>
@endsection
