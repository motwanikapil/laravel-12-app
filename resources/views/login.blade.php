<div>
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="user" placeholder="enter name">
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <button>login</button>
    </form>
</div>
