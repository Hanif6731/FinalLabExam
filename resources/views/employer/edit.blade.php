<!DOCTYPE html>
<html>
<head>
    <title>Edit employer</title>
</head>
<body>

<h1>Edit employer page</h1>

<a href="{{route('employer.index')}}">Back</a>

<form method="post" action="{{route('employer.update',$user->id)}}" >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{$user['name']}}"  ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="{{$user['username']}}"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{{$user['password']}}"></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><input type="text" name="company" value="{{$user['company']}}"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="text" name="contact" value="{{$user['contact']}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
