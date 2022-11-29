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
                        <button type="submit" class="btn btn-primary mb-2"><a href="{{url('addproduct')}}">ADD PRODUCT</a> </button>
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
                                        <th>Name</th>
                                        <th>Discripation</th>
                                        <th>Rs</th>
                                        <th>IMAGE</th>
                                        <th>MODIFY</th>
                                        <th>REMOVE</th>

                                    </tr>
                                </thead>
                                @foreach ($pro as $ans)
                                <tbody>
                                    <tr>
                                        <td>{{$ans->id}}</td>
                                        <td>{{$ans->name}}</td>
                                        <td>{{$ans->proname}}</td>
                                        <td>{!! nl2br($ans->discripation) !!}</td>

                                        <td>{{$ans->rs}}</td>
                                        <td><img src="{{url('item_img')}}/{{$ans->img}}"  hight="50" width="100"></td>
                                        <td><a href="editprod/{{$ans->id}}"><i class="mdi mdi-pencil"></i></a></td>
                                        <td><a href="deleteproduct/{{$ans->id}}"><i class="mdi mdi-close"></i></a></td>
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
