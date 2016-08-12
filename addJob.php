<?php include 'header.php'; ?>
      <div class="container">
        <div class="well">
          <h2>Add a New Job</h2><br>
          <form method="post" action="newListing.php">
            <div class="form-group">
              <h4>Advertisement Title:</h4>
              <input class="form-control" type="text" name="name" required="true"><br>
            </div>
            <div class="form-group">
              <h4>Job Type:</h4>
              <input class="form-control" type="text" name="type" required="true"><br>
            </div>
            <div class="form-group">
              <h4>Location:</h4>
              <input class="form-control" type="text" name="location" required="true"><br>
            </div>
            <div class="form-group">
              <h4>Email:</h4>
              <input class="form-control" type="email" name="email" required="true"><br>
            </div>
            <div class="form-group">
              <h4>Phone:</h4>
              <input class="form-control" type="tel" name="phone"><br>
            </div>
            <div class="form-group">
              <h4>Job Description:</h4>
              <textarea class="form-control" name="description" rows="10" cols="40" required="true"></textarea><br>
            </div>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
      </div>
    </body>
