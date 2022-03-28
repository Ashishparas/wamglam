@extends('layouts.backend')

                @php
                    session()->put('header','View Detail')
                @endphp

@section('content')


                    <div class="col-md-8 col-lg-8">
                        @foreach($detail as $detail1)
                        <?php
                        //echo "<pre>"; print_r($detail1);
                        ?>
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="text-center p-3 overlay-box mb-4">
                                    <div>
                                        <img src="{{asset('uploads/artist/'.$detail1->upload_id)}}" width="100" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h3 class="mt-3 mb-1 text-white">{{$detail1->name}}</h3>
                                    <p class="text-white mb-0">{{$detail1->email}}</p>
                                </div>
                            
                                <div class="mb-3 row">
                                    <label class="col-lg-5 col-form-label" for="validationCustom05">Zip Code </label>
                                    <div class="col-lg-7 pt-1">
                                        <h4 class="mb-0">{{$detail1->zipcode}}</h4>
                                    </div>
                                </div>
        
                                <div class="mb-3 row">
                                    <label class="col-lg-5 col-form-label" for="validationCustom05">Birth Date </label>
                                    <div class="col-lg-7 pt-1">
                                        <h4 class="mb-0">{{$detail1->dob}}</h4>
                                    </div>
                                </div>
        
                                <div class="mb-3 row">
                                    <label class="col-lg-5 col-form-label" for="validationCustom05">Gender </label>
                                    <div class="col-lg-7 pt-1">
                                        <h4 class="mb-0">{{$detail1->gender}}</h4>
                                    </div>
                                </div>
                                <div class="mb-5 row">
                                    <label class="col-lg-5 col-form-label" for="validationCustom05">Any Known Altergles(Optional) </label>
                                    <div class="col-lg-7 pt-1">
                                        <h4 class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--********************rightside******************-->
                    <div class="col-md-4 col-lg-4">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                        <div class="card">
                            <div class="card-header  border-0 pb-0">
                                <h4 class="card-title">Payment Method</h4>
                            </div>
                            <div class="card-body">
                                <div id="dlab_W_Todo1" class="widget-media dlab-scroll ps ps--active-y">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                <h6 class="state-block">State Bank of India</h6>
                                                <h5 class="mb-1">Teresa Misty</h5>
                                                <p>0989-958493-****</p>
                                                <span>(Active)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
            
          
        @endsection
