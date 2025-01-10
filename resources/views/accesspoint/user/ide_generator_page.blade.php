@extends('layouts.dashboard')

@section('title', 'ONEGET | Ide Generator')

@section('navbar')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center"
        style="height: 0; margin:0" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" style="padding-top: 2rem">
                <i class="bx fi fi-bs-bars-sort"></i>
            </a>
        </div>
    </nav>
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card" style="background: none; box-shadow:none;">
                    <div class="d-flex align-items-end row">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="card-body" style="padding-bottom: 0;">
                                    <h5 class="card-title text-primary mb-4" style="color: #000!important;">Ide Generator
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card-body d-flex justify-content-end align-items-center"
                                    style="padding-bottom: 0; padding-right:0;">
                                    <a href="{{ route('ideGeneratorHistory', Auth::id()) }}" class="card-title text-primary"
                                        style="color: #00000099!important; font-size: 16px;">History <i
                                            class="fi fi-bs-time-past align-middle"></i></a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1" style="width: 100%" id="content-box">
            <div class="row" style="padding-left: 3%; padding-right:3%;">
                <div class="card overflow-hidden mb-4" style="height: 700px">
                    <div class="card-body" id="vertical-example"
                        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <div id="before_login"
                            style="display: flex; align-items: center; text-align: center; flex-direction: column;">
                            <i class="fi fi-bs-cloud-disabled" style="font-size: 110px; color:#0000007D"></i>
                            <h5 style="color: #0000007D">Gunakan Ide Generator Sekarang dan Temukan Inspirasi Baru!</h5>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <img style="margin-right: 20px; display: none;" id="user-image"
                                src="{{ asset('assets/user/images/user-2.png') }}" width="34px" alt="Oneget">
                            <span id="submitted-content"></span>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <img style="margin-left:2px; margin-right: 23px; display:none;" id="avatar-image"
                                src="{{ asset('assets/user/images/ai-avatar.png') }}" width="29px" alt="Oneget">
                            <div class="ml-3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="padding: 2%">
                    <div class="input-group" style="max-width: 90%; box-shadow:none;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"
                                style="border-radius: 0; border-right: 0; border-top-left-radius: 8px; border-bottom-left-radius: 8px; padding-right: 0;"><i
                                    class="fi fi-bs-search"></i></span>
                        </div>
                        <input type="text" style="border-left: none; border-radius: 0 8px 8px 0; color:#000;"
                            class="form-control" id="defaultFormControlInput" placeholder="Temukan Inspirasimu"
                            aria-describedby="defaultFormControlHelp" />
                        <div class="input-group-append">
                            <button class="btn btn-primary mx-4" id="button-submit" type="button">Temukan Ide</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        new PerfectScrollbar(document.getElementById('vertical-example'), {
            wheelPropagation: false
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Function to handle button click
            function handleButtonClick() {
                // Get the value from the input field
                var inputValue = $('#defaultFormControlInput').val();

                // Check if there is submitted content
                if (inputValue.trim() !== '') {
                    // Show the image and content
                    $('#user-image').show();
                    $('.ml-3').show();
                    $('#before_login').hide();
                    $('#vertical-example').removeAttr('style');
                    $('#submitted-content').attr('style',
                        'padding: 10px; color: #000000E5; font-weight: 500; border-radius: 8px; border: 1px solid #E2E8F0;'
                    );
                    $('.ml-3').attr('style',
                        'padding: 10px; color:#000000E5; font-weight:400; border-radius: 8px; box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07);'
                    );
                } else {
                    // Hide the image and content if no content is submitted
                    $('#user-image').hide();
                    $('.ml-3').hide();

                }

                // Display the submitted content
                $('#submitted-content').text(inputValue);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('ideGeneratorSend') }}',
                    data: {
                        input: inputValue
                    },
                    success: function(data) {

                        // Split the input by empty lines to identify paragraphs
                        var paragraphs = data.split(/\n\s*\n/);

                        // Initialize an empty string to hold the formatted HTML
                        var formattedHtml = '';

                        // Check if each paragraph is a list or not and remove leading empty lines
                        for (var i = 0; i < paragraphs.length; i++) {
                            // Remove leading empty lines and trim whitespace
                            var paragraphText = paragraphs[i].trim();

                            if (paragraphText) {
                                if (/^\d+\.\s/.test(paragraphText)) {
                                    // If it's a list, format it as a list
                                    var listItems = paragraphText.split('\n');
                                    formattedHtml += '<ul>';
                                    for (var j = 0; j < listItems.length; j++) {
                                        formattedHtml += '<li>' + listItems[j].replace(/^\d+\.\s/, '') +
                                            '</li>';
                                    }
                                    formattedHtml += '</ul>';
                                } else {
                                    // If it's not a list, format it as a paragraph
                                    formattedHtml += '<p>' + paragraphText + '</p>';
                                }
                            }
                        }

                        // Display the formatted HTML in the 'ml-3' element
                        var typed = new Typed('.ml-3', {
                            strings: [
                                formattedHtml
                            ], // Set the formatted HTML as the string to be typed
                            typeSpeed: 10,
                            showCursor: false, // Optional: Hide the typing cursor
                        });

                        // Show the avatar-image since there is a response from the server
                        $('#avatar-image').show();
                    },
                    error: function(error) {
                        // Handle any errors that occur during the AJAX request
                        console.error(error);
                    }
                });

            }

            // Listen for Enter key press on the input field
            $('#defaultFormControlInput').keypress(function(event) {
                if (event.which == 13) {
                    // Trigger the button click when Enter key is pressed
                    $('#button-submit').click();
                };
            });

            // Listen for button click
            $(document).on('click', '#button-submit', function() {
                // Call the handleButtonClick function
                handleButtonClick();
            });
        });
    </script>
@endsection
