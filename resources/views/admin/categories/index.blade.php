@extends('layouts.app')


@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">

           Categories

        </div>

        <div class="panel-body">

            <table class="table table-hover">
             
        <thead>
            
            <th>

                Category name
            
            </th>

            <th>

                Editing
            
            </th>

            <th>

                Deleting
            
            </th>

        </thead>

        <tbody>

            @if($categories->count() > 0)

                @foreach($categories as $category)
                    <tr>

                        <td>

                            {{ $category->name }}

                        </td>

                        
                        <td>
                        
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-info "> update

                                <span class="glyphicon glyphicon-pencil"> </span>

                            </a>
                            
                        </td>

                        <td>

                            <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-danger"> delete
                            
                                <span class="glyphicon glyphicon-trash"> </span>

                            </a>

                        </td>


                    </tr>

                @endforeach
            
            @else

                <tr> 
                    
                    <th colspan="5" class="text-center" > No categories published </th>

                </tr>

            @endif

        </tbody>


        </div>

       
    </div>

    


@stop