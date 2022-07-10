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
                <th scope="col">id_kategori</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Image</th>
                <th scope="col">Qty</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($produk as $key => $item) 
            <tr> 
                <td>{{ ++$key }}</td>
                <td>{{ $item->getCategory->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->harga }}</td>
                <td> 
                    <img class="rounded-square" width="50px" height="50px" src="{{ asset('upload/produk/' . $item->image) }}" alt=""> 
                </td>
                <td>{{ $v->qty }}</td>
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</body> 
</html> 