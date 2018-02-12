<nav class="pushmenu pushmenu-left">
        <ul class="links">
          <li><a href="/cpanel">Admin manager</a></li>
          <li><a href="/cpanel/categories">Categories</a></li>
          <li><a href="/cpanel/products">Products</a></li>
          <li><a href="/cpanel/vehicles">Vehicles</a></li>
          <li><a href="/cpanel/posts">Posts</a></li>
          <li><a href="/cpanel/sliders">Sliders</a></li>
          <li><a href="/cpanel/branch">Branch</a></li>
          <li><a href="/cpanel/contact">Contacts</a></li>
          <li><a href="/cpanel/driving">Driving</a></li>
          <li><a href="/cpanel/schedule">Schedule</a></li>
          <li><a href="/cpanel/users">Users</a></li>
          <li><a href="/cpanel/province">Province</a></li>
          <li><a href="/cpanel/district">District</a></li>
          <li><a href="/cpanel/ward">Ward</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </nav>


      <script type="text/javascript">
        $(document).ready(function() {
            $menuLeft = $('.pushmenu-left');
            $nav_list = $('#nav_list');
            
            $nav_list.click(function() {
              $(this).toggleClass('active');
              $('.pushmenu-push').toggleClass('pushmenu-push-toright');
              $menuLeft.toggleClass('pushmenu-open');
            });
          });
    </script>