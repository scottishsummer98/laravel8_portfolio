<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sami's Resume</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile square mx-auto mb-2" src={{url($about->profile_picture)}} alt="Profile Picture"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contactme">Contact Me</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{$about->first_Name}}
                        <span class="text-primary">{{$about->last_Name}}</span>
                    </h1>
                    <div class="subheading mb-5">
                        Address: {{$about->address}}<br>
                        Phone Number: {{$about->phone_number}}<br>
                        Email: <a href="mailto:name@email.com">{{$about->email}}</a>
                    </div>
                    <p class="lead mb-5">{{$about->short_description}}</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/md-samiur-rahman-a9b6391b4/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/scottishsummer98"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/Scotish.Summer/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @if (count($experience) > 0)
                        @foreach ($experience as $experience)
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">{{$experience->designation}}</h3>
                                    <div class="subheading mb-3">{{$experience->company}}</div>
                                    <p>{{$experience->summary}}</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">{{$experience->timeframe}}</span></div>
                            </div>
                        @endforeach
                    @endif  
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @if (count($education) > 0)
                        @foreach ($education as $education)
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">{{$education->institution}}</h3>
                                    <div class="subheading mb-3">{{$education->qualification}}</div>
                                    <div>{{$education->concentration}}</div>
                                    <p>{{$education->result}}</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">{{$education->timeframe}}</span></div>
                            </div>
                        @endforeach
                    @endif  
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fas fa-database"></i></li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Projects-->
            <section class="resume-section" id="projects">
                <div class="resume-section-content">
                    <h2 class="mb-5">Projects</h2>
                    @if (count($project) > 0)
                        @foreach ($project as $project)
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-3">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">{{$project->title}}</h3>
                                    <div class="subheading mb-3">{{$project->usedcomponents}}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif  
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a full time software developer, I'm also a UI/UX designer working with Adobe XD for almost 2 years now. I love to visualize the entire requirement of my client before starting development. </p>
                    <p class="mb-0">Also I love to play my guitar and I love reading about ancient history and cultures over the years from different parts of our planet. Spending time with my family and playing video games are part of my leisure activities</p>
                </div>
            </section>
            <hr class="m-0" />
        </div>
            <!-- Contact Me-->
            <section class="resume-section" id="contactme">
                <div class="resume-section-content">
                    <div class="col-lg-6">
                    <h2 class="mb-5">Contact Me</h2>
                        <form id="contactForm" action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid">
                                <div id="success">@include('alert.messages')</div>
                                <button class="btn btn-primary btn-xl" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <hr class="m-0" />                        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
