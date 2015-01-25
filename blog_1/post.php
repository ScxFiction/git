<?php include 'includes/header.php'; ?>

<!-- // Some Post////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="blog-post">
            <h2 class="blog-post-title">Dynamic Linking in Action</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>


            <p>One of the more popular PHP-driven applications on the Web today is the blogging
platform WordPress. As a blogger or a blog reader, you might not realize
it, but every major section has been given its own main PHP file, and a whole raft of
generic, shared functions have been placed in separate files that are included by the
main PHP pages as necessary.</p>
           
            <p>The whole platform is held together with behind-the-scenes session tracking, so that
you hardly know when you are transitioning from one subsection to another. So, as a
web developer, if you want to tweak WordPress, it’s easy to find the particular file you
need, modify it, and test and debug it without messing around with unconnected parts
of the program.</p>

            <p>Next time you use WordPress, keep an eye on your browser’s address bar, particularly
if you are managing a blog, and you’ll notice some of the different PHP files that it uses.</p>
			
          </div><!-- /.blog-post -->
<!-- // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          

<?php include 'includes/footer.php'; ?>