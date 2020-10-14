<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<!-- bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<!-- 3d model viewer links -->
<!-- Loads <model-viewer> for modern browsers: -->
    <script type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js">
</script>

<!-- Loads <model-viewer> for old browsers like IE11: -->
<script nomodule
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
</script>

<!-- The following libraries and polyfills are recommended to maximize browser support -->
<!-- NOTE: you must adjust the paths as appropriate for your project -->
    
<!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
<script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>

<!-- 💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
<script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

<!-- 💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
<script src="https://unpkg.com/resize-observer-polyfill@1.5.1/dist/ResizeObserver.js"></script>

<!-- 💁 OPTIONAL: Fullscreen polyfill is required for experimental AR features in Canary -->
<!--<script src="https://unpkg.com/fullscreen-polyfill@1.0.2/dist/fullscreen.polyfill.js"></script>-->

<!-- 💁 OPTIONAL: Include prismatic.js for Magic Leap support -->
<!--<script src="https://unpkg.com/@magicleap/prismatic@0.18.2/prismatic.min.js"></script>-->



<link rel="stylesheet" href="css/app.css" >

</head>


<body>

<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">3D scan to print</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          
        </div>
      </nav>






<div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="card text-center modelcard">
            <div class="card-header">
              Test 1
            </div>
            <div class="card-body">
              <h5 class="card-title">scene test</h5>
        
                    <model-viewer src="{{asset('models/testtest.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
                    <button onclick="addHotspot()">Add Hotspot</button>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 hours ago
            </div>
          </div>
      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 2
            </div>
            <div class="card-body">
              <h5 class="card-title">Shiny test cube</h5>
        
                    <model-viewer src="{{asset('models/testcube2.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
        
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 hours ago
            </div>
          </div>

      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 3
            </div>
            <div class="card-body">
              <h5 class="card-title">.glb test cube</h5>
        
                    <model-viewer src="{{asset('models/testcube1.glb')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
        
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 hours ago
            </div>
          </div>

      </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card text-center modelcard">
                <div class="card-header">
                  Test 4
                </div>
                <div class="card-body">
                  <h5 class="card-title">Iphone case</h5>
            
                        <model-viewer src="{{asset('models/iphone-xr-case.gltf')}}" class="testcubes testcubebig col-md-12"
                                    auto-rotate 
                                    camera-controls
                                    background-color="#254441"
                                    shadow-intensity="1"
                                  alt="A 3D model of a test cube">
                        </model-viewer>
            
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                  2 hours ago
                </div>
              </div>

        </div>
        
      </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
    
  </div>





<!-- bootstrap links -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>