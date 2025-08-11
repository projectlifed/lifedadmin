<div class="background-image"></div>
<div class="top-bar">
    Welcome to Lifed – Your Wellness Partner
    <div class="user-info"><strong>{{ Auth::user()->name ?? 'Guest' }}</strong></div>
</div>
<div class="main-header">
    <img src="{{ asset('images/lifed-logo-black.webp') }}" alt="Lifed Logo" class="logo">
    <!-- <nav>
            <a href="#">Home</a>
            <a href="#">Wellness Products</a>
            <a href="#">About Us</a>
            <a href="#">Add Your Program</a>
            <a href="#">Contact Us</a>
        </nav> -->

    <div class="right">
        @auth
            <a href="#" class="logout-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="icon">🚪</span> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="signin-link"><span class="icon">🔑</span> SignIn</a>
        @endguest

        <a href="#" class="support-link"><span class="icon">📞</span> Quick Support</a>
    </div>
</div>
