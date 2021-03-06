<header>
    <ul id="nav-mobile" class="side-nav fixed green">
        <li class="logo">
            <div id="logo-container" href="." class="brand-logo white">
                <img src="/img/yoken-logo.png">
            </div>
        </li>
        <li id="item-courses"><a href="/user/" class="collapsible-header waves-effect white-text">Courses</a></li>
        <li id="item-webinars"><a href="/user/webinars" class="collapsible-header waves-effect white-text">Webinars</a></li>
        <li id="item-resources"><a href="/user/resources" class="collapsible-header waves-effect white-text">Resources</a></li>
        <li id="item-dashboard"><a href="/user/profile" class="collapsible-header waves-effect white-text">Profile</a></li>
        <li id="item-logout"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="collapsible-header waves-effect white-text">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </ul>
</header>
