<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
        @include('layouts.OKE-Garden.bootstrap')
        @include('layouts.OKE-Garden.style')
        <title>OKE Garden</title>
    </head>
@include('layouts.OKE-Garden.navbar')
<body>
     <div class="wrapper">
     <div class="content-wrapper">	
            <h2><b>Konsultasi Taman</b></h2>
            <h6>klik di bawah ini untuk memilih tanggal & waktu yang tersedia untuk memmanggil konsultan kami</h6>
        </div>
        <div class="calendar" id="calendar-app">
            <div class="calendar--view" id="calendar-view">
              <div class="cview__month-current">
                <span class="cview__month-current" id="calendar-month"></span>
              </div>
              <div class="cview__month">
                <span class="cview__month-last" id="calendar-month-last"></span>
                <span class="cview__month-next" id="calendar-month-next"></span>
              </div>
              <div class="cview__header">Sun</div>
              <div class="cview__header">Mon</div>
              <div class="cview__header">Tue</div>
              <div class="cview__header">Wed</div>
              <div class="cview__header">Thu</div>
              <div class="cview__header">Fri</div>
              <div class="cview__header">Sat</div>
              <div class="calendar--view" id="dates">
              </div>
            </div>
          </div>
            <div class="time">
                <div class="calendar--day-view" id="day-view">
                    <span class="day-view-date" id="day-view-date">Friday, 9 September 2022</span>
                </div>
                <div class="pilih-waktu">
                    <div class= "ttl"><b>Pilih Waktu</b></div>
                    <div class="subttl">Durasi Konsultasi 30 Menit</div>
                    <p><button class="pilihan-waktu1">9:00</button>
                    <button class="pilihan-waktu5">13:00</button></p>
                    <p><button class="pilihan-waktu2">10:00</button>
                    <button class="pilihan-waktu6">14:00</button></p>
                    <p><button class="pilihan-waktu3">11:00</button>
                    <button class="pilihan-waktu7">15:00</button></p>
                    <p><button class="pilihan-waktu4">12:00</button>
                    <button class="pilihan-waktu8">16:00</button></p>
                </div>
            </div>
          <!-- partial -->
          @include('layouts.OKE-Garden.javascript')
            
          
        <div class="data">
            <div class="info"><b>Informasi Data Diri</b></div>
                <div class="dataa">
                    <h2><b>Nama Lengkap</b></h2>
                    <div class="fill">
                    <input type="text" placeholder="Nama Lengkap"> </div>
                    <div class="alamat">Alamat</div>
                </div>
                <div class="dataa">
                    <h1><b>No HP</b></h1>
                    <div class="fill2">
                    <input type="text" placeholder="No HP"></div>
                    <div class="isialamat">
                        <input type="text">
                        <button class="btn tambah"><u>Tambah Alamat Baru</u></button>
                    </div>
                </div>
        </div>
        <div class="konsul">
            <div class="info"><b>Informasi Konsultasi Taman</b></div>
            <div class="pilih"><h5><b>Lahan Tanaman</b></h5></div>
            <div class="ket"><h6>Pilih Jumlah Lahan Tanaman yang akan dibuat</h6></div>
        <div class="pilihan">
            <button class="satulahan">1 Lahan Taman</button>
            <button class="dualahan">2 Lahan Taman</button>
            <button class="lebihlahan">Lebih dari 2 Lahan Taman</button></div>
        <div class="pilih"><h5><b>Tema Taman</b></h5></div>
        <div class="ket"><h6>Pilih tema taman yang akan dibuat</h6></div>
        <div class="note"><b>Catatan:</b> Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahap ini, konsultan kami akan memberikan yang terbaik untuk anda
        </div>
        <div class="konten">
            <div class="minimalis">
                <img src="{{asset('assets/OKE-Garden/minimalis.PNG')}}">
                <div class="capt"><b>Taman Minimalis</b></div>
                    <div class="subcapt">Taman yang indah di lahan yang sempit
                        <p></p>
                    </div>
                        <button class="bttn pilih"><u>Pilih</u></button>
            </div>
            <div class="kering">
                <img src="{{asset('assets/OKE-Garden/kering.PNG')}}">
                    <div class="capt"><b>Taman Kering</b></div>
                        <div class="subcapt">Taman yang dirancang untuk menghasilkan suasana alam di dalam dan di luar rumah</div>
                            <button class="bttn pilih"><u>Pilih</u></button>
            </div>
            <div class="elastis">
                <img src="{{asset('assets/OKE-Garden/tropis.PNG')}}">
                    <div class="capt"><b>Taman Tropis</b></div>
                        <div class="subcapt">Taman yang paling sesuai dengan iklim di Indonesia</div>
                            <button class="bttn pilih"><u>Pilih</u></button>
            </div>
        </div>
        <div class="pilih"><h6>Estimasi Ukuran Taman</h6></div>
        <div class="pilihan">
            <button class="sepuluh"><10m2</button>
            <button class="duapuluh">11-20m2</button>
            <button class="tigapuluh">21-30m2</button>
            <button class="empatpuluh">31-40m2</button>
            <button class="limapuluh">41-50m2</button>
            <button class="enampuluh">51-60m2</button>
            <button class="tujuhpuluh">>100m2</button>
        </div>
        <div class="akhir">
            <button class="cancel">Batal</button>
            <button class="oke">OKE</button>
        </div>
        @include('layouts.OKE-Garden.javascriptbutton')
    
</body>