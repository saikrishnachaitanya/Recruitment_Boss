<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>


</head>
<body>
    <header class="row">
        @include('layouts.header')
    </header><br>
    <br><br><br><br>
<div class="container">

    <div class="row col-md-6 col-md-offset-2 custyle">

<center><h3><i>Candidates Information</i></h3></center>

    <table class="table table-striped custab">
    <thead>
            <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>email</th>
            <th>Expand</th>
            <th>Status</th>
        </tr>
    </thead>
    @foreach($value as $data)
            <tr>
                <td> 
            {{ $data->id }}
         </td>
                <td>
        {{ $data->first }}</td>
        <td> 
            {{ $data->email }}
         </td>
        
                <td class="text-center"><a class='btn btn-info btn-xs' href="organization/{{ $data->email }}"><span class="glyphicon glyphicon-edit"></span>view more</a></td>
            <td> 
             {{ $data->status }} 
         </td>
     </tr>
         @endforeach
            
    </table>
    </div>
</div>
</body>