@extends('layout')

@section('content')

<h1>Add Restraurent </h1>
<div class="col-sm-6">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label>Id</label>
            <input type="number" class="form-control" name="id" placeholder="Enter Id">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter address"><br>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop
