@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create new employee:</div>
               <div class="card-body">
                   <form action="{{ route('employees.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Employee name: </label>
                           <input type="text" name="e_name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Employee surname: </label>
                           <input type="text" name="e_surname" class="form-control"> 
                       </div>
                       {{-- <div class="form-group">
                           <label>Description: </label>
                           <textarea id="mce" name="p_description" rows=10 cols=100 class="form-control"></textarea>
                       </div> --}}
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
