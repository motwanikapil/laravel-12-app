<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1>Home</h1>
    <h3>{{URL::current()}}</h3>

    <h3>
        {{URL::full()}}
    </h3>

    <h3>
        {{url()->current()}}
    </h3>

    <h3>
        {{url()->full()}}
    </h3>

    <a href="/about2">about</a>
    <a href="{{URL::to('about2')}}">about</a>
    <a href="{{URL::to('about2',['kapil'])}}">About kapil</a>
</div>
