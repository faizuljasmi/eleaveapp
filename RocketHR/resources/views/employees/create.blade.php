@extends('layouts.master')

@section('content')
<section class="content-header">
  <h1>
    Create New Employee Account
  </h1>
</section>
<div class ="content">
        @include('employees.partials.form', ['action' => route('employees_store')])
</div>
@endsection
