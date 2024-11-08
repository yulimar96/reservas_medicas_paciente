<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  {{-- toats --}}
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/> --}}

   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
   <!-- Otras etiquetas meta y enlaces -->

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

   {{-- <script>
    // Configuración de Toastr
    toastr.options = {
        "closeButton": true, // Mostrar botón de cerrar
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right", // Posición de la notificación
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000", // Duración antes de que la notificación desaparezca
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script> --}}

   <style>
      .merriweather-light {
  font-family: "Merriweather", serif;
  font-weight: 300;
  font-style: normal;
}

.merriweather-regular {
  font-family: "Merriweather", serif;
  font-weight: 400;
  font-style: normal;
  text-align: center !important;
}

.merriweather-bold {
  font-family: "Merriweather", serif;
  font-weight: 700;
  font-style: normal;
}

.merriweather-black {
  font-family: "Merriweather", serif;
  font-weight: 900;
  font-style: normal;
}

.merriweather-light-italic {
  font-family: "Merriweather", serif;
  font-weight: 300;
  font-style: italic;
}

.merriweather-regular-italic {
  font-family: "Merriweather", serif;
  font-weight: 400;
  font-style: italic;
}

.merriweather-bold-italic {
  font-family: "Merriweather", serif;
  font-weight: 700;
  font-style: italic;
}

.merriweather-black-italic {
  font-family: "Merriweather", serif;
  font-weight: 900;
  font-style: italic;
}

   </style>
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0')}}">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">


  {{-- sweetalert2 --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>


