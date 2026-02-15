<div>
    <h1>Profile page</h1>
    @if(session('user'))
    <h1>welcome, {{session('user')}}</h1>
    @else
    <h1>no user found in session</h1>
    @endif
    <a href='/logout'>Logout</a>
</div>
