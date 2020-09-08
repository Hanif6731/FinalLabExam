<!DOCTYPE html>
<html>
<head>
    <title>Edit employer</title>
</head>
<body>

<h1>Edit employer page</h1>

<a href="{{route('job.index')}}">Back</a>

<form method="post" action="{{route('job.update',$job->id)}}" >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="company" value="{{$job['company']}}" >
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="{{$job['title']}}" ></td>
        </tr>

        <tr>
            <td>Location</td>
            <td><input type="text" name="location" value="{{$job['location']}}" ></td>
        </tr>
        <tr>
            <td>salary</td>
            <td><input type="number" name="salary" value="{{$job['salary']}}" ></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
