@extends('deshboard.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
                    <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Pricet</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($view as $ditels)
                        <tr>
                        <th class="th-sm"><img class="table-img" src="{{asset('/image/'.$ditels->image)}}"></th>
                        <th class="th-sm">{{$ditels->name}}</th>
                        <th class="th-sm">{{$ditels->description}}</th>
                        <th class="th-sm">{{$ditels->price}}</th>
                        <th class="th-sm"><a href="{{route('update',$ditels->id)}}" ><i class="fas fa-edit"></i></a></th>
                        <th class="th-sm"><a href="{{route('delete',$ditels->id)}}" ><i class="fas fa-trash-alt"></i></a></th>
                        </tr>	
                        
                        @endforeach
                        
                    </tbody>
                    </table>

        </div>
    </div>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>




</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection