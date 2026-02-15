<div>
    @if(session('message'))
        <div class="alert alert-success">
            <span class="success-message">{{ session('message') }}</span>
        </div>
    @endif

    <!-- Display any validation errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/flash-session" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone" value="{{ old('phone') }}">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>