<?php
/**
 * Header file for the CDE Theme ABC_WP default theme.
 *
 * @package ABC_WP
 * @subpackage CDE_Theme
 * @since CDE Theme 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
<main class="flex-grow-1 container">
      <div class="row">
        <div class="col-sm-3">
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input class="form-control" placeholder="Search for..." />
                <button class="input-group-text" type="button">Go!</button>
              </div>
            </div>
          </div>
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">Freebies</a></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Tutorials</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card my-4">
            <h5 class="card-header">Tags</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They
              are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="pg-blog-list">
            <h1 class="my-4">Blog List</h1>
            <div class="row">
              <div class="col-3">
                <a href="detail.html"
                  ><img
                    class="img-fluid rounded-3 mb-3"
                    src="images/river.jpg"
                    alt="Title"
                /></a>
              </div>
              <div class="col-9">
                <h3>Ant-Man</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium veniam exercitationem expedita laborum at
                  voluptate. Labore, voluptates totam at aut nemo deserunt.
                </p>
                <a class="btn btn-primary" href="detail.html"
                  >View Project</a
                >
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-3">
                <a href="detail.html"
                  ><img
                    class="img-fluid rounded-3 mb-3"
                    src="images/road.jpg"
                    alt="Title"
                /></a>
              </div>
              <div class="col-9">
                <h3>Ant-Man and the Wasp</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium veniam exercitationem expedita laborum at
                  voluptate. Labore, voluptates totam at aut nemo deserunt.
                </p>
                <a class="btn btn-primary" href="detail.html"
                  >View Project</a
                >
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-3">
                <a href="detail.html"
                  ><img
                    class="img-fluid rounded-3 mb-3"
                    src="images/snow.jpg"
                    alt="Title"
                /></a>
              </div>
              <div class="col-9">
                <h3>The Avengers</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium veniam exercitationem expedita laborum at
                  voluptate. Labore, voluptates totam at aut nemo deserunt.
                </p>
                <a class="btn btn-primary" href="detail.html"
                  >View Project</a
                >
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-3">
                <a href="detail.html"
                  ><img
                    class="img-fluid rounded-3 mb-3"
                    src="images/sunset.jpg"
                    alt="Title"
                /></a>
              </div>
              <div class="col-9">
                <h3>Avengers Age Of Ultron</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium veniam exercitationem expedita laborum at
                  voluptate. Labore, voluptates totam at aut nemo deserunt.
                </p>
                <a class="btn btn-primary" href="detail.html"
                  >View Project</a
                >
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-3">
                <a href="detail.html"
                  ><img
                    class="img-fluid rounded-3 mb-3"
                    src="images/yard.jpg"
                    alt="Title"
                /></a>
              </div>
              <div class="col-9">
                <h3>Avengers Age Of Ultron</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium veniam exercitationem expedita laborum at
                  voluptate. Labore, voluptates totam at aut nemo deserunt.
                </p>
                <a class="btn btn-primary" href="detail.html"
                  >View Project</a
                >
              </div>
            </div>
            <hr />
          </div>
        </div>
      </div>
    </main>
    <div
      style="transform: translateZ(0); -webkit-transform: translateZ(0)"
    ></div>