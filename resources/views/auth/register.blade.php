@extends('layouts.app')
@section('content')
<x-guest-layout>
    <x-authentication-card>


        <x-validation-errors class="mb-4" />
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('images/b2.png') }}" class="ms-2"  alt="" style="border-radius: 50%" >
                    </div>
                    <div class="col-6" >
                        <div class="col-11 p-3" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
    <table>
        <thead></thead>
        <tbody>
    <tr>
        <td class="p-2">  <x-label for="name" value="{{ __('Name') }}" /></td>
        <td class="p-2">  <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </td>
    </tr>
    <tr>
        <td class="p-2"><x-label for="email" value="{{ __('Email') }}" /></td>
        <td class="p-2"><x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /></td>
    </tr>
    <tr>
        <td class="p-2">  <x-label for="password" value="{{ __('Password') }}" /></td>
        <td class="p-2"> <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </td>
    </tr>
    <tr>
        <td class="p-2">  <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /></td>
        <td class="p-2"> <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </td>
    </tr>
        </tbody>
    </table>



                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="ml-4 text-body " style="margin-left: 30px">
                                        {{ __('Register') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </x-authentication-card>
</x-guest-layout>
@endsection
@push('css')
    <style>


        .fixed-top {
            top: -30px;
            transform: translateY(40px);
            transition: transform .3s;
        }

        .top1nav {
            background-color: rgb(10, 172, 45);
            padding: 0px;
        }

        .logo {
            width: auto;
            height: 70px;
        }

        .shadow {
            background-color: #ffffff;
            padding-bottom: 0px;
        }

        .bottom {
            box-shadow: 0px 15px 10px -10px #111;
        }

        .toplinks {
            text-decoration: none;
            color: antiquewhite;
        }

        /* .===............////login/register/////......................===.. */

        :root {
            --link-color: #6C4BB4;
            --primary-color-opacity: #e9d5ff;
            --white-shade: #f0f8ff;
            --secondary-color: #1e293b;
            --primary-padding: 8px;
            --pilled-shape-radius: 40px;
            --color1: #36EB84;
            --color2: #2BCDB5;
            --primary-gradient: linear-gradient(to right, var(--color2), var(--color1))
        }



        .log .container {
            padding: 15px;
            border-radius: 10px;
            box-shadow: 3px 2px 2px 4px #353636;
            background: #fff;
            margin-top: 60px;
            justify-content: center;
        }

        .log .item-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .log .log-in {
            font-size: 35px;
            color: var(--secondary-color);
        }

        .log .log-in::after {
            content: "";
            display: block;
            width: 60%;
            height: 3px;
            margin-top: 8px;
            background: var(--primary-gradient);
            margin-inline: auto;
        }

        .log .form-input {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .log input[type="text"],
        input[type="password"] {
            padding: var(--primary-padding);
            /* width: 300px; */
            border-radius: var(--pilled-shape-radius);
            border: none;
            background: #E7FDF0;
            color: var(--secondary-color);
            outline: none;
            border: 1px solid transparent;
        }

        @media only screen and (max-width: 300px) {

            input[type="text"],
            input[type="password"] {
                width: 200px;
            }
        }

        input[type="text"]:focus-visible,
        input[type="password"]:focus-visible {
            border: 1px solid var(--color1);
            background: transparent;
        }

        .label {
            color: var(--secondary-color);
            margin-bottom: 3px;
        }

        .display-space-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0 10px 0;
        }

        .item-container button {
            border-radius: 50%;
            border: none;
            padding: 5px;
            background: transparent;
            margin-left: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 5px #353636;
        }

        button[type="submit"] {

            padding: var(--primary-padding);
            border-radius: var(--pilled-shape-radius);
            border: none;
            background: var(--primary-gradient);

            color: black;

        }

        .chekbox-label {
            font-size: 14px;
        }

        a {
            text-decoration: none;
            color: var(--link-color);
            font-size: 14px;
        }

        /* ////////////carousel/////////////////////// */

        .semail {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif0;
            font-weight: 600;
            color: #039743;
        }

        .seeemail {
            border-radius: 50%;
            border: none;
            background: transparent;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 5px #353636;
        }

        .modtex {
            background-color: #ffffff;
            border-radius: 10%;
        }

        .example button {
            float: left;
            background-color: #4E3E55;
            color: rgb(0, 0, 0);
            border: none;
            box-shadow: none;
            font-size: 17px;
            font-weight: 500;
            font-weight: 600;
            border-radius: 3px;
            padding: 15px 35px;
            margin: 26px 5px 0 5px;
            cursor: pointer;
        }

        .example button:focus {
            outline: none;
        }

        .example button:hover {
            background-color: #33DE23;
        }

        .example button:active {
            background-color: #81ccee;
        }

        .backcover {
            background-image: url("images/logo2.png");
            background-position: left;
            background-repeat: no-repeat;
            background-size: contain;
        }
        img {
    max-width: 100%;
    height: auto;
}

section {
    padding: 60px 0;
    /* min-height: 100vh;*/
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.contact-area {
    border-bottom: 1px solid #353C46;
}

.contact-content p {
    font-size: 15px;
    margin: 30px 0 60px;
    position: relative;
}

.contact-content p::after {
    background: #353C46;
    bottom: -30px;
    content: "";
    height: 1px;
    left: 50%;
    position: absolute;
    transform: translate(-50%);
    width: 80%;
}

.contact-content h6 {
    color: #8b9199;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 10px;
}

.contact-content span {
    color: #353c47;
    margin: 0 10px;
}

.contact-social {
    margin-top: 30px;
}

.contact-social>ul {
    display: inline-flex;
}

.contact-social ul li a {
    border: 1px solid #8b9199;
    color: #8b9199;
    display: inline-block;
    height: 40px;
    margin: 0 10px;
    padding-top: 7px;
    transition: all 0.4s ease 0s;
    width: 40px;
}

.contact-social ul li a:hover {
    border: 1px solid #FAB702;
    color: #FAB702;
}

.contact-content img {
    max-width: 210px;
}

section,
footer {
    background: #1A1E25;
    color: #868c96;
}

footer p {
    padding: 40px 0;
    text-align: center;
}

footer img {
    width: 44px;
}
    </style>
@endpush

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {

            window.addEventListener('scroll', function() {

                if (window.scrollY > 200) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
        // DOMContentLoaded  end
    </script>
@endpush

