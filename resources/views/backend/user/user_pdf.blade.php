<!doctype html> 
<html> 
<head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <style type="text/css"> 
 table { 
 border-collapse: collapse; 
 width: 100%; 
 } 
 td, 
 th { 
 border: 1px solid #ccc; 
 padding: 10px; 
 } 
 </style> 
</head> 
<body> 
 <table> 
 <thead> 
 <tr> 
 <th scope="col">#</th>  
 <th scope="col">Nama</th> 
 <th scope="col">Email</th> 
 </tr> 
 </thead> 
 <tbody> 
 @foreach ($user as $key => $item) 
 <tr> 
 <td>{{ ++$key }}</td> 
 <td>{{ $item->name }}</td> 
 <td>{{ $item->email }}</td> 
 </tr> 
 @endforeach 
 </tbody> 
 </table> 
</body> 
</html> 