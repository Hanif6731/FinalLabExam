<!DOCTYPE html>
<html>
<head>
    <title>Search job</title>
    <script type="application/javascript" src="{{asset('js/jquery')}}"></script>
</head>
<body>
<input type="text" name="searchString" placeholder="Search job"><button id="search">Search</button>
<div id="content">

</div>

<script>
    $(document).ready(function (){
        $('#search').click(function () {
            var searchString=$('#searchString').val();
            search(searchString);

        });
        function search(searchString) {
            $.post('/job/search/'+searchString, function (data,status){
                console.log(data);
            });
        }
    });
</script>
</body>
</html>
