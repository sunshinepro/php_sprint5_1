
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create new project:</div>
               <div class="card-body">
                   <form action="{{ route('projects.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Project name: </label>
                           <input type="text" name="p_name" class="form-control">
                       </div>
                       {{-- <div class="form-group">
                           <label>Atstumas: </label>
                           <input type="number" name="distance" class="form-control"> 
                       </div> --}}
                       <div class="form-group">
                           <label>Description: </label>
                           <textarea id="mce" name="p_description" rows=10 cols=100 class="form-control"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


