@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Student Details</h1>
            </div>



            <div class="col-12">
                <div class="class col-12 mt-5">
                    <div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Student Age</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">changes</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($students as $key => $student)

                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $student->stu_id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td><img src="{{ config('images.access_path') }}/{{ $student->images->name }}"
                                            alt="" width="100px" height="60px"></td>

                                    <td>
                                        @if ($student->status == 0)
                                            <span class="badge bg-warning">Inactive</span>
                                        @else
                                            <span class="badge bg-success">Active</span>
                                        @endif
                                    </td>


                                    <td>
                                        <a href="{{ route('studentView.delete', $student->id) }}" class="btn btn-danger"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a> &nbsp;
                                           <a href="javascript:void(0)" class="btn btn-info"><i class="fas fa-solid fa-pencil" onclick="taskEditModal({{ $student->id }})"></i></a>

                                        @if ($student->status == 0)

                                            <a href="{{ route('studentView.status', $student->id) }}"
                                                class="btn btn-success">Active</a>
                                            &nbsp;
                                        @else
                                            <a href="{{ route('studentView.status', $student->id) }}"
                                                class="btn btn-danger"></i>Inactive</a>
                                        @endif
                                    </td>
                                </tr>

                        @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="taskEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskEditLabel">Student Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="taskEditContent">

        </div>

      </div>
    </div>
  </div>


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
            color: var(--white-shade);

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
            color: white;
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
<script>
    function taskEditModal(studentView_id){
    var data = {
        studentView_id: studentView_id,
    };
    $.ajax({
        url: "{{ route('studentView.edit') }}",
   headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'GET',
        data: data,
        dataType: '',
        success: function(response){
            console.log(response);
             $('#taskEdit').modal('show');
             $('#taskEditContent').html(response);
           }
          });
    }

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
