<!DOCTYPE html>
<html lang="en">
@include('components.partial.head')
<body>
@include('components.partial.nav')

{{$slot}}
@include('components.partial.bottom')


</body>

@include('components.partial.script')
</html>