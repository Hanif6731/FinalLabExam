<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h1>Welcome home!</h1>

<a href="{{route('employer.create')}}">Create User</a> |
{{--<a href="{{route('logout.index')}}">logout</a>--}}


<h2>user list</h2>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Company</td>
        <td>Contact</td>
        <td>username</td>
        <td>Action</td>
    </tr>

    @foreach($users as $i=>$user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->company}}</td>
            <td>{{$user->contact}}</td>
            <td>{{$user->username}}</td>
            <td>
                <a href="{{route('employer.edit',$user->id)}}">Edit</a> |
                <a href="{{route('employer.destroy',$user->id)}}">Delete</a> |
                <a href="{{route('employer.show',$user->id)}}">Details</a> |
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
