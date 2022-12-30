<style>
   form {
  /* border: 3px solid #f1f1f1; */
}
body
{
  background-color:#63b5964a;

}
input[type=text], input[type=password] , input[type=email]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius:10px;
}
select
{
  width:10%;
  padding:10px;
  box-sizing: border-box;
  border-radius:10px;
  background-color:#a9e4aa8f;
}
.header {

                background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnlPwiYTkDVCqyrvRhrmjN6HguEi5XMMBEow&usqp=CAU");
                font-size:25px;
                font-family:cursive;
                padding: 15px;
                text-align: center;
                color:rgb(255, 255, 255);

            }
.header_list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image:url("https://www.freewebheaders.com/wp-content/gallery/grass/natural-green-grass-field-background-header.jpg");
}

.header_list li {
  float: left;
}

.header_list li a {
  display: block;
  color: rgb(243, 242, 242);
  text-align: center;
  padding: 14px 16px;
  text-decoration:none;
  font-family:cursive;
}

/* Change the link color to #111 (black) on hover */
.header_list li a:hover {
  background-color: rgb(5, 77, 3);
}
.header_list li a.logout:hover
{
  background-color: rgba(176, 52, 11, 0.815);
}
.header_list h3
{
  float:right;
  font-family:cursive;
  color:white;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  border-radius: 10px;
}
button:hover {
  opacity: 0.8;
}
.register {
  font-size: 20px;
  color: rgb(3, 106, 20);


}
label
{
    font-weight: bold;
}
span
{
    color:white;
    background-color:red;
}
.container{
    width:50%;
    position:absolute;
    left:37%;
    top:10%;
}
h2
{
    background-color:rgb(64, 64, 237);
    color:white;
    width:50%;
    text-align:center;
}
.imgcontainer {

  text-align: center;
  width:50%;
  margin: 20px 5 12px 0;
}
img.avatar {
  width: 50%;
  border-radius: 50%;
}
div.error
{
    height:20px;
    width:50%;
    background-color:red;
    color:white;
}

.items td, th
{
  border-bottom: 1px solid;
  padding: 15px;

  text-align: left;
  width:10%;
}
.items th
{
  background-color: rgb(161, 237, 181);
}
.items tr
{
  background-color: rgb(231, 249, 244);
}
tr:hover {background-color: rgba(58, 158, 83, 0.252);}
.item_head
{

  background-color: rgb(161, 237, 181);
    color:rgb(61, 61, 61);
    width:25%;
    text-align:center;
}
.button_book
{
  background-color: #05925e;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 10px;
}
.confirm_booking td, th
{
  width:20%;
  border-bottom: 1px dotted;
  text-align:center;
}
.confirm_booking
{
  position:absolute;
  left:30%;
  top:20%;
}
.book_success
{
  text-align: center;
  position:absolute;
  top:18%;
  left:25%;
  /* border:1px solid; */

}
.book_success_h2
{
  background-color:rgb(255, 255, 255);
  color:#20a622;
  width:100%;
  text-align:center;
  font-family:'Courier New', Courier, monospace;
  font-size:40px;
  text-shadow: 1px 2px gray;
}

/* Corousel */
.slideshow-container {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

</style>
