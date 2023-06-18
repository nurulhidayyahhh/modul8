@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-4">
<div class="jumbotron">
<div class="row">
    <div class="col-10 col-md-7">
  <h1> class="display-5">Welcome to Master Data Barang !</h1>
  <p class="lead">Inventory application is software developed to facilitate the process of managing company stock and warehouses. The inventory application is the right solution to speed up the company's asset inventory system, so that the process of data collection and product management becomes more effective and efficient and makes it easier for logistics officers to carry out the asset management inventory process at the head office and branch offices.</p>
  <a class="btn btn-info btn-lg" href="{{ route('barangs.index') }}" role="button">Go to list barang</a>
  </div>
  <div class="col-8 col-md-5">
     <img src="{{ Vite::asset('resources/images/inventory2.png') }}" alt="image" class="img-fluid">
  </div>
</div>
 
</div>
</div>
@endsection
