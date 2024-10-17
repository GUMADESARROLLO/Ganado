@extends('layouts.lyt_subasta')
@section('content')
<div class="row">
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Application Sales</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="feather icon-trash-2 close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <iframe src="http://www.youtube.com/embed/{{$video}}" frameborder="0" allowfullscreen height="450px" width="100%"></iframe>
                    
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-12">
        <div class="card">                                                    
            <div class="card-block">
                <div class="wrapper wrapper-640">
                    <form action="#" method="post" class="j-forms" id="j-forms" novalidate="">
                        <div class="content">
                            <div class="clone-widget">
                                <div class="unit widget right-50 toclone">
                                    <div class="input">
                                        <input type="text" placeholder="0.00">
                                    </div>
                                    <button type="button" class="addon-btn adn-50 adn-right clone">
                                        <i class="icofont icofont-cur-dollar"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Informacion Lote</h5>
            </div>
            <div class="card-block text-center">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Views :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">545,721</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Info :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">2,256</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Likes :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">4,129</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Info :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">3,451,945</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Info :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">1,543</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Shares :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">846</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Likes :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">569</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Info :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">156</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-t-0">
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Tweets :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">103,576</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-t-0">
                        <div class="row">
                            <div class="col-5">
                                <p class="text-muted m-b-5">Tweets :</p>
                            </div>
                            <div class="col-7">
                                <p class="m-b-5 f-w-400">103,576</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card user-activity-card">
                <div class="card-header">
                    <h5>Pujas realizadas</h5>
                </div>
                <div class="card-block">
                    @for ($i = 0; $i < 5; $i++)
                       
                    @endfor
                    <div class="row m-b-25">
                        <div class="col">     
                            <h6 class="m-b-5">John Deo. <span class="text-muted f-right f-13"><i class="feather icon-clock m-r-10"></i>00:00:00</span></h6>
                                <h4><span class="text-c-lite-green">$8,400</span> Pujado</h4>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
