@extends('base')

@section('bodyHeaderText', 'Improving the internet one website at a time')

@section('body')

<section class="content">
  <div class="container homepage">
    <div class="row">
      <div class="col">
        <div class="container our-services">
          <div class="row">

            <div class="col text-center">
              <h4>
                <div class="icon"><i class="fa fa-cogs"></i></div>
                Build
              </h4>
              <p>
                We pride ourselves on delivering clean,
                high quality code that is easy to maintain
                long after we have completed a project.
              </p>
            </div>

            <div class="col text-center">
              <h4>
                <div class="icon"><i class="fa fa-edit"></i></div>
                Design
              </h4>
              <p>
                We don't just mean how does the site look,
                we can help you design your database and help
                you to structure your code in the best possible way.
              </p>
            </div>

            <div class="col text-center">
              <h4>
                <div class="icon"><i class="fa fa-user-secret"></i></div>
                Security
              </h4>
              <p>
                You can rely on us to test our code to a high level
                and have years of experience in preventing thousands
                of common security mistakes that other developers miss.
              </p>
            </div>

            <div class="col text-center">
              <h4>
                <div class="icon"><i class="fa fa-bug"></i></div>
                Testing
              </h4>
              <p>
                All of our code is written with tests to make sure that
                when something does go wrong we can fix it quickly and
                prevent it from happening again with regression tests.
              </p>
            </div>
          </div>
        </div><!--// end of our-services -->
      </div>
    </div>
  </div>
</section>

@stop
