@extends('layouts.app')
       @section ('content')
       
   <style>
 .section {

	height: 60vh;
}
.card-columns {
    column-count: 3;
}
.section .section-center {   
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'PT Sans', cursive;
/*	background-image: url('room.jpg');*/
	background-size: cover;
	background-position: center;
}

.booking-form {
	background: rgba(0, 0, 0, 0.7);
	padding: 40px;
	border-radius: 6px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 20px;
}

.booking-form .form-control {
	background-color: #fff;
	height: 60px;
	color: #191a1e;
	border: none;
	font-size: 16px;
	font-weight: 400;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 40px;
	
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control::placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 10px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(0, 0, 0, 0.3);
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	display: block;
	margin-left: 20px;
	margin-bottom: 5px;
	font-weight: 400;
	text-transform: uppercase;
	line-height: 24px;
	height: 24px;
	font-size: 12px;
	color: #fff;
}

.booking-form .form-checkbox input {
	position: absolute !important;
	margin-left: -9999px !important;
	visibility: hidden !important;
}

.booking-form .form-checkbox label {
	position: relative;
	padding-top: 4px;
	padding-left: 30px;
	font-weight: 400;
	color: #fff;
}

.booking-form .form-checkbox label+label {
	margin-left: 15px;
}

.booking-form .form-checkbox input+span {
	position: absolute;
	left: 2px;
	top: 4px;
	width: 20px;
	height: 20px;
	background: #fff;
	border-radius: 50%;
}


.booking-form .form-btn {
	margin-top: 27px;
}
 

.booking-form .Submit-btn, .submit-btn {
	color: #fff;
	background-color: #f23e3e;
	font-weight: 400;
	height: 50px;
	font-size: 14px;
	border: none;
	width: 100%;
	border-radius: 40px;
	text-transform: uppercase;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}
   .booking-form .Submit-btn {
	color: #fff;
    background-color: black;
    }
    
.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
}</style>    
       
       
       <div class="container-fluid jumbotron">
    <div class="row">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0 text-primary">Our Menu</h1>
            <p class="lead">Begin with a selection from our award winning beverage menu or choose a wine from our extensive wine list. Our wine list features over 100 different vintages and has received the chamber of commerce award of excellence.</p>
        </div>
        
        
        
           
        <div class= "container text-center">         
      
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#exampleModalCenter">
  Order Nows
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class=" modal-header" style="background-color:cream">
        <h5 class="modal-title" id="exampleModalLongTitle">    ORDER FOOD     </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
					<br><br><br>
     {!!Form::open(['action'=>'FoodController@store',
                      'method'=>'GET']) !!}
	<div class="row">
     <div class="col-md-6">
		<div class="form-group">
<span class="form-label">Room no</span>
 <input class="form-control" type="text" name="room_no" required>
				</div>			
       </div>
<div class="col-md-6">
                <div class="form-group">
				<span class="form-label">People Quantity</span>
				<input class="form-control" type="text" name="people_quantity" required>
					</div>
    </div>		
	        								
</div>

<div class="row">
				<div class="col-md-12">
          <div class="form-group">
				<span class="form-label">Food Choice</span>
<input class="form-control" type="textarea" name="fname"  required>
                    </div></div>
                        <div class="col-md-12">
                         <div class="form-group">
				<span class="form-label">Description</span>
                             <input class="form-control" type="text" name="description"  required></div>
                    </div></div>

 			

	<div class="row">
<div class="col-md-6">
{{Form::submit('Submit', ['class'=> 'submit-btn'])}} 
        </div>
