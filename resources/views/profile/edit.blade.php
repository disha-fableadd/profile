<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <style>
        body {
            margin-top: 20px;
        }

        .userpro {
            text-align: center;
            margin: 0 0 40px 0;
        }

        /* User Cards */
        .user-box {
            width: 110px;
            margin: auto;
            margin-bottom: 20px;

        }


        .user-box img {
            width: 120px !important;
            height: 120px;
            border-radius: 50%;
            box-shadow: 0px 0px 5px 1px grey;
        }

        .profile-card-2 .card {
            position: relative;
        }

        .profile-card-2 .card .card-body {
            z-index: 1;
        }

        .profile-card-2 .card::before {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            left: 0px;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            height: 112px;
            background-color: #e6e6e6;
        }

        .profile-card-2 .card.profile-primary::before {
            background-color: #008cff;
        }

        .profile-card-2 .card.profile-success::before {
            background-color: #15ca20;
        }

        .profile-card-2 .card.profile-danger::before {
            background-color: #fd3550;
        }

        .profile-card-2 .card.profile-warning::before {
            background-color: #ff9700;
        }

        .profile-card-2 .user-box {
            margin-top: 30px;
        }

        .profile-card-3 .user-fullimage {
            position: relative;
        }

        .profile-card-3 .user-fullimage .details {
            position: absolute;
            bottom: 0;
            left: 0px;
            width: 100%;
        }

        .profile-card-4 .user-box {
            width: 110px;
            margin: auto;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .profile-card-4 .list-icon {
            display: table-cell;
            font-size: 30px;
            padding-right: 20px;
            vertical-align: middle;
            color: #223035;
        }

        .profile-card-4 .list-details {
            display: table-cell;
            vertical-align: middle;
            font-weight: 600;
            color: #223035;
            font-size: 15px;
            line-height: 15px;
        }

        .profile-card-4 .list-details small {
            display: table-cell;
            vertical-align: middle;
            font-size: 12px;
            font-weight: 400;
            color: #808080;
        }

        /*Nav Tabs & Pills */
        .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-bottom: 0;
            padding: 12px 20px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;

        }

        .nav-tabs .nav-link:hover {
            border: 1px solid transparent;
        }

        .nav-tabs .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-tabs .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-tabs-primary.nav-tabs {
            border-bottom: 1px solid #008cff;
        }

        .nav-tabs-primary .nav-link.active,
        .nav-tabs-primary .nav-item.show>.nav-link {
            color: #008cff;
            background-color: #fff;
            border-color: #008cff #008cff #fff;
            border-top: 3px solid #008cff;
        }

        .nav-tabs-success.nav-tabs {
            border-bottom: 1px solid #15ca20;
        }

        .nav-tabs-success .nav-link.active,
        .nav-tabs-success .nav-item.show>.nav-link {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-top: 3px solid #15ca20;
        }

        .nav-tabs-info.nav-tabs {
            border-bottom: 1px solid #0dceec;
        }

        .nav-tabs-info .nav-link.active,
        .nav-tabs-info .nav-item.show>.nav-link {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-top: 3px solid #0dceec;
        }

        .nav-tabs-danger.nav-tabs {
            border-bottom: 1px solid #fd3550;
        }

        .nav-tabs-danger .nav-link.active,
        .nav-tabs-danger .nav-item.show>.nav-link {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-top: 3px solid #fd3550;
        }

        .nav-tabs-warning.nav-tabs {
            border-bottom: 1px solid #ff9700;
        }

        .nav-tabs-warning .nav-link.active,
        .nav-tabs-warning .nav-item.show>.nav-link {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-top: 3px solid #ff9700;
        }

        .nav-tabs-dark.nav-tabs {
            border-bottom: 1px solid #223035;
        }

        .nav-tabs-dark .nav-link.active,
        .nav-tabs-dark .nav-item.show>.nav-link {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-top: 3px solid #223035;
        }

        .nav-tabs-secondary.nav-tabs {
            border-bottom: 1px solid #75808a;
        }

        .nav-tabs-secondary .nav-link.active,
        .nav-tabs-secondary .nav-item.show>.nav-link {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-top: 3px solid #75808a;
        }

        .tabs-vertical .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-right: -1px;
            padding: 12px 1px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-radius: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        .tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #dee2e6;
        }

        .tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: 1px solid #dee2e6;
            border-right: 0;
            border-left: 1px solid #dee2e6;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #008cff;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
            color: #008cff;
            background-color: #fff;
            border-color: #008cff #008cff #fff;
            border-bottom: 1px solid #008cff;
            border-right: 0;
            border-left: 3px solid #008cff;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #15ca20;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-bottom: 1px solid #15ca20;
            border-right: 0;
            border-left: 3px solid #15ca20;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #0dceec;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-bottom: 1px solid #0dceec;
            border-right: 0;
            border-left: 3px solid #0dceec;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #fd3550;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-bottom: 1px solid #fd3550;
            border-right: 0;
            border-left: 3px solid #fd3550;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #ff9700;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-bottom: 1px solid #ff9700;
            border-right: 0;
            border-left: 3px solid #ff9700;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #223035;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-bottom: 1px solid #223035;
            border-right: 0;
            border-left: 3px solid #223035;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #75808a;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-bottom: 1px solid #75808a;
            border-right: 0;
            border-left: 3px solid #75808a;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 3px;
            padding: 12px 20px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;

        }

        .nav-pills .nav-link:hover {
            background-color: #f4f5fa;
        }

        .nav-pills .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-pills .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #008cff;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
        }

        .nav-pills-success .nav-link.active,
        .nav-pills-success .show>.nav-link {
            color: #fff;
            background-color: #15ca20;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(21, 202, 32, .5);
        }

        .nav-pills-info .nav-link.active,
        .nav-pills-info .show>.nav-link {
            color: #fff;
            background-color: #0dceec;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
        }

        .nav-pills-danger .nav-link.active,
        .nav-pills-danger .show>.nav-link {
            color: #fff;
            background-color: #fd3550;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(253, 53, 80, .5);
        }

        .nav-pills-warning .nav-link.active,
        .nav-pills-warning .show>.nav-link {
            color: #fff;
            background-color: #ff9700;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(255, 151, 0, .5);
        }

        .nav-pills-dark .nav-link.active,
        .nav-pills-dark .show>.nav-link {
            color: #fff;
            background-color: #223035;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(34, 48, 53, .5);
        }

        .nav-pills-secondary .nav-link.active,
        .nav-pills-secondary .show>.nav-link {
            color: #fff;
            background-color: #75808a;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(117, 128, 138, .5);
        }

        .card .tab-content {
            padding: 1rem 0 0 0;
        }

        .z-depth-3 {
            -webkit-box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="userpro">UPDATE USER PROFILE</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card-4 z-depth-3">
                    <div class="card">
                        <div class="card-body text-center bg-primary rounded-top">
                            <div class="user-box">
                                <img src="{{ asset('storage/' . $user->image) }}" alt="user avatar">
                            </div>
                            <h5 class="mb-1 text-white">{{ $user->fname }} {{ $user->lname }}</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group shadow-none">
                                <li class="list-group-item">
                                    <div class="list-icon">
                                        <i class="fa fa-pen"></i>
                                    </div>
                                    <div class="list-details">
                                        <h3>UPDATE USER PROFILE</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card z-depth-3">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-pills-primary nav-justified">
                            <li class="nav-item">
                                <a href="{{ route('profile')}}" data-target="#profile" data-toggle="pill"
                                    class="nav-link"><i class="icon-user"></i> <span
                                        class="hidden-xs">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill"
                                    class="nav-link"><i class="icon-envelope-open"></i> <span
                                        class="hidden-xs">Post</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('profile.edit')}}" data-target="#edit" data-toggle="pill"
                                    class="nav-link active show"><i class="icon-note"></i> <span
                                        class="hidden-xs">Edit</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <!-- Profile Update Form -->
                            <form action="{{ route('profile.update') }}" method="POST" id="update"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <!-- First Name -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">First Name:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                value="{{ old('fname', $user->fname) }}">
                                            @error('fname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Last Name:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                value="{{ old('lname', $user->lname) }}">
                                            @error('lname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ old('email', $user->email) }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- City -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">City:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" id="city" name="city"
                                                value="{{ old('city', $user->city) }}">
                                            @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Gender:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <div class="form-control">
                                                <input type="radio" id="male" name="gender" value="male" {{ old('gender', $user->gender) == 'male' ? 'checked' : '' }} />
                                                <label for="male">Male</label>
                                                <input type="radio" id="female" name="gender" value="female" {{ old('gender', $user->gender) == 'female' ? 'checked' : '' }} />
                                                <label for="female">Female</label>
                                                <input type="radio" id="other" name="gender" value="other" {{ old('gender', $user->gender) == 'other' ? 'checked' : '' }} />
                                                <label for="other">Other</label>
                                            </div>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Profile Image -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profile Image:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        
                                            @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}"
                                                    alt="Current Profile Image" class="img-fluid mb-3 rounded-circle"
                                                    style="max-height: 150px; width: 150px;">
                                            @else
                                               
                                                <img src="{{ asset('storage/placeholder.png') }}" alt="No Profile Image"
                                                    class="img-fluid mb-3" style="max-height: 150px; width:150px;">
                                            @endif

                                          
                                            <input type="file" class="form-control" name="image" id="image"
                                                accept="image/*">

                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <!-- Save Changes Button -->
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#update').addEventListener('submit', function (event) {
            let isValid = true;

            // Clear previous error messages
            document.querySelectorAll('span[id^="demo"]').forEach(span => {
                span.style.display = 'none';
            });

            // First Name Validation
            const fname = document.querySelector('input[name="fname"]').value.trim();
            if (fname === '') {
                document.querySelector('#demo1').style.display = 'block';
                isValid = false;
            }

            // Last Name Validation
            const lname = document.querySelector('input[name="lname"]').value.trim();
            if (lname === '') {
                document.querySelector('#demo2').style.display = 'block';
                isValid = false;
            }

            // Email Validation
            const email = document.querySelector('input[name="email"]').value.trim();
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                document.querySelector('#demo5').textContent = "Invalid email format";
                document.querySelector('#demo5').style.display = 'block';
                isValid = false;
            } else if (email === '') {
                document.querySelector('#demo5').style.display = 'block';
                isValid = false;
            }

            // City Validation
            const city = document.querySelector('input[name="city"]').value.trim();
            if (city === '') {
                document.querySelector('#demo3').style.display = 'block';
                isValid = false;
            }

            // Gender Validation
            const genderRadios = document.querySelectorAll('input[name="gender"]');
            const isGenderSelected = Array.from(genderRadios).some(radio => radio.checked);
            if (!isGenderSelected) {
                document.querySelector('#demo4').style.display = 'block';
                isValid = false;
            }

            // image
            var image = document.getElementsByName('image')[0].value; // Use name to get the input
            var validExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.webp|\.jfif)$/i;
            if (image === "") {
                document.querySelector('#demo6').style.display = 'block';
                isValid = false;
            }
            if (!validExtensions.exec(image)) {
                document.querySelector('#demo6').style.display = 'block';
                alert("Please upload an image in one of the following formats: .jpg, .jpeg, .webp, .jfif");
                isValid = false;
            }
            // If form is not valid, prevent submission
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>

</html>