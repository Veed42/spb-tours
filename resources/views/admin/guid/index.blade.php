@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Гиды</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Гиды</li>
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
                        <a href="{{route('admin.guid.create')}}"
                            class="btn btn-block btn-primary">
                            Добавить гида
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <div class=" table-responsive p-0 mt-5">
                                <table  class="table table-hover text-center text-nowrap shadow">
                                    <thead class="">
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Имя Гида</th>
                                        <th scope="col">Фамилия</th>
                                        <th scope="col">Отчество</th>
                                        <th scope="col">Тур</th>

                                        <th scope="col">Посмотреть</th>
                                        <th scope="col">Отредактировать</th>
                                        <th scope="col">Удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody class="">
                                    @foreach($guides as $guid)
                                        <tr>
                                            <td>{{$guid->id}}</td>
                                            <td>{{$guid->name}}</td>
                                            <td>{{$guid->surname}}</td>
                                            <td>{{$guid->patronymic}}</td>
                                            <td>{{$guid->tour->title}}</td>


                                            <td><a href="{{route('admin.guid.show', $guid->id)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a></td>
                                            <td><a href="{{route('admin.guid.edit', $guid->id)}}" class="text-success">
                                                    <i class="fa fa-edit"></i>
                                                </a></td>
                                            <td>
                                                <form action="{{route('admin.guid.delete', $guid->id)}}"
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
