<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.partials.Header')



<body>

@include('components.partials.navbar')

{{ $slot }}

@include('components.partials.Footer')

</body>
@include('components.partials.script')
</html>