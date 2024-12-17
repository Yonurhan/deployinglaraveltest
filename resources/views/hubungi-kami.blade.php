@extends('layout')
@section('content')

<style>
    .navbar .nav-link{
        position: relative;
        color: #133E87;
        transition: color 0.2s ease;
    }
    .navbar .nav-link:hover {
        color: #133E87;
    }
    .navbar .nav-link:hover::after{
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #133E87;
    }
    #ButtonDaftar{
        background-color: #133E87;
        color: #CBDCEB;
        padding: 10px 40px;
        border-radius: 50px;
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }
    #ButtonDaftar:hover{
        background-color: #CBDCEB;
        color: #133E87;
    }
</style>

<div style="height: 600px" class="mb5">
    <br>
<h1 class="text-center" style="color:#133E87">Hubungi Kami</h1>
    <br>
    <div class="container" style="background-color:white; border-radius: 20px; width:80%">
        <div class="container p-2">
            <div class="row pt-3 mb-3">
                <div class="col text-center">
                    <h5 style="color:#133E87" class="text-center">
                        Instagram EduCenter: @educenter.id
                    </h5>
                </div>
                <div class="col text-center">
                    <a href="https://www.instagram.com/" class="btn ms-auto rounded-pill fw-bold" id="ButtonDaftar">Instagram</a>
                </div>
            </div>

            <div class="row pt-3 mb-3">
                <div class="col">
                    <h5 style="color:#133E87" class="text-center">
                        Facebook EduCenter: EduCenter Indonesia
</h5>
                </div>
                <div class="col text-center">
                    <a href="https://www.facebook.com/" class="btn ms-auto rounded-pill fw-bold" id="ButtonDaftar">Facebook</a>
                </div>
            </div>

            <div class="row pt-3 mb-3">
                <div class="col">
                    <h5 style="color:#133E87" class="text-center">
                        Twitter EduCenter: EduCenterID
</h5>
                </div>
                <div class="col text-center">
                    <a href="https://x.com/home?lang=en" class="btn ms-auto rounded-pill fw-bold" id="ButtonDaftar">Twitter</a>
                </div>
            </div>

            <div class="row pt-3 mb-3">
                <div class="col">
                    <h5 style="color:#133E87" class="text-center">
                        Email : info@educenter.co.id
</h5>
                </div>
                <div class="col text-center">
                    <br>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>


</div>



@endsection
