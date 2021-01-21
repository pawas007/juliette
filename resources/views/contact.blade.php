@extends('layouts.app')

@section('content')

    <div class="contact_wrapper">


        <div class="bg-contact100 ">
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <div class="contact100-pic js-tilt" data-tilt
                         style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                        <img src="images/admin/img-01.png" alt="IMG">
                    </div>

                    <form class="contact100-form validate-form">
					<h3 class="h-25">
						Get in touch
					</h3>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <textarea class="input100" name="message" placeholder="Message"></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
