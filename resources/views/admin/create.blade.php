<!DOCTYPE html>
<html>
<head>
    <title>Create employer</title>
</head>
<body>

<h1>Create employer page</h1>
<a href="{{route('employer.index')}}">Back</a>
<form method="post" action="{{route('employer.store')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{old('name')}}" ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="{{old('username')}}" ></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{{old('Password')}}" ></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><input type="text" name="company" value="{{old('company')}}" ></td>
        </tr>
        <tr>
            <td>contact</td>
            <td><input type="text" name="contact" value="{{old('contact')}}" ></td>
        </tr>


        <tr>
            <td></td>
            <td><input type="submit" value="Create"></td>
        </tr>
    </table>
</form>

@foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
</body>
</html>
