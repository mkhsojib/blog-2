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




        <div class="card-header">Create a new post</div>

        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Title">

                </div>


                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control" >

                </div>



                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Post</button>

                </div>





            </form>
        </div>



    </div>

    </div>


@endsection