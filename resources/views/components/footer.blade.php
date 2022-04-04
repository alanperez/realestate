<footer>
    <div class="footer_wrapper_upper">
        <div class="footer_about">
            <div class="logo">
                <a href="{{ url('/') }}">
                    Dallas<span class="logo-span">Builder</span>
                </a>
            </div>
        </div>
        <div class="footer_links">
            <p>News</p>
            <ul>
                <li>
                    <a href="#">
                        <span>Airlines</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Airports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Incidents</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Cargo</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer_links">
            <p>Navigation</p>
            <ul>
                <li>
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Contacts</span>
                    </a>
                </li>
                @guest
                <li>
                    <a href="#">
                        <span>Sign in</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Sign up</span>
                    </a>
                </li>
                @endguest
                @auth
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <span>Logout</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
                <li>
                    <a href="javascript:void(0)" style="cursor: not-allowed;">
                        <span>Search</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Popular posts-->
        <div class="footer_links">
            <p>Legal</p>
            <ul>
                <li>
                    <a href="#">
                        <span>Disclaimer</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Terms and Conditions</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Privacy Policy</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Cookie Policy</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer_wrapper_down">
        <svg class="hidden">
        <symbol id="icon-heart" viewBox="0 0 24 21">
            <path d="M20.497.957A6.765 6.765 0 0 0 17.22.114a6.76 
                6.76 0 0 0-5.218 2.455A6.778 6.778 0 0 0 3.506.957 
                6.783 6.783 0 0 0 0 6.897c0 .732.12 1.434.335 2.09 
                1.163 5.23 11.668 11.827 11.668 11.827s10.498-6.596 
                11.663-11.826a6.69 6.69 0 0 0 .336-2.091 6.786 6.786 
                0 0 0-3.505-5.94z" />
        </symbol>
        </svg>
        <div class="footer_copyright">
            <p>&#169;{{ date('Y') }} - Dallas Builders - Made with 
                <button class="iconbutton">
                    <svg class="icon icon--heart">
                    <use xlink:href="#icon-heart"></use>
                    </svg>
                </button>
                for a better web
            </p>
        </div>
        <div class="footer_feedback">
            
        </div>
    </div>
</footer>       
<!-- /.Footer -->