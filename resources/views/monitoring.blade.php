<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.rtl.min.css" integrity="sha384-MdqCcafa5BLgxBDJ3d/4D292geNL64JyRtSGjEszRUQX9rhL1QkcnId+OT7Yw+D+" crossorigin="anonymous">

    <title>Monitoring Sensor Laravel</title>

    <!-- Panggil File Jquery -->
    <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>

    <!-- ajax realtime -->
    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function() {
          $("#suhu").load("{{url('bacasuhu')}}");    
          $("#kelembapan").load("{{url('bacakelembapan')}}");    
          $("#nama").load("{{url('bacanama')}}");      
        }, 1000);
      });
    </script>
    
  </head>
  <body>

    <!-- Tampilan Website Header-->
    <div class="container" style="text-align: center; margin-top: 50px;">
      <img src="{{('images/Logo_Lab_Mikro.png')}}" style="width: 150px">
      <h2>Monitoring Nilai Sensor Secara Realtime <br> Menggunakan Protokol Http <br> <br> </h2>
      <br>
    </div>

    <div class="container" style="text-align: center;">
      <h4>Updater &emsp;: <span id="nama">wew</span></h4>
    </div>

    <!-- Tampilan Nilai Sensor -->
    <div class="container"> 
      <div class="row" style="text-align: center;">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header" style="background-color:rgb(0, 36, 102); color: white">
              <h4>SUHU</h4>
            </div>
            <div class="card-body">
              <div style="font-size: 70px; font-weight: bold">
                <span id="suhu">0</span> <span>°C</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header" style="background-color: rgb(0, 36, 102); color: white">
              <h4>Kelembapan</h4>
            </div>
            <div class="card-body">
              <div style="font-size: 70px; font-weight: bold">
                <span id="kelembapan">0</span> <span>%</span>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tampilan Logo -->

    <div class="container" style="text-align: center; margin-top: 20px">
      <!-- <img src="{{('images/SocialMedia.png')}}"> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>