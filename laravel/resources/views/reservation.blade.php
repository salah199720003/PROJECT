@extends('layout.master')
@section('header')
    @include('layout.nav')
@endsection 
@section('main')
<main>
   
    <div class="background1" >
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
            <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase"> <h2 class="text-white">planet fitness</h2></h5>
                <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Gymster</h1>
                <p style=" text-align:center;font-size:20px;">voulez vous entrenez dans note salle ,voir notre salle qui se trouve au nord de casablanca<br>
                prenez des rendez vous ou essayez une premiere seance,vos pouvez faire
                ce aue vous voulez,de bodbilding,powerligiting,la nattation,d box et sparring.<br><br>
                <button onclick="scrollToPosition('target')" class="btn btn-primary text-white" style="padding-right: 15px;padding-left: 15px;border:2px;border-radius:5px;width:60%">reserver ici</button>
                </p>
    </div>

</div>
</div>

<div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
  <div class="row g-5 gb-5">
      <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded text-center p-5">
              <i class="flaticon-six-pack display-1 text-primary"></i>
              <h3 class="text-uppercase my-4">Body Building</h3>
              <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
              <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded text-center p-5">
              <i class="flaticon-barbell display-1 text-primary"></i>
              <h3 class="text-uppercase my-4">Weight Lefting</h3>
              <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
              <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded text-center p-5">
              <i class="flaticon-bodybuilding display-1 text-primary"></i>
              <h3 class="text-uppercase my-4">Muscle Building</h3>
              <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
              <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-12 col-md-6 text-center">
          <h1 class="text-uppercase text-light mb-4">30% Discount For This Summer</h1>
          <a href="" class="btn btn-primary py-3 px-5">Become A Member</a>
      </div>
  </div>
</div>
<div id="target" class="card mb-3" style="max-width:1fr;border:0;border-radius:0" >
  <div class="row g-0"  style="border: 0;border-radius:0">
      <div class="col-md-4"  style="border: 0;border-radius:0">
          <div class="img-container" style="border: 0;border-radius:0;">
              <img src="laravel/public/img/south2.jpg" id="img1" class="img-fluid rounded-start" alt="..."  style="border: 0;border-radius:0">
          </div>
      </div>
      <div class="col-md-8" >
          <div class="card-body"  style="border: 0;border-radius:0"  style="height:100vh" >
              <h1 class="card-title" style="font-size: auto">Reservez!</h1>
              <p class="card-text" style="font-size: 150%;"  >"Vivez une expérience fitness fluide ! Réservez dès maintenant en scannant simplement le code QR. Assurez-vous de votre créneau horaire et de la disponibilité du matériel. Ne manquez pas l'opportunité de prioriser vos objectifs fitness - réservez sans souci et optimisez votre expérience en salle de sport en un simple scan !"</p>
              <div ><a  href="{{route('reserver')}}">{!! $qrCode !!}</a></div>
       
              
          </div>
      </div>
      <div id="target2"></div>
  </div>
</div>

</div>

</main>

<script>
    const imgElement = document.getElementById('img1');
  const imageHeight = imgElement.height;
  console.log('Image height:', imageHeight);
  
  function scrollToPosition() {
      const targetPosition = document.getElementById('target').offsetTop;
      const targetPosition2 = document.getElementById('target2').offsetTop;
      
   
      if (window.innerWidth > 768) { 
          window.scrollTo({
              top: targetPosition,
              behavior: 'smooth'
          })
  }else{
      window.scrollTo({
          top: targetPosition+imageHeight,
              behavior: 'smooth'
          })
  }
  }
  
  </script>
@endsection