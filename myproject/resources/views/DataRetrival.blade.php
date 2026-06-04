<form method="POST" action="/dataretrival">
    @csrf

    Name:
    <input type="text" name="name"> <br>

    Email:
    <input type="email" name  = "email" > <br>


    <button type="submit">submit</button>

</form>