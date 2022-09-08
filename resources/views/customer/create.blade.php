@extends('layouts.master')

@section('content')
<div class="space-sidebar">
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Customer List</h3>
    </div>
    <div class="box-body">
      
        <form class="px-3" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <div class="form-input">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id=""
                    value="" placeholder="Enter Here Name"> 
            </div>
            </div>
            <div class="form-group">
                 <label>Email</label>
                 <div class="form-input">
                 <input class="input-control" name="file" type="file" id="" data-validation="required">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
</div>
@endsection