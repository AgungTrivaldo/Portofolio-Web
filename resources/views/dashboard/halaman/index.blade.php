@extends('dashboard.layout')
@section('content')

<p class="card-title">Pages</p>
<div class="pb3">
 <a href="{{route('halaman.create')}}"class="btn btn-primary">add</a>
</div>
 <div class="table-responsive">
  <table class="table table-stripped">
   <thead>
    <tr>
     <th class="col-1">No</th>
     <th class="">Judul</th>
     <th class="col-2">Aksi</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td></td>
     <td></td>
     <td></td>
    </tr>
   </tbody>
  </table>
 </div>
@endsection