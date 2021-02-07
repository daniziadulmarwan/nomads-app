@extends('layouts.admin')

@section('content')

<!-- Begin Page -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Paket Travel {{ $item->title }}</h1>
</div>

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('travel-package.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $item->location }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ $item->featured_event }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $item->language }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $item->foods }}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ $item->departure_date }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $item->duration }}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
        </div>

        <div class="form-group">
          <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
        </div>

        <div class="form-group">
          <textarea name="about" rows="10" class="form-control d-block w-100">{{ $item->about }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
      </form>
    </div>
  </div>


</div>
<!-- End Page -->

@endsection