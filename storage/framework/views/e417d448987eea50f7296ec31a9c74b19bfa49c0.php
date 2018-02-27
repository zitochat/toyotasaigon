<nav class="pushmenu pushmenu-left" style="overflow-y: auto;">
    <span id="logo" style="border-bottom: 1px solid #e0e0e0; box-sizing: border-box; display: block; height: 55px; padding: 12px 0px 10px 10px; position: relative; text-align: left;">
      <b>Toyota Sài Gòn</b>
    </span>
        <ul class="links">
          <li><a href="/cpanel_admin">Admin manager</a></li>
          <li><a href="/cpanel_admin/categories">Categories</a></li>
          <li><a href="/cpanel_admin/products">Products</a></li>
          <li><a href="/cpanel_admin/vehicles">Vehicles</a></li>
          <li><a href="/cpanel_admin/posts">Posts</a></li>
          <li><a href="/cpanel_admin/sliders">Sliders</a></li>
          <li><a href="/cpanel_admin/branch">Branch</a></li>
          <li><a href="/cpanel_admin/contact">Contacts</a></li>
          <li><a href="/cpanel_admin/driving">Driving</a></li>
          <li><a href="/cpanel_admin/schedule">Schedule</a></li>
          <li><a href="/cpanel_admin/users">Users</a></li>
          <li><a href="/cpanel_admin/province">Province</a></li>
          <li><a href="/cpanel_admin/district">District</a></li>
          <li><a href="/cpanel_admin/ward">Ward</a></li>
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