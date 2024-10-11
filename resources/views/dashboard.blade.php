
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    {{config('app.name')}}
  </title>
  @include('userback.includes.headlinks')
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('userback.includes.section.sidebar')
    

    @include('userback.includes.section.middile')


    @include('userback.includes.section.footer')


    @include('userback.includes.bodyscripts')

</body>

</html>
