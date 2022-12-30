<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
    @include('script')
    <title>Home</title>
</head>
<body>
    @include('header')
    @include('navbar')
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="https://1.bp.blogspot.com/-bBgD--rBiOg/Xi7oiO63yOI/AAAAAAAAHi4/MF7YQ_2y3nEArkdIDwOR1GCMvBxpCCeUQCEwYBhgL/s1600/footsal-ground-inside-kathmandu-valley-min.jpg" style="width:100%">
          <div class="text">Highway Futsal</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="https://imageio.forbes.com/specials-images/imageserve/60633c179078ccc3cd7c9e03/0x0.jpg?format=jpg&width=1200" style="width:100%">
          <div class="text">Dhanyentari Futsal</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="https://img.redbull.com/images/c_crop,w_1936,h_968,x_0,y_137,f_auto,q_auto/c_scale,w_1200/redbullcom/2018/07/09/4c915298-2e6b-4f78-8e3f-552407d975bd/futsal-match" style="width:100%">
          <div class="text">Lumbini Futsal</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      
</body>
</html>