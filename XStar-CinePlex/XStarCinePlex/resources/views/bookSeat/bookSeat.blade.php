<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/bookSeat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modalComboExtra.css') }}">

    <!-- Bootstrap CSS -->

    <title>Movie Seat Booking</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Modal -->
                <div class="modalx">
                    <div class="modal__overlay">
                    </div>
                    <div class="modal__body">
                        <div class="modal__inner">
                            <div class="productCard__Arr">
                                <div class="product-card">
                                    <div class="col-md-12">
                                        <div class="btnCloseCombo">
                                            <i class="far fa-times-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btnCombo">
                                            <button class="btnOrderCancel btn btn-warning">Cancel</button>
                                            <button class="btnOrderSave btn btn-info">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-8">
                    <ul class="showcase">
                        <li>
                            <div class="icon"></div>
                            <small>N/A</small>
                        </li>

                        <li>
                            <div class="selected-icon"></div>
                            <small>Selected</small>
                        </li>

                        <li>
                            <div class="seat occupied-icon"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>
                </div>
                <div class=" col-md-8">
                    <div class="screen"></div>
                </div>
                <div class="col-md-12">
                    <div class="chooseSeat">
                        <div class="rowSeat">

                            @for ($i = 0; $i < 6; $i++)
                                @for ($j = 0; $j < 8; $j++) <?php $seatNumber = $j + 1 . chr($i + 65); ?>
                                     @if (in_array($seatNumber, $occupiedSeat))
                                    <input class="seat occupied" value="{{ $seatNumber }}"
                                    readonly>
                                @else
                                    <input class="seat" value="{{ $seatNumber }}"
                                    readonly> @endif
                            @endfor
                            <br>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btnExtraCombo btn btn-primary">Click here to buy more product</button>
                </div>
            </div>
            <!-- Extra product -->

            <div class="col-md-5">
                <h2 style="text-align: center;">ORDER INFORMATION</h2>

                <form action="payment/payment-ticket" name="formOrderTicket" method="POST">
                    <!-- Text input -->
                    @csrf
                    <!-- Movie Title -->
                    <div class="form-outline mb-2">
                        <input type="text" name="movietitle" value="{{ $basicInfo['movietitle'] }}"
                            class="form-control" readonly>
                        <label class="form-label" for="form6Example7">Movie</label>
                    </div>
                    <!-- Address and Hour -->
                    <div class="row mb-2">
                        <div class="col-md-7">
                            <div class="form-outline">
                                <input type="text" name="theatre" value="{{ $basicInfo['theatre'] }}"
                                    class="form-control" readonly>
                                <label class="form-label" for="form6Example1">Address</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text" name="hour" value="{{ $basicInfo['hour'] }}" class="form-control" readonly>
                                <label class="form-label" for="form6Example2">Time</label>
                            </div>
                        </div>
                    </div>
                    <!-- Email and Date -->
                    <div class="row mb-2">
                        <div class="col-md-7">
                            <div class="form-outline">
                                <input type="text" name="email" value="{{ $basicInfo['email'] }}"
                                    class="form-control" readonly>
                                <label class="form-label" for="form6Example1">Email</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text" name="date" value="{{ $basicInfo['date'] }}" class="form-control" readonly>
                                <label class="form-label" for="form6Example2">Date</label>
                            </div>
                        </div>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-2">
                        <textarea class="form-control getValueCombo" name="moreproduct" rows="4" readonly></textarea>
                        <label class="form-label" for="form6Example7">Extra product</label>
                    </div>

                    <!-- Total input -->
                    <div class="row mb-2">
                        <div class="col-md-9">
                            <div class="form-outline">
                                <input type="text" name="totalPrice" class="form-control showSumTotalPrice" readonly />
                                <label class="form-label" for="form6Example1">Total Price</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-outline">
                                <input type="text" class="form-control" value=" VND" readonly />
                                <label class="form-label" for="form6Example2">Unit</label>
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <input type="submit" class="btn btn-primary btn-block mb-2">Place
                    order</input>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bookSeat.js') }}"></script>
    <script src="{{ asset('js/comboExtra.js') }}"></script>
</body>
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

</html>
