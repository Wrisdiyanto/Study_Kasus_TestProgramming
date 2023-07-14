<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="/images/logowidii.png">
</head>
  <body>
    <center><h1 style="font-family: 'Times New Roman', Times, serif">{{$title}}</h1></center>
   <div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('checkout')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col"> 
                      <input type="text" class="form-control @error('no_pesananan') is-invalid @enderror" name="no_pesananan" value="{{$nopesanan}}" readonly>
                    </div>
                    <div class="col">
                      <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col"> 
                      <input type="text" class="form-control @error('nama_suplier') is-invalid @enderror" name="nama_suplier" placeholder="Nama Supplier" value="{{old('nama_suplier')}}" required>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="nama_produk" value="{{$data['title']}}" readonly>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="total" value="{{number_format($data['price'],2,',','.')}}" readonly>
                      </div> 
                    
                  </div>
                   
                  <div class="row mt-1">
                    <div class="col"> 
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                  </div>
            </form>
      </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>