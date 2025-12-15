<h1>Login page</h1>
{{-- <h2>{{ $adminName[3] }}</h2> --}}
@foreach ($adminName as $item)
    <h3>{{ $item }}</h3>
@endforeach