<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <h1>Add new user</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif
    <form action="add-user" method="post">
        @csrf
        <div>
            <input type="text" class="{{$errors->has('username') ? 'border-red-500' : ''}}" name="username" value="{{old('username')}}" placeholder="enter username">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>

        <div>
            <input type="email" name="email" value="{{old('email')}}" placeholder="enter email">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>

        <div>
            <input type="text" name="city" value="{{old('city')}}" placeholder="enter city">
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>

        <div>
            <input id="php" value="php" name="skills" type="checkbox" />
            <label for="php">php</label>
            <input id="java" value="java" name="skills" type="checkbox" />
            <label for="java">java</label>
            <input id="node" value="node" name="skills" type="checkbox" />
            <label for="node">node</label>
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>

        <button>add new user</button>

    </form>
</div>
