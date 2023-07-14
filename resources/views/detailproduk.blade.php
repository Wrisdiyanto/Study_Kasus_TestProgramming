<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/galery.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="/images/logowidii.png">
</head>
  <body>
    <center><h1 style="font-family: 'Times New Roman', Times, serif">Data Produk {{$data['title']}}</h1></center> 
    
    <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
              <img id="expandedImg" src="{{$data['thumbnail'] ?? ''}}" class="img-thumbnail" style="width:50%;height:90%;margin-left:14%">
              <div id="imgtext"></div>
            </div>
           
            <div class="col-sm-6" > 
              <h3 style="font-family:'Times New Roman', Times, serif; ">Price : Rp {{number_format($data['price'],2,',','.')}}</h3>
              <p class="text-muted" style="font-family: 'Times New Roman', Times, serif">Category : {{$data['category']}}  | Brand : {{$data['brand']}} </p> 
              <p class="text-muted" style="margin-top: -1%" style="font-family: 'Times New Roman', Times, serif">Stock : {{$data['stock']}}   </p> 
              <h2 style="font-family: 'Times New Roman', Times, serif">Description</h2>
              <h4 style="font-family: 'Times New Roman', Times, serif">{{$data['description']}}</h4>
           
             {{-- <i class="bi bi-star checked"></i>
             <i class="bi bi-star checked"></i>
             <i class="bi bi-star checked"></i>
             <i class="bi bi-star "></i>
             <i class="bi bi-star "></i> --}}
            </div>
          </div>  
          <div class="row">  
            
            <div class="column">
              <img src="{{$data['images'][2] ?? ''}}"  style="height: 150px;width:250px;" class="img-thumbnail" onclick="myFunction(this);">
            </div> 
          
            <div class="column">
              <img src="{{$data['images'][3] ?? ''}}"  style="height: 150px;width:250px;" class="img-thumbnail" onclick="myFunction(this);">
            </div> 
          
            <div class="column">
              <img src="{{$data['images'][4] ?? ''}}"  style="height: 150px;width:250px;" class="img-thumbnail" onclick="myFunction(this);">
            </div>
          </div>   
          <a href="{{ route('home') }}" class="badge bg-danger text-end"><i class="bi bi-backspace"></i> Kembali Ke Halaman Utama</a>
      </div> 
    
    
      <script>
        function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          var imgText = document.getElementById("imgtext");
          expandImg.src = imgs.src;
          imgText.innerHTML = imgs.alt;
          expandImg.parentElement.style.display = "block";
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>