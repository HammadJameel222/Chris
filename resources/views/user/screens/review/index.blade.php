@extends('user.layouts.app')
@section('content')
    <?php
    $excludefooter = true;
    ?>
    <div class="contianer">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table col-sm-12 border " style="text-align: center">
                            <thead>
                                <tr style="font-size:16px">
                                    <th>
                                        S.No
                                    </th>
                                    <th>
                                        Review Author
                                    </th>
                                    <th>
                                        Review
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ratings as $rating)
                                    <tr style="font-size:16px">
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $rating->user->name }}
                                        </td>
                                        <td>
                                            {{ $rating->review }}
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
@endsection
