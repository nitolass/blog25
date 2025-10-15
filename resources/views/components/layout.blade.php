<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default description'}}">
</head>
<body>
    <x-partials.navigation />

    @session('status')
    <div>
        {{session('status')}}
    </div>
    @endsession

{{$slot}}
@isset($sidebar)
    <div id="sidebar">
        <h3>{{__('Sidebar')}}</h3>
        <div>{{$sidebar}}</div>
    </div>
@endisset
</body>
</html>
