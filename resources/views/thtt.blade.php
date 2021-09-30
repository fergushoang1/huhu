<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Document</title>
</head>
<body>
	<div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('thtt')}}" method="POST" role="form" class="form-group">
            @csrf
 <h1 class="display-1">Tổng hiệu tích thương</h1>
       

          
            <div class="form-group">
                <label for="">số a</label>
                <input type="text"  class="form-control" id="txta" name="txta" value="{{ isset($a)?$a: ' '}}">
                  
            </div>
            <div class="form-group">
                <label for="">số b</label>
                <input type="text" class="form-control" id="txtb" name="txtb" value="{{ isset($b)?$b: ' '}}">

 </br><input type="radio" id="tong" name="mtp" value="tong">
 <label for="tong">Tong</label><br>
 <input type="radio" id="hieu" name="mtp" value="hieu">
 <label for="hieu">hieu</label><br>
 <input type="radio" id="tich" name="mtp" value="tich">
 <label for="tich">tich</label><br>
 <input type="radio" id="thuong" name="mtp" value="thuong">
 <label for="thuong">thuong</label>


            </div>
            <button type="submit" class="btn btn-dark ">Giải</button>
            <button type="button" class="btn btn-dark " onclick="myfunction()">reset</button>
   
        </form>
    </br>
        {{isset($kq)?$kq:''}}
        

    </div>
    <script>
        function myfunction(){
            document.getElementById("txta").value="";
            document.getElementById("txtb").value="";
            document.getElementById("txta").focus();
        }
    </script>
</body>
</html>