<div class="col-md-6">
<button type="button" class="Submit-btn" data-dismiss="modal">Cancel</button>
        
        </div>
                        </div>    </div></div></div></div></div></div></div></div></div></div>
                        
                        
                        
        <div class="col-12 mt-4">
            <h3 class="text-center"><em><u>Cocktails</u></em></h3>
            <hr class="accent my-5">
        </div>
        
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">$10</span>
                <h6 class="text-truncate">Chocolate Martini</h6>
                <p class="small">Tito's Vodka and White Créme de Cacao dusted with hand shaved chocolate.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$9</span>
                <h6 class="text-truncate">Summer Breeze Martini</h6>
                <p class="small">Hendrick’s Gin, St. Germain Elderflower Liqueur and Brancot Sauvignon Blanc with a floater of Cristalino Cava Brut.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$9</span>
                <h6 class="text-truncate">Sweet Heat Margarita</h6>
                <p class="small">Jalapeño infused tequila, triple sec, pineapple juice, lime.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$10</span>
                <h6 class="text-truncate">Prickly Pear</h6>
                <p class="small">New Amsterdam Vodka and Pear liquer in a sugar rimmed glass.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$9</span>
                <h6>Classic Martini</h6>
                <p class="small">Seagrams Gin, Dry Vermouth, pickle juice, olive juice.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$10</span>
                <h6 class="text-truncate">Ruby Red Rosemary Refresher</h6>
                <p class="small">House infused rosemary vodka, St. Germaine Elderflower liqueur, grapefruit juice and a splash of soda.</p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center"><em><u>Starters</u></em></h3>
            <hr class="accent my-5">
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">$9.95</span>
                <h6 class="text-truncate">Fried Shrimp</h6>
                <p class="small">Sustainably raised Argentine red shrimp, fried golden brown and served with chipotle mayonnaise for dipping.</p>
                <span class="font-weight-bold small">Add marinara or tartar: $2</span>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$8.95</span>
                <h6 class="text-truncate">Tuscan Bruschetta</h6>
                <p class="small">Crusty sliced Italian bread topped with basil, extra virgin olive oil, chopped tomatoes, garlic and fresh mozzarella cheese. Baked until it is nice and crispy and served with a side of balsamic reduction.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$7.95</span>
                <h6 class="text-truncate">Quesadilla</h6>
                <p class="small">Jack and cheddar cheese, chopped mild green chilies in a pan grilled flour tortilla. Served with sour cream, guacamole and fresh pico de gallo.</p>
                <div class="font-weight-bold small">Add Chili: $2</div>
                <div class="font-weight-bold small">Add BBQ Pulled Pork: $2</div>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$9.95</span>
                <h6 class="text-truncate">Wings</h6>
                <p class="small">A dozen of our crispy, tasty chicken wings. Select 1 of our 4 seasonings.</p>
                <div class="font-weight-bold small">Classic Sweet BBQ</div>
                <div class="font-weight-bold small">Hot Buffalo Sauce</div>
                <div class="font-weight-bold small">Sriracha Honey Fish Sauce</div>
                <div class="font-weight-bold small">Scorching Hot Habanero</div>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$8.95</span>
                <h6 class="text-truncate">Ultimate Nacho Platter</h6>
                <p class="small">
                    House made corn tortilla chips, melted cheddar-Jack cheese, mild Anaheim chile salsa, refried beans, guacamole &amp; sour cream</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$10</span>
                <h6 class="text-truncate">Stuffed Clams</h6>
                <p class="small">Three large stuffies with chopped clams, medium spiced chouriço Portuguese sausage, chopped bacon, onions, peppers, a touch of crushed red pepper, bread crumbs and spices, topped with bacon.</p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center"><em><u>Main Plates</u></em></h3>
            <hr class="accent my-5">
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">$17.95</span>
                <h6 class="text-underline">Fat Tuesday Salad</h6>
                <p class="small">New Orleans style hot sliced Cajun chicken breast with mixed greens, tomatoes, cucumbers and hard-cooked eggs with warm, spicy honey mustard dressing topped with crumbled bacon..</p>
                <span class="font-weight-bold small"></span>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$25.95</span>
                <h6>Braised Boneless Beef Short Ribs</h6>
                <p class="small">
                    Braised low and slow, resulting in meat that is deeply flavored, sublimely succulent and tender as can be imagined, yet maintaining a wonderful texture. Served on a bed of garlic smashed potatoes. Served with choice of additional side. </p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$15.95</span>
                <h6>Jambalaya</h6>
                <p class="small">
                    Shrimp, chicken, andouille sausage, rice and traditional jambalaya vegetables and spices. Garnished with sweet red and yellow pepper confetti.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$12.95</span>
                <h6>Stuffed Jumbo Shrimp</h6>
                <p class="small">
                    Crabmeat, chopped scallops, mushrooms, Jack cheese, seasoned bread crumbs, white wine and butter stuffing.
                </p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$25.95</span>
                <h6>Sirloin Steak Tips</h6>
                <p class="small">
                    Chunks of tender, flavorful marinated sirloin sautéed with garlic and black pepper, finished with button mushrooms and a beef demi-glace. (Degree of doneness will vary slightly due to variations in size of chunks). Accompanied by Gorgonzola spiked garlic
                    smashed potatoes. Served with choice of additional side.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$14.95</span>
                <h6>Pasta Pomodoro</h6>
                <p class="small">
                    Fresh roasted garlic rigatoni with a light sauce of extra virgin California olive oil, fresh chopped tomatoes, basil, garlic, black pepper and a dash of crushed red pepper. Garnished with sun dried tomatoes and shaved parmesan.
                </p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <hr class="accent my-5">
        </div>
        <div class="col-6 mx-auto">
            <div class="card card-body text-center">
                <h5 class="text-uppercase"><em><u>Sunday Only!!!</u></em></h5>
                <h6>Albondigas Soup</h6>
                <p class="small">
                    A steaming cup or bowl of Mexican meatball &amp; vegetable soup garnished with crispy tortilla strips and fresh cheddar-Jack cheese. If you like Mexican food try this!</p>
                <span class="float-right font-weight-bold">$7</span>
            </div>
        </div>
        <div class="col-12 mt-4">
            <hr class="accent my-5">
        </div>
    </div>
</div>
       
       


 
                         
                            
                               
                                  
                                                                                  
                                                                                                          

        @endsection
