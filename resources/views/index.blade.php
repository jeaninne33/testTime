@extends('welcome')
@section('content')
    <div ng-controller="weather" class="col-sm-12 no-float no-padding">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong>El Clima</strong></h2>
            </div>
        </div>
   
    <br/>
    <hr>
     <div style="margin-top: 30px;">
        <div class="alert alert-danger" id='error' ng-show="error" >
           @{{error}}
        </div>
    </div>
         <br/>
    {!! Form::open(['route'=>'index.store','id'=>'form1', 'name'=>'form1','method'=> 'POST', 'novalidate', 'ng-submit'=>'save($event)']) !!}

         @include('form')
    {!! Form::close() !!}
 </div>
@endsection
@section('scripts')
    <script>
    $(document).ready(function(){

    });
     
    </script>
@endsection