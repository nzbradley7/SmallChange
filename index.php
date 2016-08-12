<?php include 'header.php'; ?>
      <div class="container" ng-app="myApp" ng-controller="listingCtrl">
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <h2 class="text-center">Search Jobs</h2><br>
              <div class="form-group">
                <input class="form-control" type="text" ng-model="keywords">
              </div>
              <a href="#" class="btn btn-block btn-add-job" role="button">Apply</a>
            </div>
            <div class="well">
              <a href="addJob.php" class="btn btn-add-job btn-block" role="button"><h4>Add a Job</h4></a>
            </div>
          </div>
          <div class="col-sm-9">
            <?php require 'listings.php' ?>
          </div>
        </div>
      </div>
      <a href="#top">
        <i class="fa fa-caret-square-o-up" aria-hidden="true" id="to-top"></i>
      </a>
    </body>
