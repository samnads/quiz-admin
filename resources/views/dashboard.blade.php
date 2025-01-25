@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
@endsection
@push('head-scripts')
@endpush
@push('footer-scripts')
    <script src="{{ asset('admin/vendors/dropzone/dropzone-min.js') }}"></script>
@endpush
