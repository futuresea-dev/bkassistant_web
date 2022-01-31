@extends('layouts.master')
@section('content')
<style>
    .text-decoration-underline{
        text-decoration:underline;
    }
</style>
    <div class="bg-home-banner">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-7 col-md-6">
                    <div class="wrapper video-container my-0 w-100">
                     
                        <video width="100%" controls autoplay>
                        <source src="https://sp.rmbl.ws/s8/2/G/7/8/Z/G78Zc.caa.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="offer-img ">
                        <img src="{{ url('assets/images/off.png')}}" class="img-fluid d-block pl-lg-4">
                        <h4 class="pt-2 text-center off-for-days">FIRST 30 DAYS</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="screen-shoots">
        <div class="container">
            <div class="pt-5">
                <div class="section-title text-center">
                    <h2 class="fw-bold font66">Revolutionary Bankruptcy Product</h2>
                    <p class="text-secondary font-lg-18"> Only $55.00 a client</p>
                    <h4 style="
    line-height: 1.6em;
    font-family: 'Tinos', serif;
    font-weight: bold;
    font-style: italic;
    font-size: 30px;
">It's like the client took your assistant home with them to help in accurately completing the questionnaire and uploading all the documents needed to prepare their case.</h4>
                </div>
    
             
            </div>
        </div>
    </section>
    <section class="animated-section-first animated-section">
         <div class="container">
             <h2 class="animated-heading">A Bankruptcy Product Tailored to You and Your Client Both</h2>
              <div class="animated-col-wrapper animated-col-wrapper-1 hidden">
            <div class="animated-col1">
                
                <h3>Our software is designed to be used from any mobile, tablet or desktop device</h3>
                <p>This allows your client to fill out the questionnaire and upload the requested documents (with professional quality scans) from ANYWHERE</p>
            </div>
              <div class="animated-col2"><img src="{{ url('assets/images/Bankruptcy-(1).jpg')}}"/></div>
              <div class="animated-col3">
                  
                  <h4>Our questionnaire adapts to each client</h4>
                  <p class="box-description">
                  This ensures you get the most amount of relevant data from each client, instead of half filled out questionnaires</p>
						<h4>Get all required and requested documents from the client easy</h4>
						<p class="box-description">
						Clients can scan and upload documents from any mobile or tablet device as well as a desktop scanner
					</p>
					<h4>Step-By-Step Tutorial Videos</h4>
					<p class="box-description">
                    Our videos walk the client through the website and document uploads; Our videos are in both English & Spanish
						
              </div>
              </div>
             </div>
        
    </section>
        <section class="animated-section">
         <div class="container">
             <h2 class="animated-heading">Our software reads the clients scanned documents and auto populates the questionnaire</h2>
              <div class="animated-col-wrapper hidden2">
            <div class="animated-col1">
                
                <h3>Free Credit Reports</h3>
                <p>Walks clients through getting CURRENT credit reports FREE directly from all 3 bureaus</p>
            </div>
              <div class="animated-col2"><img src="{{ url('assets/images/listing2-1024x676.jpg')}}"/></div>
              <div class="animated-col3">
                  
                  <h4>No Contract or Setup Fees</h4>
                  <p class="box-description">
                  You only pay on a client by client basis after they submit the questionnaire to your firm</p>
						<h4>Branded as your own software free</h4>
						<p class="box-description">
						Upload your own law firm logo free and create your own document request uploads
					</p>
					<h4>Scans credit reports to auto populate creditors</h4>
					<p class="box-description">
                    Auto populates creditors from consumer credit reports and/or attorney credit reports</p>
						
              </div>
              </div>
             </div>
        
    </section>
        <section class="animated-section-second animated-section">
         <div class="container">
             <h2 class="animated-heading">Bankruptcy cases done with 21st century technology</h2>
              <div class="animated-col-wrapper hidden">
            <div class="animated-col1">
                
                <h3>Branded As The Law Firm Software To Your Clients</h3>
                <p>Our sottware ensures that your logo and contact info is displayed on client questionnaires</p>
            </div>
              <div class="animated-col2"><img src="{{ url('assets/images/screen-shot-1024x697.jpg')}}"/></div>
              <div class="animated-col3">
                  
                  <h4>Finally Get All Needed Documents</h4>
                  <p class="box-description">
                  Step-by-step videos for uploading professional quality scanned documents from any tablet and/or mobile device</p>
						<h4>Signed Petition Back From Client</h4>
						<p class="box-description">
						Sends client completed petition to sign and upload once executed to law firm in our secure upload system
					</p>
					<h4>Client Questionnaire Auto Populates Entire Bankruptcy Petition</h4>
					<p class="box-description">
                    Coming February 2022		</p>
						
              </div>
              </div>
             </div>
        
    </section>
    <section class="request-account mt-5">
        <div class="container">
            <div class="content text-white text-center">
                <div class="section-title text-center">
                    <h2 class="fw-bold text-white">Call or Email for a demo of our software below at<br><a href="tel:949-998-0535" class="text-decoration-underline text-white"> (949) 998-0535</a> or <a href="mailto:info@bkassistant.net" class="text-white text-decoration-underline">info@bkassistant.net</a> </h2>
                    <p class="font-lg-22 pt-3 text-white"><a href="{{route('register')}}" class="request-btn dark-btn">Request an account</a> </p>
                </div>
            </div>
        </div>
    </section>
@endsection
