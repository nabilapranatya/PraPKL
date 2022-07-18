<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Staff
        </legend>
        <br>
        <h2>StaffBranch</h2>
        <table border="1">
            <tr>
                <td>staffNo</td>
                <td>sName</td>
                <td>postion</td>
                <td>salary</td>
                <td>branchNo</td>
                <td>bAdress</td>
            </tr>
            @foreach ($StaffBranch as $data)
            <tr>
                <td>{{$data['staffNo']}}</td>
                <td>{{$data['sname']}}</td> 
                <td>{{$data['position']}}</td>
                <td>{{$data['salary']}}</td>
                <td>{{$data['branchNo']}}</td>
                <td>{{$data->bAdress}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <h2>Staff</h2>
        <table border ="1">
            <tr>
            <td>staffNo</td>
                <td>sName</td>
                <td>postion</td>
                <td>salary</td>
                <td>branchNo</td>
            </tr>
            @foreach ($Staff as $data)
            <tr>
            <td>{{$data['staffNo']}}</td>
                <td>{{$data['sname']}}</td> 
                <td>{{$data['position']}}</td>
                <td>{{$data['salary']}}</td>
                <td>{{$data['branchNo']}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <h2>Branch</h2>
        <table border ="1">
            <tr>
                <td>branchNo</td>
                <td>bAdress</td>
            </tr>
            @foreach ($branch as $data)
            <tr>
                <td>{{$data['branchNo']}}</td>
                <td>{{$data->bAdress}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>