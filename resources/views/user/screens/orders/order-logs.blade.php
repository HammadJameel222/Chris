@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Order logs"
    </script>
    <main>
        <section class="order-log-sec inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <form action="">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-12">
                                    <h2 class="cart-title inner-title text-center mb-60">Order Logs</h2>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <div class="d-flex align-items-center gap-20">
                                        <div>
                                            <label for="" class="order-label mt-20">Sort by</label>
                                        </div>
                                        <div>
                                            <h6 class="acc-inner-text change mb-0">From</h6>
                                            <input type="date" placeholder="" class="order-log-field">
                                        </div>
                                        <div>
                                            <h6 class="acc-inner-text change mb-0">To</h6>
                                            <input type="date" placeholder="" class="order-log-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="order-log-select">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pending</option>
                                            <option value="1">In Process</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Refunded</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12 mt-30">
                                    <div class="row justify-content-between align-items-center ">
                                        <div class="col-lg-3 col-md-6 col-12 mm-b-30">
                                            <div class="d-flex  align-items-center gap-10">
                                                <div>
                                                    <label for="" class="order-label ">Sort by</label>
                                                </div>
                                                <div class="flex-grow">
                                                    <!--<input type="number" class="order-log-field change" value="10">-->
                                                    <div class="order-log-select number">
                                                        <select class="form-select mt-0"
                                                            aria-label="Default select example">
                                                            <option selected>10</option>
                                                            <option value="1">20</option>
                                                            <option value="2">30</option>
                                                            <option value="3">40</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="" class="order-label ">Entries</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 ">
                                            <input type="text" class="order-log-field search " placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="order-log-table table-responsive mt-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.NO</th>
                                        <th scope="col">ORDER ID</th>
                                        <th scope="col">ORDER DATE</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">QUANTITY</th>
                                        <th scope="col">AMOUNT PAID</th>
                                        <th scope="col">ORDER STATUS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>001</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>Abc Title</td>
                                        <td>02</td>
                                        <td>£1234</td>
                                        <td><button type="button" class="order-tab-btn">Pending</button></td>
                                        <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td>001</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>Abc Title</td>
                                        <td>02</td>
                                        <td>£1234</td>
                                        <td><button type="button" class="order-tab-btn Refunded">Refunded</button></td>
                                        <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td>001</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>Abc Title</td>
                                        <td>02</td>
                                        <td>£1234</td>
                                        <td><button type="button" class="order-tab-btn Delivered">Delivered</button></td>
                                        <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td>001</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>Abc Title</td>
                                        <td>02</td>
                                        <td>£1234</td>
                                        <td><button type="button" class="order-tab-btn Process">In Process</button></td>
                                        <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">05</th>
                                        <td>001</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>Abc Title</td>
                                        <td>02</td>
                                        <td>£1234</td>
                                        <td><button type="button" class="order-tab-btn">Pending</button></td>
                                        <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="notify-content table-content mb-38 mt-30">
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <p class="pag-para mm-b-30">Showing 05 out of 20 Entries</p>
                                </div>
                                <div class="col-lg-5 col-md-8 col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link page-link1 first-c"
                                                    href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                                            <li class="page-item"><a class="page-link page-link1 last-c"
                                                    href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
