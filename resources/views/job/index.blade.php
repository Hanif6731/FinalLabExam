<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h1>Welcome home!</h1>

<a href="{{route('job.create')}}">Create Job</a> |
{{--<a href="{{route('logout.index')}}">logout</a>--}}


<h2>Job list</h2>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Company</td>
        <td>Location</td>
        <td>salary</td>
        <td>Action</td>
    </tr>

    @foreach($jobs as $i=>$job)
        <tr>
            <td>{{$job->id}}</td>
            <td>{{$job->title}}</td>
            <td>{{$job->company}}</td>
            <td>{{$job->location}}</td>
            <td>{{$job->salary}}</td>
            <td>
                <a href="{{route('job.edit',$jobs[$i]->id)}}">Edit</a> |
                <a href="{{route('job.delete',$jobs[$i]->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
