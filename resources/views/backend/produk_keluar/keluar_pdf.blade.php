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
                <th scope="col">Produk_id</th>
                <th scope="col">Customer_id</th>
                <th scope="col">Qty</th>
                <th scope="col">Tanggal</th>
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($produk_keluar as $key => $item) 
            <tr> 
                <td>{{ ++$key }}</td> 
                <td>{{ $item->Product->id }}</td>
                <td>{{ $item->Customer->id }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->tanggal }}</td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</body> 
</html> 