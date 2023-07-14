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
    <center><h1 style="font-family: 'Times New Roman', Times, serif">Data Produk</h1></center>
 
   <div class="container">
    <div class="card">
      @include('message')
        <div class="card-body">
            <div class="row"> 
            @foreach ($data['products'] as $dt) 
                <div class="col-sm-6 mb-3 mt-1 mb-sm-0">
                  <div class="card" style="height:520px;">
                    <img src="{{$dt['thumbnail'] ?? ''}}" class="img-thumbnail" style="height: 300px;pointer-events: none;">
                    <div class="card-body">
                      <h5 class="card-title">{{ \Illuminate\Support\Str::limit($dt['title'], 25, $end='...') }} <br>({{$dt['brand']}})</h5> 
                      <p class="price">Rp {{number_format($dt['price'],2,',','.')}}</p>
                      <p class="card-text"> {{ \Illuminate\Support\Str::limit($dt['description'], 40, $end='...') }} </p> 
                      <a href="{{ route('detailbarang', $dt['id']) }}" class="badge bg-primary" style="font-family: 'Times New Roman', Times, serif"><i class="bi bi-bag"></i> Detail</a> 
                        <a href="{{ route('formpembelian', $dt['id']) }}" class="badge bg-danger" style="font-family: 'Times New Roman', Times, serif"><i class="bi bi-bag"></i> Beli Sekarang</a> 
                    </div>
                  </div>
                </div>  
            @endforeach 
            <a href="{{ route('cetakbarang') }}" class="act-btn" title="Cetak Data">
              <i class="bi bi-printer"></i>
            </a>
        </div>
      </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>