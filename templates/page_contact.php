<?php
/**
 * Template Name: Contact
 */

the_post();

get_header();
?>

<!-- ======================================= content ======================================= -->
<main id="content">
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contact</h1>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <ul id="navTrail">
                        <li><a href="index.html">Home</a></li>
                        <li id="navTrailLast">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="mapWrapper"></div>
    <!-- form -->
    <section class="pb40 pt40">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Let's Talk</h3>
                    <p>I'd love to talk about your project. You can fill out the form or contact me directly:</p>
                    <address>
                        <p>
                            <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:enzo@enzoculiolo.com">enzo@enzoculiolo.com</a>
                        </p>
                    </address>
                </div>
                <form method="post" action="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/php/form-handler.php" id="contactfrm" role="form">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter phone" title="Please enter a valid phone number (at least 10 characters)">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <fieldset class="clearfix securityCheck">
                            <h3>Security</h3>
                            <div class="form-group">
                                <img src="/wp-content/themes/enzoculiolo1.0/assets/js-plugin/neko-contact-ajax-plugin/php/image.php" alt="Image verification"/>
                                <input class="required form-control"  id="verify" name="verify" type="text" >
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-md-offset-4">
                        <div class="result"></div>
                        <button name="submit" type="submit" class="btn btn-lg" id="submit"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- / form -->
</main>
<!-- / content -->

<?php get_footer(); ?>