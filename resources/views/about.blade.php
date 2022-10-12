@extends('master')

@section('content')
<div class="page-title">
    <h1>{{ $page_name }}</h1>
    <p>{{ $name }}</p>
</div>
<div>
<table class="table">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Phone</th>
<th scope="col">Joined Date</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
    <th scope="row">{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>{{ $user->created_at }}</td>
    </tr>
@endforeach

</tbody>
</table>
</div>
@endsection
