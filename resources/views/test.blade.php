<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trial Balance</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{('dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="{{asset('js/jquery.min.js')}}"></script>
  </head>
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
      	<nav class="navbar navbar-static-top">
      		<div class="container">
      			<div class="navbar-header">
      				<a href="#" class="navbar-brand"><b>Test</b> HTML</a>

      			</div>
      		</div>
      	</nav>
      </header>
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="set_data">

              </div>
              <button type="button" onclick="fun_get('1')" name="button">Client 1</button>
              <button type="button" onclick="fun_get('2')" name="button">Client 2</button>
              <button type="button" onclick="fun_get('3')" name="button">Client 3</button>
            </div>
          </div>
        </div>
    </section>

    </div>

    <script type="text/javascript">
function fun_get(id){

    <!-- this will not work if jquery.min.js script is not added in the head of the page -->
    <!-- set up csrf. also include the csrf token at the meta tag.  -->
    $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    }); 
    $.ajax({
        type: 'post',
        url: '/getClient',
        data: {
            'id': id,
        },
        success: function(data) {
            $('.set_data').html(data);
        }
    }); 
}
    </script>
  </body>
</html>
