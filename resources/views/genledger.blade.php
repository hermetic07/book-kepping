<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ledger</title>
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
  </head>
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
      	<nav class="navbar navbar-static-top">
      		<div class="container">
      			<div class="navbar-header">
      				<a href="#" class="navbar-brand"><b>General</b> Ledger</a>

      			</div>
            <div class="navbar-custom-menu">
      				<ul class="nav navbar-nav">
      				  <li><a href="/Trial-Balance" class="navbar-brand"><b> Go to Trial Balance</a></li>
      				</ul>

      			</div>
      		</div>
      	</nav>
      </header>
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <table class="table table-striped">
                <thead>

                </thead>
                <tbody>
                  @foreach($amounts as $a)
                    @if($a->title!=="")

                        <!--if account tile changes create new heading-->
                        @if($a->title!==$an && $c!==0 )
                        <tr><td align="left"></td><td></td><td></td><td></td></tr>
                        <tr><td align="left"></td><td></td><td></td><td></td></tr>
                        <tr style="font-weight:bold"><td align="left">Account Name: {{$a->title}} </td><td></td><td></td><td></td></tr>
                        <tr style="font-weight:bold"><td align="left">Description</td><td align="left">DEBIT</td><td align="left">CREDIT</td><td>TOTAL</td></tr>
                        <div style="display: none;">
                          {{$an=$a->title}}
                          {{$t=0}}
                        </div>
                        @endif
                        <!-- print 1st account title -->
                        @if($c===0)
                        <tr style="font-weight:bold"><td align="left">Account Name: {{$a->title}} </td><td></td><td></td><td></td></tr>
                        <tr style="font-weight:bold"><td align="left">Description</td><td align="left">DEBIT</td><td align="left">CREDIT</td><td>TOTAL</td></tr>
                        <div style="display: none;">
                          {{$c+=1}}
                        </div>
                        @endif



                        <!-- print debit amount. If debit add value to total (assumed that all account title's normal balance is debit)-->
                        @if($a->debcred==="debit")

                          @if($a->debcred===$a->normal_balance)
                            <tr><td align="left">{{$a->description}} </td><td align="left">{{$a->amount}} </td><td> </td><td>{{$t+=$a->amount}}</td></tr>
                          @else
                            <tr><td align="left">{{$a->description}} </td><td align="left">{{$a->amount}} </td><td> </td><td>{{$t-=$a->amount}}</td></tr>
                          @endif
                        @else
                        <!--print credit amount. If credit subtract value to total -->

                          @if($a->debcred===$a->normal_balance)
                            <tr><td align="left">{{$a->description}} </td><td> </td><td align="left">{{$a->amount}} </td><td>{{$t+=$a->amount}}</td></tr>
                          @else
                            <tr><td align="left">{{$a->description}} </td><td> </td><td align="left">{{$a->amount}} </td><td>{{$t-=$a->amount}}</td></tr>
                          @endif

                        @endif
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>

    </div>
  </body>
</html>
