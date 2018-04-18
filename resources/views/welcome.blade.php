<!DOCTYPE html>
 <html ng-app="TIME">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>.::TEST TIME JEA::.</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
 
<div class="container">
    @yield('content')
</div>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
         {!! Html::script('js/jquery-2.1.0.min.js') !!}
           {!!  Html::script('js/app.js') !!}
         @yield('scripts')

</body>

</html>
