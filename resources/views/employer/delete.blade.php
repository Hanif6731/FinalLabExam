<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>

<h1>Are you sure?</h1>
<form action="{{route('employer.destroy',$user['id'])}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="Delete">
<table>
    <tr style="text-align: left"><th colspan="2">User info:</th></tr>
    <tr>
        <td>ID</td>
        <td>: {{$user['id']}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>: {{$user['name']}}</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>: {{$user['username']}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>: {{$user['password']}}</td>
    </tr>
    <tr>
        <td>Company</td>
        <td>: {{$user['company']}}</td>
    </tr>
    <tr>
        <td>Contact</td>
        <td>: {{$user['contact']}}</td>
    </tr>
</table>
    <input type="submit" value="Delete">
</form>

</body>
</html>
