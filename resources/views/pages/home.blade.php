@extends('layouts.app')

@section('content')
<div class="container-scroller d-flex">
        @include('partials.menu')

    <div class="container-fluid page-body-wrapper">

      	@include('partials.nav')
      <div class="main-panel">
        <div class="content-wrapper">
 			<home></home>
        </div>
        @include('partials.footer')

      </div>
    </div>
 </div>
@endsection
