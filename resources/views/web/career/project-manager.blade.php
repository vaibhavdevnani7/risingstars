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
              <h2 class="misterHoney brandColor">Technical Project Manager</h2>
              <h4 class="brandColor">Bolly Heros</h4>
              <div class="row  my-5">
                <div class="col-md-6">
                  <h5 class="brandColor">Position: Technical Project Manager</h5>
                  <h5 class="brandColor"><b>Experience: 6+ years</b></h5>
                  <h5 class="brandColor"><b>No. of position: 1</b></h5>
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
                <li>Determine and establish the scope and objectives of the project</li>
                <li>Predict the resources required to meet objectives and manage them effectively and efficiently</li>
                <li>Prepare a budget based on the scale of the project and the resources required</li>
                <li>Keep track of project expenditures to stay inside budget</li>
                <li>Create a clear project timeline and work plan and manage it</li>
                <li>Provide regular updates to various stakeholders on the project's strategy, changes, and progress</li>
                

                <li>Assign duties to vendors and suppliers and communicate expected deliverables to manage contracts</li>
                <li>Throughout the project's execution, apply industry best practises, methodologies, and standards</li>
                <li>Keep an eye on things and make modifications as needed</li>
                <li>To find opportunities for improvement, evaluate the project's performance</li>
                
              </ul>
            </div>
          </div>
          <section class=" bg-dark bg-darken-sm p-3" style="">
            <div class="card-body">
              <h2>Project Manager Skills</h2>
              <ul class="careerList">
                <li>Communication skills should be excellent</li>
                <li>Leadership characteristics are required</li>
                <li>Within the team, you must be able to supply organising skills</li>
                <li>Must be able to lead any group</li>
                <li>Ability to manage time is required</li>
                <li>With continuing initiatives, the ability to control any risk</li>
                <li>Problem-solving skills are required</li>
                <li>Is capable of managing a project's budget</li>
                <li>Intelligent in terms of blockchain technology</li>
                <li>Reporting and interpersonal ability</li>

                <li>Is experienced with project management techniques</li>
                <li>Experience in related roles is required</li>
                

                  
              </ul>
            </div>
          </section>
          {{-- <div class="card" style="background:transparent !important; box-shadow: none; border: 0; margin-bottom: 24px;">
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
          </div> --}}
        </div>
      </div>
    </div>
  </section>
@endsection