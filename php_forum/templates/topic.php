<?php include ('includes/header.php'); ?>
    <ul id="topics">
        <li id="main-topic" class="topic topic">
            <div class="row">
                <div class="col-md-2">
                    <div class="user-info">
                        <img class="avatar pull-left" src="img/gravatar.jpg">
                        <ul>
                            <li><strong>BradT81</strong></li>
                            <li>43 Posts</li>
                            <li><a href="profile.php"></a>Profile</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="topic-content pull-right">
                        <p>I just worked in split mode dremweaver and paid attention to what was done.How did you learnn Css and Html? How long did you take you until you where profi?</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="topc topic">
            <div class="row">
               <div class="col-md-2">
                   <div class="user-info">
                       <img class="avatar pull-left" src="img/gravatar.jpg">
                       <ul>
                            <li><strong>BradT81</strong></li>
                            <li>43 Posts</li>
                            <li><a href="profile.php"></a>Profile</li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-10">
                   <div class="topic-content pull-right">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
               </div>
            </div>
        </li>
        <li class="topc topic">
            <div class="row">
               <div class="col-md-2">
                   <div class="user-info">
                       <img class="avatar pull-left" src="img/gravatar.jpg">
                       <ul>
                            <li><strong>BradT81</strong></li>
                            <li>43 Posts</li>
                            <li><a href="profile.php"></a>Profile</li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-10">
                   <div class="topic-content pull-right">
                       <p>w3schools is very good.I can't code an entire site, but I can handle basic.
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
               </div>
            </div>
        </li>
        <li class="topic topic">
            <div class="row">
               <div class="col-md-2">
                   <div class="user-info">
                       <img class="avatar pull-left" src="img/gravatar.jpg">
                       <ul>
                            <li><strong>BradT81</strong></li>
                            <li>43 Posts</li>
                            <li><a href="profile.php"></a>Profile</li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-10">
                   <div class="topic-content pull-right">
                       <p>Drupal is build in symfony framework and it is a best solution.Wordpress,magento,prestashop.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
               </div>
            </div>
        </li>
    </ul>
    <h3>Replay To Topic</h3>
    <form role="form">
        <div class="form-group">
            <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
               <script>CKEDITOR.replace('reply')</script>
        </div>
            <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
</div>
<div class="col-md-4">
<div class="sidebar">
    <div class="block">
      <h3>Login Form</h3>
        <form role="form">
          <div class="form-group">
              <label>Username</label>
              <input name="username" type="text" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" type="password" class="form-control" placeholder="Enter Password">
          </div>
          <button name="do_login" type="submit" class="btn btn-primary">Login</button>  <a class="btn btn-default" href="register.html">Create Account</a>
        </form>
<?php include ('includes/footer.php'); ?>