<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="PMS is a prescription management system to help doctors and diagnostics center to manage their customers in organized and digital way.">
  <meta name="keywords" content="prescription management system, diagnostic center, doctors, prescription, management" />
  <title>PMS - {{ $title ?? 'Prescription management system' }}</title>

  <!-- ========== Css Files ========== -->
  <link href="{{ asset('assets/css/root.css') }}" rel="stylesheet">
  </head>
  <body style="background-color: #F5F5F5;">

    {{ $slot }}

  </body>
</html>
