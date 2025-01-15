<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: 'Rubik';
        }
    </style>

</head>
<body>
    
@extends('layouts.layout')

@section('content')

<div class="container-fluid p-0" style="background-image: url('images/bg1.png'); background-size: cover; background-position: center; height:80vh;">
    <div class="row h-100 align-items-center pl-5">
        <div class="col-md-6 text-container" style="padding-left: 10rem;">
            <h1 class="text-white fw-bold">Cybersecurity Made Simple with Sangfor Cyber Command</h1>
            <p class="text-white my-5 fs-4">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
            <button type="button" class="btn text-white fw-bold py-2 px-5" style="background-color: #32CD32">FREE TRIAL</button>
        </div>
    </div>
</div>


<div class="container-fluid p-0" style="background-image: url('images/bg2.jpg'); background-size: cover; background-position: center; height: 140vh;">
    <div class="row h-100 align-items-center pl-5">
        <div class="d-flex justify-content-center mx-auto my-5">
            <div class="col-md-6 text-container" style="padding-left: 5rem; padding-right: 5rem;">
                <h1 class="fw-bold" style="color: #001869;">About Sangfor<br>Cyber Command</h1>
                <p class="text-black my-5" style="width: 500px;">
                    Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                    <br><br>
                    It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                    <br><br>
                    The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                    <br><br>
                    Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. 
                </p>
            </div>
            <div class="card p-3" style="">
                <div class="col text-container" style="padding-left: 1rem; padding-top: 1rem; margin-bottom: -20px; font-family: 'Rubik'">
                    <h3 class="card-title" style="color: #001869;">Dapatkan Free Trial selama 1 bulan,</h3>
                    <p class="fs-6 fw-bold" style="color: #0B6E4F;">analisa keamanan network anda dan lihat hasilnya!</p>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/submit-form" method="POST">
                        @csrf
                        <div class="form-row d-flex my-4">
                            <div class="form-group col-md-6" style="width: 240px">
                                <label for="first_name" style="padding-left: 10px;">First Name*</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group col-md-6" style="width: 240px; margin-left: 10px;">
                                <label for="last_name" style="padding-left: 10px;">Last Name*</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <label for="email" style="padding-left: 10px;">Corporate Email*</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="job" style="padding-left: 10px;">Job Title*</label>
                            <input type="text" class="form-control" id="job" name="job" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="company" style="padding-left: 10px;">Company Name*</label>
                            <input type="text" class="form-control" id="company" name="company" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="industry" style="padding-left: 10px;">Industry*</label>
                            <input type="text" class="form-control" id="industry" name="industry" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="phone" style="padding-left: 10px;">Phone Number*</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-check my-4">
                            <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                            <label class="form-check-label" for="agree">click this box to agree to be contacted by  our team and<br>get great deals on Sangfor for Helios!</label>
                        </div>
                        <div class="d-flex justify-content-center mb-3 mt-3">
                            <button type="submit" class="btn text-white shadow fw-bold py-2 px-5" style="background-color: #32CD32">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid px-0 pb-5" style="background-image: url('images/bg3.png'); background-size: cover; background-position: center; height: 140vh;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="row justify-content-center" style="width: 1200px;">
            <h1 class="text-white text-center fw-bold my-5">Sangfor Cyber Command Advantages</h1>            
            <div class="col-md-6 mb-4" style="width: 500px; height: 400px">
                <div class="card align-items-center" style="width: 475px; height:420px">
                    <img src="images/advantage1.png" class="card-img-top" alt="Advantage 1" style="width: 250px; height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Advanced Threat Detection</h5>
                        <p class="card-text text-center">Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" style="width: 500px; height: 400px">
                <div class="card align-items-center" style="width: 475px; height:420px">
                    <img src="images/advantage2.png" class="card-img-top" alt="Advantage 2" style="width: 250px; height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Network Visibility and Control</h5>
                        <p class="card-text text-center my-3">Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mt-3" style="width: 500px; height: 400px">
                <div class="card align-items-center" style="width: 475px; height:450px">
                    <img src="images/advantage3.png" class="card-img-top" alt="Advantage 3" style="width: 250px; height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Cloud Security</h5>
                        <p class="card-text text-center my-3">Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mt-3" style="width: 500px; height: 400px">
                <div class="card align-items-center" style="width: 475px; height:450px">
                    <img src="images/advantage4.png" class="card-img-top" alt="Advantage 4" style="width: 250px; height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Comprehensive Security Management</h5>
                        <p class="card-text text-center my-3">Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid px-0 pb-5" style="background-color: #F9FAFE;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="row justify-content-center" style="width: 1200px;">
            <h1 class="text-center fw-bold my-5" style="color: #001869;">Sangfor Cyber Command Features</h1>            
            <div class="col-md-6" style="width: 350px; height: 400px">
                <div class="card align-items-center border-0" style="background-color: #F9FAFE;">
                    <img src="images/feature1.png" class="card-img-top" alt="Feature 1" style="width: 185px; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Threat Intelligence</h5>
                        <p class="card-text text-center">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="width: 350px; height: 400px">
                <div class="card align-items-center border-0" style="background-color: #F9FAFE;">
                    <img src="images/feature2.png" class="card-img-top" alt="Feature 2" style="width: 185px; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Real-Time Detections</h5>
                        <p class="card-text text-center my-3">Real-time alert system provides instant notification of potential security incidents.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="width: 350px; height: 400px">
                <div class="card align-items-center border-0" style="background-color: #F9FAFE;">
                    <img src="images/feature3.png" class="card-img-top" alt="Feature 3" style="width: 185px; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Threats Investigation</h5>
                        <p class="card-text text-center my-3">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" style="width: 350px; height: 400px">
                <div class="card align-items-center border-0" style="background-color: #F9FAFE;">
                    <img src="images/feature4.png" class="card-img-top" alt="Feature 4" style="width: 185px; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Comprehensive Security Solutions</h5>
                        <p class="card-text text-center my-3">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" style="width: 350px; height: 400px">
                <div class="card align-items-center border-0" style="background-color: #F9FAFE;">
                    <img src="images/feature5.png" class="card-img-top" alt="Feature 5" style="width: 185px; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold" style="color: #001869;">Rapid Response</h5>
                        <p class="card-text text-center my-3">Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid px-0 pb-5" style="background-image: url('images/bg4.jpg'); background-size: cover; background-position: center; height: 75vh;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="row justify-content-center" style="width: 600px;">
            <h1 class="text-center fw-bold mb-5" style="color: #001869;">Sangfor Cyber Command’s<br>Value to Customers</h1> 
            <div class="d-flex justify-content-start mx-auto">
                <img src="images/check.png" alt="Checkmark" style="width: 20px; height:20px;">
                <p class="mx-2 fw-bold" style="color: #0B6E4F;">Detect known dan unknown threats</p>
            </div>
            <div class="d-flex justify-content-start mx-auto">
                <img src="images/check.png" alt="Checkmark" style="width: 20px; height:20px;">
                <p class="mx-2 fw-bold" style="color: #0B6E4F;">Much better visibility of security posture of the entire infrastructure</p>
            </div>
            <div class="d-flex justify-content-start mx-auto">
                <img src="images/check.png" alt="Checkmark" style="width: 20px; height:20px;">
                <p class="mx-2 fw-bold" style="color: #0B6E4F;">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
            </div>
            <div class="d-flex justify-content-start mx-auto">
                <img src="images/check.png" alt="Checkmark" style="width: 20px; height:20px;">
                <p class="mx-2 fw-bold" style="color: #0B6E4F;">Faster Response to improve overall security control</p>
            </div>
            <div class="d-flex justify-content-start mx-auto">
                <img src="images/check.png" alt="Checkmark" style="width: 20px; height:20px;">
                <p class="mx-2 fw-bold" style="color: #0B6E4F;">Much more cost effective than other solutions such as SIEM</p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid px-0 pb-4" style="background-color: #F9FAFE;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center" style="width: 700px; background-color: #001869; margin-top: -40px">
            <h2 class="text-center text-white fw-bold my-3">Cyber Command Customers Reference</h2> 
        </div>
        <div class="d-flex justify-content-center mx-auto my-5">
            <img class="mx-4 mt-3" src="images/reference1.png" alt="JNT" style="width: 238px; height:78px;">
            <img class="mx-4 mt-3" src="images/reference2.png" alt="JRP Insurance" style="width: 195px; height:121px;">
            <img class="mx-4 mt-3" src="images/reference3.png" alt="KTA" style="width: 227px; height:84px;">
            <img class="mx-4 mt-3" src="images/reference4.png" alt="Samudera Indonesia" style="width: 308px; height:87px;">
        </div>
    </div>
