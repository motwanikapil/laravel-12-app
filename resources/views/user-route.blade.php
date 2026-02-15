<div>
    <h1>User form</h1>

    <form action="/user-route" method="post">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <input type="text" name="user" placeholder="enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form>
</div>

