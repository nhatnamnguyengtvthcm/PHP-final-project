<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #242333;
        display: flex;
        flex-direction: column;
        color: white;
        align-items: center;
        justify-content: center;
        font-family: 'Lato', 'sans-serif';
    }

</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin: auto; margin-top: 20px">
                <h2 style="text-align: center;">ORDER INFORMATION</h2>
                <form action="{{ route('postBookSeat') }}" name="" method="POST">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="email" class="form-control" />
                                <label class="form-label" for="form6Example2">Your Email</label>
                            </div>
                        </div>
                    </div>
                    <!-- 2 column grid layout with text inputs for movie name -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="movietitle" class="form-control" />
                                <label class="form-label" for="form6Example1">Movie</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline mb-2">
                                <select name="theatre" required class="form-control">
                                    <option value="" disabled selected>THEATRE</option>
                                    <option value="main-hall">Main Hall</option>
                                    <option value="vip-hall">VIP Hall</option>
                                    <option value="private-hall">Private Hall</option>
                                </select>
                                <label class="form-label" for="form6Example4">Address</label>
                            </div>
                        </div>
                    </div>
                    <!-- Text input -->

                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <select name="hour" class="form-control">
                                    <option value="-1" selected>TIME</option>
                                    <option value="09-00">09:00 AM</option>
                                    <option value="12-00">12:00 AM</option>
                                    <option value="15-00">03:00 PM</option>
                                    <option value="18-00">06:00 PM</option>
                                    <option value="21-00">09:00 PM</option>
                                    <option value="24-00">12:00 PM</option>
                                </select>
                                <label class="form-label" for="form6Example2">Time</label>
                                <span class="errorTime"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <select name="date" required class="form-control">
                                    <option value="" disabled selected>DATE</option>
                                    <option value="12-3">March 12,2019</option>
                                    <option value="13-3">March 13,2019</option>
                                    <option value="14-3">March 14,2019</option>
                                    <option value="15-3">March 15,2019</option>
                                    <option value="16-3">March 16,2019</option>
                                </select>
                                <label class="form-label" for="form6Example2">Date</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block mb-2"></input>
                    <form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
