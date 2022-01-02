<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css" >
        .container { max-width: 1200px }

        .dataTables_length{
            padding-bottom: 5px;
            padding-top: 5px;
        }

        .dataTables_filter{
            padding-bottom: 5px;
            padding-top: 5px;
        }


    </style>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#example').DataTable( {
                responsive: true,
            } );
        } );

    </script>



    <title>TPortal | @yield('title')</title>

</head>
<body>



@yield('content')



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

@yield('qr-script')

{{-- Start Log out script--}}
<script>
    function myFunction() {
        document.getElementById("logout").submit();
    }
</script>
{{-- End Log out script--}}

<script>
    jQuery(document).ready(function () {

        jQuery('#regID').change(function () {

            var selected_caption = $("#regID option:selected").text();
            $('input[name=region]').val(selected_caption);

            let regCode=jQuery(this).val();

            jQuery.ajax({
                url:'getProvince',
                type:'post',
                data: 'regCode='+regCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#provID').html(result)

                }

            });

        });
        jQuery('#provID').change(function () {

            var selected_caption = $("#provID option:selected").text();
            $('input[name=province]').val(selected_caption);

            let provCode=jQuery(this).val();
            jQuery.ajax({
                url:'getCity',
                type:'post',
                data: 'provCode='+provCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#cityID').html(result)

                }
            });

        });
        jQuery('#cityID').change(function () {

            var selected_caption = $("#cityID option:selected").text();
            $('input[name=municipality]').val(selected_caption);

            let citymunCode=jQuery(this).val();
            jQuery.ajax({
                url:'getBarangay',
                type:'post',
                data: 'citymunCode='+citymunCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#barangayID').html(result)

                }
            });

        });

        jQuery('#barangayID').change(function () {

            var selected_caption = $("#barangayID option:selected").text();
            $('input[name=barangay]').val(selected_caption);



        });



    });

</script>



</body>
</html>


{{--<x-app-layout>--}}
{{--<x-slot name="header">--}}
{{--<h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--{{ __('Dashboard') }}--}}
{{--</h2>--}}
{{--</x-slot>--}}

{{--<div class="py-12">--}}
{{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--<div class="p-6 bg-white border-b border-gray-200">--}}
{{--You're logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</x-app-layout>--}}