@extends('pages.template')
@section('title')
Home
    
@endsection
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner carousel-fade">
      <div class="carousel-item active ">
        <img src="/images/slide1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/slide2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/slide3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div>
    <div class="container">
      <div class="py-3">
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus reiciendis illum neque ipsam vero necessitatibus beatae cupiditate nobis, dicta illo a voluptatem recusandae ad provident animi laboriosam magnam modi aspernatur? Quasi temporibus error mollitia, accusantium ea expedita molestiae aperiam quidem. Eius dolorem nostrum fuga dolores ducimus cumque, distinctio ea sunt?</p>
      </div>
      <div class="py-4">
        <div class="row">
          <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur voluptatibus iste ex exercitationem. Quidem, ipsam quaerat iusto, ipsa blanditiis error laudantium dolores reprehenderit laborum officiis eaque voluptas. Officia voluptates modi optio voluptate, possimus sunt eum asperiores sequi commodi amet rem consectetur, neque molestias earum quibusdam dolorum, voluptatum natus facilis consequatur!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus corrupti, ullam fugiat aperiam libero cupiditate delectus ad enim earum ipsam totam recusandae nisi dignissimos praesentium maxime quae fuga cumque blanditiis consequatur officiis explicabo fugit non beatae nulla? Rem laudantium officia id maiores nesciunt aperiam rerum officiis? Nobis explicabo ducimus nisi?</p>
          </div>
          <div class="col-md-4"><img class="img-fluid" src="https://images.pexels.com/photos/890505/pexels-photo-890505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
        </div>
      </div>
      <div class="my-4">
        <h1>Healthy Foods</h1>
        <div class="py-3">
          <div class="row">
            <div class="col-md-4"><img class="img-fluid py-2" src="https://images.pexels.com/photos/1092730/pexels-photo-1092730.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
            <div class="col-md-1"></div>
          <div class="col-md-7"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse necessitatibus consequuntur, recusandae voluptatum repellat explicabo ipsa repellendus nemo aut sint dicta at distinctio rem quia ab iusto laborum asperiores laboriosam. Distinctio soluta atque inventore debitis praesentium at unde eius, expedita, reiciendis numquam iusto illum id fuga asperiores molestias doloremque non?</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur expedita veritatis quibusdam incidunt deleniti? Odio doloribus laudantium fugit incidunt, sed molestiae rem soluta minus, necessitatibus accusamus possimus dolorum consequuntur ad, sit neque blanditiis libero facere. Rem quidem, adipisci, sequi iusto, hic voluptates molestias qui sapiente voluptate non veritatis vel ab!</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection