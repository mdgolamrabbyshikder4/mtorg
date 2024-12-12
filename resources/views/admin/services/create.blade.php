@extends('admin.inc.page')
@section('title')
Service Create- MTOrganization
@endsection
@section('admin-content')
@section('create_title')
MT Admin Panel Service Create
@endsection
        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
              </div>
          </div>
       @include('admin.forms.create_form')
        </div>
      </div>
@endsection