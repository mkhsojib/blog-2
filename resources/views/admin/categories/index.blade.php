@extends('layouts.app')



@section('content')


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $i=>$category)
            <tr>


                <th scope="row">{{ ++$i }}</th>
                <td>{{ $category->name }}</td>
                <td>Otto</td>
                <td>@mdo</td>


            </tr>


        @endforeach
        </tbody>
    </table>



@endsection