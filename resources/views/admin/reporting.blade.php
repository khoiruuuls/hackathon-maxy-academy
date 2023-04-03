@extends('admin.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="">
        ini halaman kosong
    </div>
    <input name="dates">
    <select class="js-example-basic-single" name="state">
        <option value="AL">Alabama</option>
        ...
        <option value="WY">Wyoming</option>
    </select>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $('input[name="dates"]').daterangepicker();
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
