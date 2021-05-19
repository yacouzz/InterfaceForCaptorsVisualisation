@extends('index')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@stop

@section('content')

<table class="table col-md-12">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">MAC address</th>
        <th scope="col">Nom</th>
        <th scope="col">Ajouté le</th>
      </tr>
    </thead>
    <tbody>
    @foreach($caps as $c)
      <tr>
        <th scope="row">{{$c->id}}</th>
        <td>{{$c->mac}}</td>
        <td>{{$c->name}}</td>
        <td>{{$c->created_at->format('d.m.Y')}}</td>
      </tr>
    @endforeach
    </tbody>
</table>

@stop