<style>
a{
    font-weight:10px;
}

.mini_profile{
    width: 270px;
    height: 290px;
    background:white; 
    box-shadow:0px 0px 10px #3C2A84;  
    position:relative; 
    left:80%; 
    top:63px; 
    border-radius:5px;
    display:none;
}

.pic{
    height:90px; 
    width:90px; 
    border-radius:50%; 
    position:absolute; 
    top:30%; 
    background:silver; 
    left:50%; 
    background-image:url('assets/assetsCENTER/img/123.png');
    background-size:cover;
    transform : translate(-50%,-50%);
}

.h44{
    text-align: center;
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-weight: 700;
    font-size: 30px;
}
.h55{
    text-align:center;
    position:absolute; 
    top:55%; 
    left:50%;
    transform : translate(-50%,-50%);
    font-weight:700;
    font-size:24px;
}

#pro{
    position:absolute; 
    bottom:0%; 
    right:0%; 
 /*    background:rgba(60,42,132,1); */
    width:50%; 
    height:20%; 
    font-size:23px; 
    color:#3c2a84d6;
    display:flex; 
    align-items:center;
    justify-content:center;
    border-bottom-right-radius:5px;
    font-weight:700;
    transition : 0.5s ease-out;
}

#out{
    position:absolute; 
    bottom:0%; 
    left:0%; 
    /* background:red;  */
    width:50%; 
    height:20%; 
    text-align:left; 
    font-size:23px; 
    color:#dc3545; 
    display:flex; 
    align-items:center;
    justify-content:center;
    border-bottom-left-radius:5px;
    font-weight:700;
    transition : 0.5s ease-out;
}


#pro:hover{
    z-index:12;
    background:#3c2a84d6;
    color : white;  
    justify-content:center;
    padding:0;
}

#out:hover{
    z-index:12;
    background:#dc3545;
    color : white;  
    justify-content:center;
    padding:0;
}

</style>
        
        
        <div class="mini_profile" id="mini_profile">
        <div class="pic"></div>
        <h5 class="h55">Welcome</h5>
        <div class="h44">
        @if(Auth::check())
        {{Auth::user()->username}} @endif
        </div>
        <a href="/profile" id="pro">Profile</a>
        <a href="{{ route('logout') }}" id="out"
            onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
            Sign out </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form> 
        </div>