@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h4>{{$todo->title}}</h4>

                <div class="card">
                    <div class="card-header">توضیحات</div>
                    <div class="card-body">

                        <ul class="list-group d-flex justify-content-between">

                            <li class="list-group-item ">{{$todo->description}}
                            </li>
                            <hr>

                            <div class="d-flex mb-3 mr-3">
                                <a class="btn btn-sm btn-outline-dark ml-3" href="{{route('todos.edit',['todo'=>$todo->id])}}">ویرایش</a></li>

                                <form class="mr-2" action="{{route('todos.delete',['todo'=>$todo->id])}}" method="POST">
                                    @csrf
                                    @method('delete')

                                <button class="btn btn-sm btn-danger ">حذف</button></li>

                                </form>
                            </div>

                        </ul>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