</div>


<div class="container-fluid px-0 pb-5 mt-3" style="background-color: #FFFFFF;">
    <div class="row h-100 justify-content-center align-items-center">
        <h1 class="text-center fw-bold mt-5" style="color: #001869;">Explore Sangfor Cyber Command with Helios</h1> 
        <p class="text-center fs-5 mt-2">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
        <div class="d-flex justify-content-center mx-auto my-5">
            <div class="col-md-6 shadow mx-3" style="width: 320px; height: 300px">
                <div class="card align-items-center border-0">
                    <img src="images/provide1.png" class="card-img-top mt-4" alt="Provide 1" style="width: 185px; height: 160px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold fs-4" style="color: #001869;">NDR Implementation</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 shadow mx-3" style="width: 320px; height: 300px">
                <div class="card align-items-center border-0">
                    <img src="images/provide2.png" class="card-img-top mt-4" alt="Provide 2" style="width: 185px; height: 160px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold fs-4" style="color: #001869;">Incident Response and Threat Hunting</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 shadow mx-3" style="width: 320px; height: 300px">
                <div class="card align-items-center border-0">
                    <img src="images/provide3.png" class="card-img-top mt-4" alt="Provide 3" style="width: 185px; height: 160px;">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold fs-4" style="color: #001869;">Device Security Maintenance</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

</body>

</html>