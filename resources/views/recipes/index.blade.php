@extends('layouts.app')

@section('content')

<style>

.hero{
height:280px;
background:url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c');
background-size:cover;
background-position:center;
border-radius:15px;
margin-bottom:30px;
display:flex;
align-items:center;
padding:40px;
color:white;
}

.recipe-card{
border-radius:15px;
overflow:hidden;
background:white;
transition:0.3s;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.recipe-card img{
height:180px;
object-fit:cover;
width:100%;
}

.recipe-card:hover{
transform:translateY(-8px);
box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

</style>

<div class="hero">

<div>

<h1>Discover Delicious Recipes</h1>
<p>Find your favorite food recipes</p>

</div>

</div>

<div class="row g-4">

<div class="col-md-3 recipe-card">

<img src="https://images.unsplash.com/photo-1551218808-94e220e084d2">

<div class="p-3">

<h5>Spaghetti Carbonara</h5>

<p>Creamy pasta with cheese</p>

</div>

</div>


<div class="col-md-3 recipe-card">

<img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836">

<div class="p-3">

<h5>Healthy Salad</h5>

<p>Fresh vegetable salad</p>

</div>

</div>


<div class="col-md-3 recipe-card">

<img src="https://images.unsplash.com/photo-1512058564366-18510be2db19">

<div class="p-3">

<h5>Fried Rice</h5>

<p>Classic Asian fried rice</p>

</div>

</div>





<div class="col-md-3 recipe-card">

<img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d">

<div class="p-3">

<h5>Cheese Burger</h5>

<p>Juicy burger with cheese</p>

</div>

</div>

</div>

<script>

document.getElementById("searchRecipe")
.addEventListener("keyup",function(){

let value=this.value.toLowerCase()

document.querySelectorAll(".recipe-card")
.forEach(card=>{

card.style.display=
card.innerText.toLowerCase()
.includes(value)
? "block"
: "none"

})

})

</script>

@endsection
