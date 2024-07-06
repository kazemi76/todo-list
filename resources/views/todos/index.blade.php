@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h4>تسک ها</h4>
                <a class="btn btn-sm btn-outline-dark mb-3" href="{{route('todos.create')}}">ایجاد تسک+</a>

                <div class="card">
                    <div class="card-header">تسک ها</div>
                    <div class="card-body">

                        <ul class="list-group">
                            @foreach ($todos as $todo)

                            <li class="list-group-item d-flex justify-content-between ">
                                {{$todo->title}}
                                <div>

                                    @if (!$todo->complated)
                                    <a class="btn btn-sm btn-dark" href="{{route('todos.show',['todo'=>$todo->id])}}">نمایش</a>
                                    <a class="btn btn-sm btn-outline-info" href="{{route('todos.complete',['todo'=>$todo->id])}}">انجام شد</a>
                                    @else
                                    <a class="btn btn-sm btn-dark" href="{{route('todos.show',['todo'=>$todo->id])}}">نمایش</a>
                                    <strong style="color: green">انجام شده</strong>
                                    @endif

                                </div>
                                </li>


                              @endforeach
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-5">
                    {{$todos->links()}}
                </div>
            </div>
        </div>

    </div>
@endsection
