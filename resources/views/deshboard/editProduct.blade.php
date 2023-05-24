@extends('deshboard.master')
@section('content')

 <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Update Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">

      <form method="POST" action="{{route('update',$editItem->id)}}" enctype="multipart/form-data">
@csrf
      <div class="container">
       	<div class="row"> 
          
       		<div class="col-md-6">
             	<input id="CourseNameId" name="name" type="text" id="" class="form-control mb-3" value="{{$editItem->name}}">
          	 	<input id="CourseDesId" type="text" name="description" id="" class="form-control mb-3"value="{{$editItem->description}}">
               <input id="CourseEnrollId" name="price" type="text" id="" class="form-control mb-3" value="{{$editItem->price}}">
    		 	
       		</div>
       		
       	</div>
       </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseAddConfirmBtn" type="submit" class="btn  btn-sm  btn-danger">Update</button>
      </div>
      </form>
       
    </div>
  </div>

@endsection