@extends('admin.header-footer')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary mb-2"><a href="{{url('addcategory')}}">ADD CATEGORY</a> </button>
                        <form action="#" method="get" class="main__title-form">
                                {{csrf_field()}}
                                <input type="text" name="search" placeholder="search..">

                            </form>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORY NAME</th>
                                        <th>MODIFY</th>
                                        <th>REMOVE</th>

                                    </tr>
                                </thead>
                                @foreach($data as $ans)
                                <tbody>
                                    <tr>
                                        <td>{{$ans->id}}</td>
                                        <td>{{$ans->name}}</td>
                                        <td><a href="editcat/{{$ans->id}}"><i class="mdi mdi-pencil"></i></a></td>
                                        <td><a href="deletecategory/{{$ans->id}}"><i class="mdi mdi-close"></i></a></td>

                                    </tr>


                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


@endsection
