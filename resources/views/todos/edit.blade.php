@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ایجاد تسک جدید</div>
                    <div class="card-body">

                        <form action="{{route('todos.update' ,['todo'=>$todo->id])}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" id='title' name="title" class="form-control @error('title') form-control-invalid @enderror" value="{{$todo->title}}">
                                @error('title')
                                <p class="invalid-feedback d-block">
                                    <strong>
                                        {{$message}}
                                    </strong>
                                </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea  id='description' name="description" class="form-control  @error('description') form-control-invalid @enderror" >{{$todo->description}}</textarea>
                                @error('description')
                                <p class="invalid-feedback d-block">
                                    <strong>
                                        {{$message}}
                                    </strong>
                                </p>
                                @enderror
                            </div>
                             <button class="btn btn-outline-dark mt-3" type="submit">ویرایش</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
