@extends('layout')

@section('title', 'Home')

@section('content')

    <!--FAQ Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">FAQ's</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row faq-div p-4">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-white">
                <div style="background: #313131; border-radius: 16px; box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Why is Webflow the best nocode tool?</h4>
                        <button class="btn btn-round text-white" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);" onclick="toggleContent(this)">-</button>
                    </div>
                    <p class="toggle-content open">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>When did Webflow was founded?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>Is NoCode the future of the web?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);" onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12  text-white">

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>How to launch a Webflow website?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>Who founded BRIX Templates?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>Who are the Webflow founders?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor</p>
                </div>

            </div>
        </div>

    </div>


    <script>
        function toggleContent(button) {
            var content = button.parentNode.nextElementSibling;
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
                button.textContent = "−";
            } else {
                content.style.display = "none";
                button.textContent = "+";
            }
        }
    </script>

@endsection
