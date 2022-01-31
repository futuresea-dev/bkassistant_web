<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bankruptcy</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <script src="{{ asset('assets/plugins/jquery/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js' )}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.js' )}}"></script>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dynamic.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/questionnaire.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Hotjar Tracking Code for https://www.bkassistant.net -->
    <script>
        (function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:2664727,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body>
    <div class="attorney-nav-iiner">
        <nav class="navbar navbar-expand-lg navbar-light attorney-nav">
            <!-- <div class="container"> -->
            <a class="navbar-brand" href="{{route('client_dashboard')}}">
                <div class="questionnaire-logo text-center">
                    <?php if(!empty($attorney_company->company_logo) && file_exists(public_path().'/'.$attorney_company->company_logo)){?>
                    <img src="{{url($attorney_company->company_logo)}}" alt="">
                    <?php }else{?>
                    <img src="{{ url('assets/images/attorney-logo.png')}}" alt="">
                    <?php }?>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('client_document_uploads')}}">Documents</a>
                    </li>
                    <li class="nav-item logut-btn">
                        <a class="nav-link" href="{{route('client_logout')}}">Logout </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="questionnaire-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="questionnaire-wrapper-content">
                    <div class="questionnaire-main-title">
                        <h3 class="text-center text-c-blue f-w-800"> Please Complete the Form</h3>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- [ pcoded-main-container ] end -->
    <!-- Required Js -->


    <script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('assets/js/questionarrie.js')}}"></script>
    <script>
        function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,en',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
			autoDisplay: false}, 'google_translate_element');
		}
       /* $(document).ready(function(){

            $('.d-inline input').on("click",function(){
                var fldname = $(this).attr('name');
                $('input[name="'+fldname+'"]').attr('checked', false);
                $('input[name="'+fldname+'"]').parent(".d-inline").removeClass("selected");
                $(this).attr('checked', true);
                $(this).parent().addClass("selected");
                
          
            });

            $('input[type="radio"]').each(function(){
            if($(this).is(':checked')){
                $(this).parent().addClass("selected");
            }
            });
        });*/
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        .questionnaire-logo img {
            width: 80px;
            height: 70px;
        }

    </style>
</body>

</html>
