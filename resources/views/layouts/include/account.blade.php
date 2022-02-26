<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
	<div class="navbar account">
		{{-- <div class="logo">
			<a href="#">Coding Market</a>
		</div> --}}
		<div class="nav_right">
			<ul>
				{{-- <li class="nr_li dd_main">
                    <h4> <i class="icon-dashboard mr-1" style="color: blue"></i>My Account</h4>
					<div class="dd_menu">
						<div class="dd_left">
							<ul>
								<li><i class="far fa-plus-square"></i></li>
								<li><i class="fas fa-cog"></i></li>
								<li><i class="fas fa-sign-out-alt"></i></li>
							</ul>
						</div>
						<div class="dd_right">
							<ul>
								<li>Profile</li>
								<li><a class=""  href="{{url('my-orders')}}">Orders</a></li>
								<li>
                                    <a class=""  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                                </li>
							</ul>
						</div>
					</div>
				</li>--}}
				{{-- <li class="icon-button">
					<a class=" "  href="{{url('wishlist')}}">
                        <span class="fas fa-heart material-icons"></span>
                        <span class="icon-button__badge wishlist-count">0</span>
                    </a>
				</li> --}}
                {{-- <li class="icon-button ml-3">
                    <a class=" "  href="{{url('cart')}}">
                        <span class="fas fa-shopping-cart material-icons"></span>
                        <span class="icon-button__badge cart-count">0</span>
                    </a>
				</li> --}}
			</ul>
		</div>
	</div>
</div>
{{-- <i class="fas fa-shopping-cart"></i>
                    <span class="fas fa-shopping-cart material-icons"></span>
                    <span class="icon-button__badge">2</span>--}}
{{-- <span class="fas fa-heart material-icons"></span>
                    <span class="icon-button__badge">2</span> --}}



<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: 'Jost', sans-serif;
    }


    .navbar  h4{
        /* display: block;
        text-decoration: none;
        color: #fff;*/
        font-weight: 400;
        /* letter-spacing: 2px; */
        font-size: 18px;
        margin-right: 10px;
        /* text-transform: uppercase; */
    }

    .navbar .nav_right > ul{
        display: flex;
        align-items: center;
    }

    .navbar .nav_right ul li.nr_li{
        margin-left: 5px;
        cursor: pointer;
        color: rgb(14, 15, 20);
        font-size: 17px;
        position: relative;
        justify-content: space-around;
    }

    .navbar .nav_right ul li.nr_li:hover {
        color: #1bbdb2;
    }

    .navbar .nav_right ul li img{
        width: 35px;
        vertical-align: middle;
    }

    .navbar .dd_menu {
        position: absolute;
        right: -25px;
        top: 47px;
        display: flex;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
        display: none;
    }

    .navbar .dd_menu .dd_left{
        background: #74ded8;
        padding: 12px 17px;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .navbar .dd_menu .dd_left li{
        color: #fff;
    }

    .navbar .dd_menu .dd_right{
        padding: 12px 17px;
    }

    .navbar .dd_menu li{
        margin-bottom: 10px;
        color: #ad3232;
    }

    .navbar .dd_menu:before{
        content: "";
        position: absolute;
        top: -20px;
        right: 30px;
        border: 10px solid;
        border-color: transparent transparent #fff transparent;
    }

    .navbar .dd_main.active .dd_menu{
        display: flex;
    }
</style>

<script>
    var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>


{{-- <button type="button" class="icon-button">
    <span class="material-icons">notifications</span>
    <span class="icon-button__badge">2</span>
</button> --}}


  <style>

        .icon-button {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        color: #333333;
        background: #dddddd;
        border: none;
        outline: none;
        border-radius: 50%;
        }

        .icon-button:hover {
        cursor: pointer;
        }

        .icon-button:active {
        background: #cccccc;
        }

        .icon-button__badge {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 25px;
        height: 25px;
        background: red;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        }

  </style>
