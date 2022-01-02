@extends('layouts.main')
@section('title')
    QR code
@endsection

@section('content')
    @include('user.users-dashboard')

<div class="container pt-5">
    <h4 class="pb-4 border-bottom">QR code</h4>
    <div class="d-flex justify-content-center py-3">
        <div id="qrcode"></div>
    </div>
    <div class="py text-center">
        <h4 style="font-weight: 400;" >{{ Auth::user()->name }}</h4>
        <div class="py-2 d-flex justify-content-center border-bottom">
        </div>
        <div class="d-flex justify-content-center pt-3">

            <div class="pt-2 pb-5">
                <button class="btn btn-info" >
                    {{ __('Download') }}
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('qr-script')
    <script src="{{asset('js/qrcode.js')}}"></script>
    <script src="{{asset('js/qrcode.min.js')}}"></script>
    <script>
        var QR_CODE = new QRCode("qrcode", {
            width: 220,
            height: 220,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
        QR_CODE.makeCode('{{ Auth::user()->name }}');
    </script>
@endsection