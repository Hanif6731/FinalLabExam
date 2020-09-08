<!DOCTYPE html>
<html>
<head>
    <title>Create Job</title>
</head>
<body>

<h1>Create job page</h1>
<a href="{{route('job.index')}}">Back</a>
<form method="post" action="{{route('job.store')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="company" value="{{session('company')}}" >
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="{{old('title')}}" ></td>
        </tr>

        <tr>
            <td>Location</td>
            <td><input type="text" name="location" value="{{old('location')}}" ></td>
        </tr>
        <tr>
            <td>salary</td>
            <td><input type="number" name="salary" value="{{old('salary')}}" ></td>
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
