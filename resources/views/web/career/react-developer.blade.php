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
              <h2 class="misterHoney brandColor">React Developer</h2>
              <h4 class="brandColor">Bolly Heros</h4>
              <div class="row  my-5">
                <div class="col-md-6">
                  <h5 class="brandColor">Position: React Developer</h5>
                  <h5 class="brandColor"><b>Experience: 3+ years</b></h5>
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
              <h2>Technical Skills:</h2>
              <ul class="careerList">
                <li>Strong proficiency in JavaScript, object model, DOM manipulation and event handlers, data structures, algorithms, JSX, and Babel</li>
                <li>Complete understanding of ReactJS and its main fundamentals like JSX, Virtual DOM, component lifecycle, etc.</li>
                <li>Preceding experience with ReactJS workflows like Flux, Redux, Create React App, data structure libraries</li>
                <li>Understanding of RESTful APIs/GraphQL, HTML/CSS, ES6 (variables and scoping, array methods), code versioning tools like GIT, SVN, etc., popular frontend development tools, CI/CD tools, DevOps, performance testing frameworks like Mocha, Node + NPM</li>
                <li>Preferred degree in Computer Science, Information Technology or similar</li>
              </ul>
            </div>
          </div>
          
          
          <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
            <div class="card-body">
              <h2>Roles And Responsibilities</h2>
              <ul class="careerList">
                <li>As an efficient ReactJS developer, he/she is supposed to perform certain defined roles and follow responsibilities to get the best of results. Here are the major ones, that any ReactJS developer is supposed to follow:</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection