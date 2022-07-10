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
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Telepon</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($customer as $key => $item) 
            <tr> 
                <td>{{ ++$key }}</td> 
                <td>{{ $item->name }}</td> 
                <td>{{ $item->alamat }}</td> 
                <td>{{ $item->email }}</td> 
                <td>{{ $item->telepon }}</td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</body> 
</html> 