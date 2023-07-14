<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="shortcut icon" href="https://apprequestdiscount.tiarakencana.com/assets/images/logo/logo.png" type="image/png">
    <title>Cetak </title> 
 
 <style>
 .list {
     list-style-type: square;
     font-family: 'Times New Roman', Times, serif; 
 }
      table {
         margin: auto;
         font-family: "Arial";
         font-size: 12px; 
          width: 100%;
         height: auto;
        font-family: 'Times New Roman', Times, serif;

     }

     .table {
         border-collapse: collapse;
         font-size: 13px;
         width: 100%;
         height: auto;
     }

     .table th,
     .table td {
         border-bottom: 1px solid #cccccc;
         border-left: 1px solid #cccccc;
         padding: 9px 21px;
           width: 100%;
         height: auto;
     }

     .table th,
     .table td:last-child {
         border-right: 1px solid #cccccc;
         width: 100%;
         height: auto;
     }

     .table td:first-child {
         border-top: 1px solid #cccccc;
          width: 100%;
         height: auto;
     }

     caption {
         caption-side: top;
         margin-bottom: 10px;
         font-size: 16px;
     }
      div.groove {border-style: groove;width: 100%}
     /* Table Header */
     .table thead th {
         background-color: goldenrod;
         color: #ffffff;
           width: 100%;
         height: auto;
     }

     /* Table Body */
     .table tbody td {
         color: #615c5c;
           width: 100%;
         height: auto;

     }

     .table tbody tr:nth-child(odd) td {
         background-color: #ffffff;
           width: 100%;
         height: auto;
     }

     .table tbody tr:hover th,
     .table tbody tr:hover td {
         background-color: rgb(255, 255, 255);
         transition: all .2s;
     }

     /*Tabel Responsive 1*/
     .table-container {
         overflow: auto; 
     }
    .right1   { 
        text-align: right; 
         right: 6%;
          top: 16.2%;
           position: absolute; 
        }
        .right2   { 
        text-align: right; 
         right: 7.2%;
          top: 10%;
           position: absolute; 
        } 
        .hijau {
            color: #00a2ff
        }
        .muted {
            color: gray;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            
        }
        .size{
            line-height: 1px;
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif
        }
        .tengah{
          left: 40%;
          top: 43%;
           position: absolute; 
        }
        .kanan {
        right: 1%;
          top: 43%;
           position: absolute; 
        }
          .kanan1 {
        right: 1%;
          bottom: 43%;
           position: absolute;  
        }
         .kanan2 {
        right: 1%;
          bottom: 47%;
           position: absolute; 
        }
        .merah {
            color: rgb(166, 67, 87);
        }
        .kiri{
            left: 1%;
          top: 43%;
           position: absolute;   
        }
         .reject{
          color: red;
         }
         .approve {
          color: rgb(214, 52, 47)
         }
         .imgs{
          border: none;
  border-radius: 4px;
  padding: 5px;
  width: 45%;  
         }
</style>
</head> 

  <body>  
    <div class="container">
      <div class="row">
        <div class="col">
          <img class="imgs" src="https://bisniz.id/wp-content/uploads/2022/11/Logo-Toko-Sembako.jpg" style="height:100px;">
          <address style="font-size:92%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;line-height: 100%;font-weight:bold;margin-top:2%;margin-left:2%">Matraman,Jakarta Timur</address>
          <br>
        </div>
      </div>
    </div> 
 <div class="container">
        <div class="row">
            <div class="col">  
             <br>
          
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4" style="margin-left:-2%">
             
            </div>  
        </div> 
    </div>
    <br>
   <center style="font-family: 'Times New Roman', Times, serif">Data Produk</center>
   <br>
<div class="container">
    <div class="row">
    <div class="col">
 <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                 <th width="70px">#</th>
                                     <th>Nama Barangs</th>  
                                      <th>Brands</th>
                                     <th>Stok</th>  
                                        <th>Harga</th>  
                                            
                                </tr>
                            </thead>
                            <tbody>
                          
                                @foreach ($data['products'] as $dt) 
                                 <tr>
                                       <td>{{ $loop->iteration }}</td> 
                                       <td>{{$dt['title']}}</td> 
                                       <td>{{$dt['brand']}}</td> 
                                       <td>{{$dt['stock']}}</td> 
                                       <td>Rp. {{number_format($dt['price'],0,',','.')}}</td> 
                                     
                                     </tr>
                        @endforeach
                            </tbody>
                        </table>  
 </div>   
  </div>    
   </div>   
 <hr> 
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>


 