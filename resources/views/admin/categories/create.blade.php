@extends('layouts.app')


@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card">




        <div class="card-header">Create a new category</div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post" >

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Category Name">

                </div>




                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Category</button>

                </div>





            </form>
        </div>



    </div>

    </div>


@endsection