@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div>
    <form action="/form-submit" method="post">
        @csrf
    <div>
        <input type="text" placeholder="Type username" name="username" value="{{ old("username") }}">
    </div>
    <div>
        <input type="password" placeholder="Type password" name="password" value="{{ old("password") }}">
    </div>
    <div>
        <input type="submit">
    </div>
    </form>
</div>
