@extends('layouts.app')

@section('content')
    <section class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card border border-0 mt-4 shadow rounded" style="width:36rem;">
                <div class="card-header bg-primary">
                    <h3 class="text-center text-white">Todo App</h3>
                </div>
                <div class="card-body ">
                    <form action="/todo/insert" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control shadow-sm rounded" name="title" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Discription</label>
                            <textarea name="description" id="" cols="30" rows="4" class="form-control shadow-sm rounded" required></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="submit" class="btn btn-outline-primary shadow-sm rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <div style="width:36rem;">
                @if(session()->has('todo'))
                    @foreach(session('todo') as $item)
                        <form action="/todo/delete" method="post" class="mb-2 bg-primary p-3 text-light shadow rounded" style="border-radius: 15px;">
                            @csrf
                            <div class="row p-sm-2 p-0">
                                <div class="col-sm-10 col-10">
                                    <input type="hidden" value="{{$item['id']}}" name="id">
                                    <h4>{{ $item['title'] }}  </h4>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                                <div class="col-sm-2 col-2 text-sm-end text-start mx-0 px-0">
                                    <input type="submit" value="X" class="btn btn-danger" style="border-radius: 100px;">
                                </div>
                                <hr class="border border-light border-2 opacity-50">
                            </div>
                        </form>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
