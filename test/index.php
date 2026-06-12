<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .Talent-cloud {
            background-color: #bbbfff;
            color: #6336f9;
        }

        .Workforce_cloud {
            background-color: rgb(216, 249, 234);
            color: rgb(13, 120, 100);
        }

        .CRM_cloud {
            background-color: rgb(247, 235, 225);
            color: rgb(217, 119, 7);
        }

        .Communication_cloud {
            background-color: rgb(235, 227, 252);
            color: rgb(123, 57, 237);
        }

        .Automation_cloud {
            background-color: rgb(225, 233, 252);
            color: rgb(57, 114, 237);
        }

        h1 {
            font-size: 50px;
        }

        .steps-section {
            padding: 80px 0;
        }

        .steps-wrapper {
            position: relative;
        }

        .steps-wrapper::before {
            content: "";
            position: absolute;
            top: 42px;
            left: 10%;
            width: 80%;
            height: 3px;
            background: #d8d5ff;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
        }

        .step-circle {
            width: 85px;
            height: 85px;
            background: linear-gradient(135deg, #6a3df0, #4b38d1);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-size: 40px;
            font-weight: 700;
        }

        .step h4 {
            margin-top: 25px;
            font-weight: 700;
        }

        .step p {
            color: #6b7280;
            font-size: 18px;
            line-height: 1.4;
        }

        .card-title-line {
            position: relative;
            text-align: center;
            padding-bottom: 15px;
        }

        .card-title-line::after {
            content: "";
            position: absolute;
            width: 60px;
            height: 4px;
            background: #6a3df0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 p-3">
                hubNext
            </div>
            <div class="col-sm-6">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">AI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Reviews</a>
                                </li>
                                <li class="nav-item d-flex justify-content-end">
                                    <a class="nav-link active btn btn-danger px-5 text-white fw-bold" aria-current="page" href="form.php" style="background-color: #663fe8;">Git Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <h5 class="border border-primary ps-3 border rounded-pill">AI-Powered Business Product</h5>
                </div>
                <h1 class="my-5">Run Your Entire </br> Business From </br> <span style="color: #6e40ed;">One AI Platform</span></h1>
                <p>Recruit talent, manage employees, close deals, support customers, automate communication, and scale operations with HubNest.</p>
                <div class="d-flex gap-3">
                    <a href="" class="btn text-white fw-semibold px-4 rounded-pill" style="background-color: #6e40ed;">Start Free Trial</a>
                    <a href="" class="btn fw-semibold px-4 rounded-pill border" style="color: #6e40ed;">Start Free Trial</a>
                </div>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <div class="row my-5 gap-2">
            <div class="col-sm-3 text-center border shadow rounded-4 p-0">
                <h1 style="color: #6e40ed;">500+</h1>
                <p>Companies Trust HubNest</p>
            </div>
            <div class="col-sm-3 text-center border shadow rounded-4">
                <h1 style="color: #6e40ed;">50,000+</h1>
                <p>Actived User</p>
            </div>
            <div class="col-sm-3 text-center border shadow rounded-4">
                <h1 style="color: #6e40ed;">2M+</h1>
                <p>Notifications Sent</p>
            </div>
            <div class="col-sm-3 text-center border shadow rounded-4">
                <h1 style="color: #6e40ed;">99.99%</h1>
                <p>Uptime Guaranteed</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 my-5">
                <h1>Businesses Use <span style="color: #6e40ed;">Too Many Tools</span></h1>
                <p class="fs-4">Most companies juggle separate systems for every function — leading to chaos.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">Recruitment</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">HR Management</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">CRM</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">Billing</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">Customer Support</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card w-100">
                            <div class="card-body d-flex">
                                <p class="card-text me-5">Notifications</p>
                                <a href="#" class="btn btn-danger rounded-circle justify-content-end">X</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 my-5">
                        <p class="fw-semibold fs-5">The Result: <span class="text-danger">Juggling too many tools leads to:</span></p>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card w-100">
                                    <div class="card-body d-flex">
                                        <p class="card-text me-5 fw-semibold">Duplicate data</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card w-100">
                                    <div class="card-body d-flex">
                                        <p class="card-text me-5 fw-semibold">Higher costs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card w-100">
                                    <div class="card-body d-flex">
                                        <p class="card-text me-5 fw-semibold">Poor visibility</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card w-100">
                                    <div class="card-body d-flex">
                                        <p class="card-text me-5 fw-semibold">Low productivity</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p class="text-center fw-semibold">Product Ecosystem</p>
                <h1 class="text-center">Five Clouds. <span style="color:rgb(122, 59, 237)">One Platform.</span></h1>
                <p class="text-center fs-4 mb-5">Each module is a powerful standalone product — together, they're </br>unstoppable.</p>

                <div class="row my-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5 text-center my-2 border border rounded-4 fw-semibold Talent-cloud">Talent Cloud</div>
                                </div>
                                <h5 class="card-title">For Hiring & Recruitment</h5>
                                <p class="card-text">End-to-end talent acquisition from sourcing to onboarding.</p>
                                <ul>
                                    <li>Applicant Tracking System (ATS)</li>
                                    <li>Job Portal Integration</li>
                                    <li>Candidate Tracking</li>
                                    <li>AI Screening</li>
                                    <li>Interview Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 text-center my-2 border border rounded-4 fw-semibold Talent-cloud Workforce_cloud">Workforce Cloud</div>
                                </div>
                                <h5 class="card-title">For Employee Management</h5>
                                <p class="card-text">Complete HR lifecycle management for modern teams.</p>
                                <ul>
                                    <li>Attendance Tracking</li>
                                    <li>Payroll Management</li>
                                    <li>Leave Management</li>
                                    <li>Performance Tracking</li>
                                    <li>Government HRMS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5 text-center my-2 border border rounded-4 fw-semibold Talent-cloud CRM_cloud">CRM Cloud</div>
                                </div>
                                <h5 class="card-title">For Revenue Growth</h5>
                                <p class="card-text">Drive sales, marketing and customer relationships.</p>
                                <ul>
                                    <li>Lead Management</li>
                                    <li>Sales Pipeline</li>
                                    <li>Marketing Automation</li>
                                    <li>Customer Support</li>
                                    <li>Finance Tracking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mt-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7 text-center my-2 border border rounded-4 fw-semibold Talent-cloud Communication_cloud">Communication Cloud</div>
                                </div>
                                <h5 class="card-title">For Customer Conversations</h5>
                                <p class="card-text">Enterprise-grade telephony and communication suite.</p>
                                <ul>
                                    <li>Cloud Calling</li>
                                    <li>Toll Free Numbers</li>
                                    <li>IVR System</li>
                                    <li>Call Recording</li>
                                    <li>AI Call Analysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="card mt-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7 text-center my-2 border border rounded-4 fw-semibold Talent-cloud Automation_cloud">Automation Cloud</div>
                                </div>
                                <h5 class="card-title">For Hiring & Recruitment</h5>
                                <p class="card-text">End-to-end talent acquisition from sourcing to onboarding.</p>
                                <ul>
                                    <li>Applicant Tracking System (ATS)</li>
                                    <li>Job Portal Integration</li>
                                    <li>Candidate Tracking</li>
                                    <li>AI Screening</li>
                                    <li>Interview Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ai powered start  -->
        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <p class="text-center">AI-Powered</p>
                <h1>Built With <span style="color:rgb(95, 67, 232)">AI At The Core</span></h1>
                <p class="mb-4 fs-4">Every module is supercharged with artificial intelligence that works for you.</p>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card rounded-4">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AI Recruiter</h5>
                                <p class="card-text">Screen resumes automatically and rank candidates instantly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-4">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AI HR Assistant</h5>
                                <p class="card-text">Predict attrition & forecast workforce needs with precision.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-4">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AI Sales Assistant</h5>
                                <p class="card-text">Improve conversions with intelligent lead scoring & nudges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-4">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AI Support Assistant</h5>
                                <p class="card-text">Resolve tickets faster with smart routing and auto-responses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card rounded-4">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AI Analytics</h5>
                                <p class="card-text">Generate business insights and predictive reports automatically.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ai powered end -->

        <!-- Simple Setup start -->
        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <p>Simple Setup</p>
                <h1>How <span style="color: rgb(99, 71, 237);">HubNest Works</span></h1>
                <p class="fs-4">Go live in minutes, not months. Four simple steps to transform your business.</p>
                <div class="steps-section">
                    <div class="container">
                        <div class="steps-wrapper">

                            <div class="row text-center">

                                <div class="col-md-3 step">
                                    <div class="step-circle">1</div>
                                    <h4>Create Your Organization</h4>
                                    <p>Sign up and configure your company profile.</p>
                                </div>

                                <div class="col-md-3 step">
                                    <div class="step-circle">2</div>
                                    <h4>Invite Your Team</h4>
                                    <p>Add users, assign roles, and set permissions.</p>
                                </div>

                                <div class="col-md-3 step">
                                    <div class="step-circle">3</div>
                                    <h4>Enable Modules</h4>
                                    <p>Turn on the clouds you need — HR, CRM, Calling, or all.</p>
                                </div>

                                <div class="col-md-3 step">
                                    <div class="step-circle">4</div>
                                    <h4>Manage Everything</h4>
                                    <p>One dashboard for your entire business operation.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Simple Setup end -->

        <!-- Industry Solutions start -->
        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <p>Industry Solutions</p>
                <h1>Built For<span style="color: rgb(99, 71, 237);">Every Industry</span></h1>
                <p class="fs-4">HubNest adapts to your industry's unique workflows and compliance needs.</p>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Staffing Agencies</h5>
                                <p class="card-text">Streamline placements & candidate pipelines</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">IT Companies</h5>
                                <p class="card-text">Manage dev teams, sprints & HR in one place</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hospitals</h5>
                                <p class="card-text">Staff scheduling, compliance & patient CRM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BPO & Call Centers</h5>
                                <p class="card-text">Cloud telephony, workforce & quality management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Educational Institutes</h5>
                                <p class="card-text">Student lifecycle, admissions & faculty HR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Government Organizations</h5>
                                <p class="card-text">Compliant HRMS, attendance & payroll systems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Industry Solutions end -->

        <!-- Why HubNest start -->
        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <p>Why HubNest</p>
                <h1>Why Teams <span style="color: rgb(99, 71, 237);"> Choose HubNest</span></h1>
                <p class="fs-4">Powerful features built to help your team collaborate securely and work smarter, every day.</p>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">One Login</h5>
                                <p class="card-text">Secure single sign-on access for your team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">One Database</h5>
                                <p class="card-text">Centralized data management and control.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">One Billing</h5>
                                <p class="card-text">Simplified billing and subscription management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">One AI Engine</h5>
                                <p class="card-text">Unified AI capabilities across your workspace.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">Enterprise Security</h5>
                                <p class="card-text">Advanced security built for enterprise scale.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">Multi-Company Support</h5>
                                <p class="card-text">Seamlessly manage multiple companies in one platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card-title-line">Unlimited Scalability</h5>
                                <p class="card-text">Built to grow with your team, without limits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why HubNest end -->
         <hr>

         <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <p>© 2025 HubNest. All rights reserved. Built with AI at the core.</p>
                <p>Aditya Verma</p>
            </div>
         </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>