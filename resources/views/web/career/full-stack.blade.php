@extends('web.includes.base-v2')
@section('content')
  <br><br>
  <section style="width: 100%; display: inline-block;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contentSection">
              <a href="{{url('/career')}}"><i class="far fa-arrow-alt-circle-left"></i> <span>Back to Jobs</span></a>
              <div class="w-100">
                <p>You can submit up to three job applications every 90 days. Be sure to apply for roles that strongly match your skills and work experience.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contentSection_02">
              <h2 class="misterHoney brandColor">Full Stack Engineer</h2>
              <h4 class="brandColor">Bolly Heros</h4>
              <div class="row  my-5">
                <div class="col-md-6">
                  <h5 class="brandColor">Position: Full Stack Engineer</h5>
                  <h5 class="brandColor"><b>Experience: 3 to 6 years</b></h5>
                  <h5 class="brandColor"><b>No. of position: 2</b></h5>
                </div>
                <div class="col-md-6 justify-content-end text-end">
                  <button style="text-transform:uppercase;" class=" btn btn-primary btn-arrow py-2 px-3 mb-4 me-5" data-tor="hover:[bg(transparent) text(primary)]">Apply Job</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="careerSection">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
            <div class="card-body">
              <h2>Skills:</h2>
              <ul class="careerList">
                <li>Strong knowledge of MYSQL/PostGreSQL; Knowledge of MongoDB, Redis is preferred.</li>
                <li>Expertise in application development, databases, version control, and deployment. Skill - Node.js,</li>
                <li>Experience of AWS or GCP - especially services such as Lambda or google app engine.</li>
                <li>Solid grasp of Service-oriented architecture. Web Services implementation on a medium to large scale.</li>
                <li>Solid understanding of scaling mobile app services. Having worked the backend of an Android app is preferred.</li>
              </ul>
            </div>
          </div>
          <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
            <div class="card-body">
              <h2>Culture</h2>
              <ul class="careerList">
                <li>Ability to work independently with minimal supervision</li>
                <li>Happy to deal with, and contribute to, an environment of daily builds Has worked in small teams, is versatile. Work within short timelines and be receptive to business needs. Can work closely with Digital, Product, Operations teams.</li>
                  
              </ul>
            </div>
          </div>
          <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
            <div class="card-body">
              <h2>Desirable Social Attributes:</h2>
              <ul class="careerList">
                <li>Has contributed to one or more Open Source projects through own initiative. Has provided a high quality answer to a question posted on StackOverflow.</li>
              </ul>
            </div>
          </div>
          <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
            <div class="card-body">
              <h2>Role</h2>
              <ul class="careerList">
                <li>As a Software Developer who would work independently, the candidate is expected actively acquire problems and deliver solutions as well as guide the team technically. Such a problem solver would obviously be a self starter with a high level of curiosity rather than a programming language specialist.
              He/she would be required to produce software of the highest quality through self-discipline, clear and engaged communication, and attention to detail. The role would include custom web application development (most typically on Node.js and React.js or Vue.js), databases (most typically MySql and MongoDb), version control (Github), testing (necessarily through test scripts written before code is written), daily builds, and eventual deployment onto AWS or GCP.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection