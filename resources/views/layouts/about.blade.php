@extends('layouts/base')

@section('head')
<!-- <link rel="stylesheet" href="{ 'css/dashboard.css' %}" /> -->
<link rel="stylesheet" type="text/css" href="{!! asset('/css/about.css') !!}">
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" /> -->

    @endsection
    @section('body')
    <div class="title"><p>About Us</p></div>
    <div class="row">
  <div class="column" style="background-color:white;">
  <P class="isi">
            Sanni Food adalah salah satu produk makanan cepat saji Indonesia. 
            Sanni Food menyediakan produk makanan yang lezat dan berkualitas dengan resep asli Indonesia. 
            Kami hanya menggunakan bahan-bahan terbaik untuk proses produksi. 
            Produk kami bersertifikasi HALAL dari MUI dan diproduksi berdasarkan standard BPOM RI.<br><br> <br>
            ✆ : 081234567890 <br> ✉ : sannifood@ac.id  </P>

  </div>
  <div class="column" style="background-color:white;padding-left:60px;">
  <div id="myCarousel" class="carousel-fade" data-ride="carousel" data-interval="4000" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
       <div class ="container">
          <div class="carousel-inner"style="margin-left:60px;border-radius:30px;">
      <div class="item active">
        <img src="https://s11.favim.com/orig/7/758/7588/75886/foodphotography-cake-pasta-Favim.com-7588623.jpg" alt="about us" style="width:75%;border-radius:30px;">
      </div>

      <div class="item">
        <img src="https://lh3.googleusercontent.com/NIvwm_QtKJo-3GGBvwHVsEDVRg9HjEb9nWMCuwMqIk2t5CdWhUwRSa7fWMR-2UGvU2_p5i3CG8PkhqTGc5Y4EVxu28cWF2mVoeZBYhmpNPaipahI9M9WGzmolC-QVlqzO59bK5gk4ATxnIvDRj0qsFndoCOWa96frPfdgDakuSDpHpPdFfGkhgmCCdhtDT3PT53OLqk2SGMrEI7Gcf1JkhKJmwTxBXM6MEpEqT1HrUOsoWCjdz_fUifSmDTuDPXzpvCAzA1Zk8tEituFX1dLLU56Rd2wpu06G4ojGBK9f6ss8TBLt8D1vYdorW5OMxD3NDgc1ogReXgf4RT970cz4C1jrBFU19DU9YyM35gpMDONTLJ34DT8Xb_olFnVO6PGDHmhGKElN3DxjX9b_NqMVeECBnogiboVJdgqgE4pJjdpBnQXHG_t_iKlJdn8InJ39Mcz4nlhZOh5-BXaFrL15Dq0RiLBtFejQpODcGcPobgsu4AGUq4r3n5DytIm-eLoHoHNWP5Y6ztvmBOcxXBbjQneRJJ0lT5V5sKVzs8hF8T9RSWNfYgstnRWqN4o88_U6HqmykS8HkLGVt8o9vvxm7bK5hXorSYD4YqBshVwfZ13uFxfhjQ7hbe6BKDqLWpCpeCocbFJVK6Oq7ooRUNoQq_p9syW-_EETRlrfeyCgBw4xJIfTGcFt-LJ8OFL=w696-h695-no?authuser=0" alt="about us" style="width:75%;border-radius:30px;">
      </div>
    
      <div class="item">
        <img src="https://lh3.googleusercontent.com/zwxLGQ633bKKhGOYE27-ql3MhNMMpT-cEEVG1ecs-W337ojlL0ZQPYHX5fRUztG-Y4jb5f5LyGoDKP2craJ9TTqmWZkGKYSXp9phgpe5pRL8VNOUvVYkVo7HZsaQoJQy3W4vtKnlcxCGhZxy2YLIPnpfSnRP1PuSrETNxrO2jRBiAgo6kI9XrmgF9NHDH-Ychzbfau5xXtfa_JvyRKJurr-CBkznyKjXQlG6_gNe1Tmj4elaT0tcofQjhOJ5fmHp4nertY8v8dTfK8FtISzIwa7WEQNi56eoLLf_Dvvovk3kiLzYvO6VM8rwDmnUhRb7hW-rL4vgYTlYpJ24mQkAJBV9iVFy44hP3eRupe0Q9bRB-BlNYG1QNnyNquzeyEA-7WTMgbBvHs-ig4u6kvIhPrdEC-xElZiX2tWTF5NPz0hUHzL92PqDYsW-TsgHBKLqUdkNpMkoq3Aj_9hUxuobmM4xfDK2hCvaa7vfsFw9VWl-7yBMvM5ThACT8f12hNOyuYatmvHcVhw0SC2bA2sjFmb8swdepzupU8CRSt1QfbI2QYTVBbq1sj-wjJgV90sFElTcycO31XjY1SHPq7u-Qr-O4m4Dhy-Lu5VzlH9jUKlvHsQH7cCru53olcAnpILNFiLIta_bO3mw7tn_wdUQwg0SaKioZLD-zsZYtqHrcJkT3G43EdMZmv7QlOws=w696-h695-no?authuser=0" alt="about us" style="width:75%;border-radius:30px;">
      </div>
    </div>
  </div>
</div>
</div>
    
    @endsection