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
                                    <div class="col-md-6 card-inner">
                                        <div class="image-combo">
                                            <img class="card-img-top" src="image/bt21.jpg" alt="">
                                            <div class="countItem">
                                                <div class="btnMinus"><i class="fas fa-minus-square itemIcon"></i>
                                                </div>

                                                <div><input type="text" name="" value="0" class="countInput"></div>
                                                <div class="btnPlus"><i class="fas fa-plus-square itemIcon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-body-width">
                                                <h5>CGV SNACK COMBO</h5>
                                                <p>1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt
                                                    **Phụ thu đổi sang vị bắp Phô mai**
                                                    ***Nhận trong ngày xem phim***</p>
                                                <h5>99000 VND</h5>
                                            </div>
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
                            <input class="seat" value="1A" readonly></input>
                            <input class="seat" value="2A" readonly></input>
                            <input class="seat" value="3A" readonly></input>
                            <input class="seat" value="4A" readonly></input>
                            <input class="seat" value="5A" readonly></input>
                            <input class="seat" value="6A" readonly></input>
                            <input class="seat" value="7A" readonly></input>
                            <input class="seat" value="8A" readonly></input>
                        </div>
                        <div class="rowSeat">
                            <input class="seat" value="1B" readonly></input>
                            <input class="seat" value="2B" readonly></input>
                            <input class="seat" value="3B" readonly></input>
                            <input class="seat" value="4B" readonly></input>
                            <input class="seat" value="5B" readonly></input>
                            <input class="seat" value="6B" readonly></input>
                            <input class="seat" value="7B" readonly></input>
                            <input class="seat" value="8B" readonly></input>
                        </div>

                        <div class="rowSeat">
                            <input class="seat" value="1C" readonly></input>
                            <input class="seat" value="2C" readonly></input>
                            <input class="seat" value="3C" readonly></input>
                            <input class="seat" value="4C" readonly></input>
                            <input class="seat" value="5C" readonly></input>
                            <input class="seat" value="6C" readonly></input>
                            <input class="seat" value="7C" readonly></input>
                            <input class="seat" value="8C" readonly></input>
                        </div>

                        <div class="rowSeat">
                            <input class="seat" value="1D" readonly></input>
                            <input class="seat" value="2D" readonly></input>
                            <input class="seat" value="3D" readonly></input>
                            <input class="seat" value="4D" readonly></input>
                            <input class="seat" value="5D" readonly></input>
                            <input class="seat" value="6D" readonly></input>
                            <input class="seat" value="7D" readonly></input>
                            <input class="seat" value="8D" readonly></input>
                        </div>

                        <div class="rowSeat">
                            <input class="seat" value="1E" readonly></input>
                            <input class="seat" value="2E" readonly></input>
                            <input class="seat" value="3E" readonly></input>
                            <input class="seat" value="4E" readonly></input>
                            <input class="seat" value="5E" readonly></input>
                            <input class="seat" value="6E" readonly></input>
                            <input class="seat" value="7E" readonly></input>
                            <input class="seat" value="8E" readonly></input>
                        </div>

                        <div class="rowSeat">
                            <input class="seat" value="1F" readonly></input>
                            <input class="seat" value="2F" readonly></input>
                            <input class="seat" value="3F" readonly></input>
                            <input class="seat occupied" value="4F" readonly></input>
                            <input class="seat" value="5F" readonly></input>
                            <input class="seat" value="6F" readonly></input>
                            <input class="seat" value="7F" readonly></input>
                            <input class="seat" value="8F" readonly></input>
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
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="count" class="form-control" />
                                <label class="form-label" for="form6Example1">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" />
                                <label class="form-label" for="form6Example2">Last name</label>
                            </div>
                        </div>
                    </div>


                    <!-- Text input -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" id="pickingSeat" class="form-control" />
                                <label class="form-label" for="form6Example1">Seat</label>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                <select name="hour" required class="form-control">
                                    <option value="" disabled selected>TIME</option>
                                    <option value="09-00">09:00 AM</option>
                                    <option value="12-00">12:00 AM</option>
                                    <option value="15-00">03:00 PM</option>
                                    <option value="18-00">06:00 PM</option>
                                    <option value="21-00">09:00 PM</option>
                                    <option value="24-00">12:00 PM</option>
                                </select>
                                <label class="form-label" for="form6Example2">Time</label>
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

                         <!-- Message input -->
                    <div class="form-outline mb-2">
                        <textarea class="form-control" id="form6Example7" rows="6"></textarea>
                        <label class="form-label" for="form6Example7">Extra product</label>
                    </div>


                    <!-- Total input -->
                    <div class="row mb-2">
                        <div class="col-md-9">
                            <div class="form-outline">
                                <input type="text" id="count" class="form-control" />
                                <label class="form-label" for="form6Example1">Total Price</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" value=" VND" readonly/>
                                <label class="form-label" for="form6Example2">Unit</label>
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-2" onclick="changeColor()">Place
                        order</button>
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
