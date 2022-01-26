
@extends('web.includes.base-v2')
  @section('content')
  
  

  
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- HERO-->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<!-- <section style="width: 100%; display: inline-block;">
  <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/bollyheros/deskActors.jpeg" class="w-100 deskView">
   <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/bollyheros/allActors.jpg" class="w-100 mobView">
</section> -->
  <section class="careerSection">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h2>Full Stack Engineer</h2>
              <div class="w-100 my-3">
                <i class="fas fa-map-marker-alt"></i>
                <span class="location">Delhi/NCR</span>
              </div>
              <h4>Skills</h4>
              <ul class="careerList">
                <li>Strong knowledge of MYSQL/PostGreSQL; Knowledge of MongoDB, Redis is preferred.</li>
                <li>Expertise in application development, databases, version control, and deployment. Skill - Node.js,</li>
                <li>Experience of AWS or GCP - especially services such as Lambda or google app engine.</li>
                <li>Solid grasp of Service-oriented architecture. Web Services implementation on a medium to large scale.</li>
                <li>Solid understanding of scaling mobile app services. Having worked the backend of an Android app is preferred.</li>
              </ul>
              <a href="{{url('/career-details?post=full-stack')}}" class="ctaBtn">Expand</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h2>Technical Project Manager</h2>
              <div class="w-100 my-3">
                <i class="fas fa-map-marker-alt"></i>
                <span class="location">Delhi/NCR</span>
              </div>
              <h4>Skills</h4>
              <ul class="careerList">
                <li>Determine and establish the scope and objectives of the project</li>
                <li>Predict the resources required to meet objectives and manage them effectively and efficiently</li>
                <li>Prepare a budget based on the scale of the project and the resources required</li>
                <li>Keep track of project expenditures to stay inside budget</li>
                <li>Create a clear project timeline and work plan and manage it</li>
              </ul>
              <a href="{{url('/career-details?post=project-manager')}}" class="ctaBtn">Expand</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h2>React Developer</h2>
              <div class="w-100 my-3">
                <i class="fas fa-map-marker-alt"></i>
                <span class="location">Delhi/NCR</span>
              </div>
              <h4>Skills</h4>
              <ul class="careerList">
                <li>Leverage the inbuilt React toolkit for creating frontend features</li>
                <li>Create data visualization tools, libraries, and reusable code for prospects</li>
                <li>Integrate designs and wireframes within the application code</li>
                <li>Monitor interaction of users and convert them into insightful information</li>
                <li>Write application interface code with JavaScript</li>
              </ul>
              <a href="{{url('/career-details?post=react-developer')}}" class="ctaBtn">Expand</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
  