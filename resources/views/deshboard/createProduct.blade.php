@extends('deshboard.master')
@section('content')

 <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">

      <form method="POST" action="{{route('add-product')}}" enctype="multipart/form-data">
@csrf
      <div class="container">
       	<div class="row">
       		<div class="col-md-6">
             	<input id="CourseNameId" name="name" type="text" id="" class="form-control mb-3" placeholder="Name">
          	 	<input id="CourseDesId" type="text" name="description" id="" class="form-control mb-3" placeholder="Description">
               <input id="CourseEnrollId" name="price" type="text" id="" class="form-control mb-3" placeholder="price">
    		 	
       		</div>
       		<div class="col-md-6">
           <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
           name="file[]"  multiple  required autocomplete="image" autofocus>
     			
       		</div>
       	</div>
       </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseAddConfirmBtn" type="submit" class="btn  btn-sm  btn-danger">Save</button>
      </div>
      </form>
       
    </div>
  </div>

@endsection

