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
                        <h4>What is the first step in buying a home</h4>
                        <button class="btn btn-round text-white" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);" onclick="toggleContent(this)">-</button>
                    </div>
                    <p class="toggle-content open">The first step is to get pre-approved for a mortgage. This helps  determine your budget and shows sellers that you're a serious buyer</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>How do I find the right property for me</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Contact us for more details.</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>What should I consider when selling my home</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);" onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Contact us for more details.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12  text-white">

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>How is the market in my area?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Contact us for more details.</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>How do I determine the value of my home?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Contact us for more details.</p>
                </div>

                <div style="background: #313131; border-radius: 16px;box-shadow: 0px 5px 16px 0px #080F340F;" class="p-3 my-2">
                    <div class="d-flex justify-content-between">
                        <h4>What are closing costs, and who pays them?</h4>
                        <button class="btn btn round text-white text-end" style="background: linear-gradient(180deg, #FF6625 0%, #FA61F9 100%);"  onclick="toggleContent(this)">+</button>
                    </div>
                    <p class="toggle-content">Contact us for more details.</p>
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
