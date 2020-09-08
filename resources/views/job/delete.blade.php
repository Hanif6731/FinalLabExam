<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>

<h1>Are you sure?</h1>
<form action="{{route('job.destroy',$job['id'])}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="Delete">
    <table>
        <tr style="text-align: left"><th colspan="2">User info:</th></tr>
        <tr>
            <td>ID</td>
            <td>: {{$job['id']}}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>: {{$job['title']}}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>: {{$job['company']}}</td>
        </tr>
        <tr>
            <td>Location</td>
            <td>: {{$job['location']}}</td>
        </tr>
        <tr>
            <td>Salary</td>
            <td>: {{$job['salary']}}</td>
        </tr>
    </table>
    <input type="submit" value="Delete">
</form>

</body>
</html>
