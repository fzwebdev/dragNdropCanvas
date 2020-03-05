<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canvas Learning</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <style>
    canvas{
      border: 2px solid rebeccapurple;
    }
    #canvasArea {
        display:flex;
        justify-content:center;
        align-items: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-10 col-sm-12 col-xs-12" id="content_box" style="color: #000;">
        <div class="card" style="background-color:transparent;border: none; ">
          <div class="card-body text-center" style=" font-size: 35px; padding: 0;">
            <div class="col-lg-12">
              <div id="canvasArea">
                <canvas id="canvas" width="800" height="600" style="border: 1px solid red"> </canvas>
              </div>
            </div>
            <!-- <div class="col-md-12" style="margin-top: 30px;">
              <button class="btn btn-danger" style="font-size: 24px;" onclick="checkAnswer()">Submit</button>
              <button class="btn btn-primary" id="subButton261" style="font-size: 24px;" onClick="resetBox()">Reset</button>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="canvas.js"></script>
</html>