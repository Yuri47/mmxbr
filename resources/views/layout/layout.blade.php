<!DOCTYPE html>


<html lang="en">


@include('layout.head')


<body data-spy="scroll" data-offset="0" data-target="#navigation">


@include('layout.header')    


@yield('content')

 
@include('layout.slider')


@include('layout.footer')


@include('layout.scripts')
 
 
</body>


</html>


