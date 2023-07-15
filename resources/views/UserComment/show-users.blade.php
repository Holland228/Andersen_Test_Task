


<form method="post" action="/user-comment/create">
    <label>Enter your name:</label>
    <br><br>
    <input type="text" placeholder="please, enter your name" name="name" value="">
    <br><br>

    <label>Enter your e-mail:</label>
    <br><br>
    <input type="text" placeholder="please, enter your e-mail" name="email" value="">
    <br><br>

    <label>Enter your comment:</label>
    <br><br>
    <input type="text" placeholder="place for your comment" name="comment" value="">
    <br><br>

    <button type="submit" class="btn btn-success"> Submit </button>

</form>


@if($errors->any())

    Error:

    <ul>
        @foreach($errors->all() as $message)
            <li>
                {{$message}}
            </li>
        @endforeach
    </ul>

@endif

<br><br><br>


@foreach($userComments as $userComment)
    <div>
        <p>Name: {{ $userComment->name }}</p>
        <p>Email: {{ $userComment->email }}</p>
        <p>Comment: {{ $userComment->message }}</p>
        <p>Created At: {{ $userComment->created_at }}</p>
        <hr>
    </div>
@endforeach
