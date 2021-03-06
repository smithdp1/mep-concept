@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            <div class="alert alert-info" role="alert" style="padding: 3px;"><small><? date_default_timezone_set('America/Phoenix'); echo date("m/d/y h:i:sa"); ?></small></div>
         <button type="button" class="btn btn-outline-success btn-sm btn-block">CRTD</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">REL</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECO</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CUSTOM</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">SHIFT REPORT</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECH - W/C</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">JOHN DOE</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">ASSIGN</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">PRINT</button>

        </div>
        <div class="col-md-10">

       <table class="table table-hover table-sm">
           <thead><th>Order Number</th><th>Plant</th><th>Status</th><th>Type</th><th>Description</th><th>Maint Activity</th><th>Location</th><th>Equipment Desc.</th><th>Work Center</th><th>Priority</th><th>Start Date</th><th>Finish Date</th></thead>
           <tbody>
            @foreach($workOrders as $ord)
               <tr>
                <td>{{ $ord->id }}</td>
                <td>{{ $ord->plant }}</td>
                <td>{{ $ord->status }}</td>
                <td>{{ $ord->order_type }}</td>
                <td>{{ substr($ord->order_description, 0, 20) }}</td>
                <td>{{ $ord->maint_activity_type }}</td>
                <td>{{ $ord->location }}</td>
                <td>{{ substr($ord->equipment_desc, 0, 20) }}</td>
                <td>{{ $ord->work_center }}</td>
                <td>{{ $ord->priority }}</td>
                <td>{{ date('m-d-Y', strtotime($ord->start_date)) }}</td>
                <td>{{ date('m-d-Y', strtotime($ord->end_date)) }}</td>
              </tr>
               @endforeach
           </tbody>
       </table>
       </div>
       <div class="col-md-1">
            <div class="alert alert-info" role="alert" style="padding: 3px;"><small><? date_default_timezone_set('America/Phoenix'); echo date("m/d/y h:i:sa"); ?></small></div>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CRTD</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">REL</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECO</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CUSTOM</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">SHIFT REPORT</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECH - W/C</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">JOHN DOE</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">ASSIGN</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">PRINT</button>

        </div>
    </div>
</div>
@endsection
