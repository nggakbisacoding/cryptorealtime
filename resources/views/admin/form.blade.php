<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased">
    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Bootstrap Contact Form</h1>


        </div>


        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">

                        <div class="container">
                            <form id="contact-form" role="form">



                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Firstname *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Lastname *</label>
                                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Please specify your need *</label>
                                                <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select Your Issue--</option>
                                                    <option>Request Invoice for order</option>
                                                    <option>Request order status</option>
                                                    <option>Haven't received cashback yet</option>
                                                    <option>Other</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Message *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            </div>

                                        </div>


                                        <div class="col-md-12">

                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Send Message">

                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector('#form_message') )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>