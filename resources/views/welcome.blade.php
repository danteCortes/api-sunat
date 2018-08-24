<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ingreso al sistema</title>

    {!! Html::style('css/app.css') !!}
  </head>
    <body>
      <div id="app" style="width: 100%">
        <main-component></main-component>
      </div>
      {!! Html::script('js/app.js') !!}
    </body>
</html>
