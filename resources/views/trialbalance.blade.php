<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trial Balance</title>
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
      				<a href="#" class="navbar-brand"><b>Trial</b> Balance</a>

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
                  <tr>
                    <th>Account Title</th>
                    <th>Debit</th>
                    <th>Credit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($amounts as $a)


                        <!--if account tile change print the previous with its total-->
                        @if($a->title!==$an)

                          @if($norm==="debit")
                            <tr><td align="left">{{$an}} </td><td align="left">{{$t}}</td><td align="left"></td></tr>
                          @else
                            <tr><td align="left">{{$an}} </td><td align="left"></td><td align="left">{{$t}}</td></tr>
                          @endif

                        <div style="display: none;">

                          {{$an=$a->title}}
                          {{$norm=$a->normal_balance}}
                          {{$t=0}}
                        </div>
                        @endif

                        <!-- calculating the total for each acount title-->
                        @if($a->normal_balance==="debit")

                          @if($a->debcred===$a->normal_balance)
                          <div style="display: none;">
                            <!-- if the amount has a normal balance of debit and its debit-credit data is also equal to debit add it to its total -->
                            {{$t+=$a->amount}}
                            {{$debit+=$a->amount}}
                          </div>
                          @else
                            <div style="display: none;">

                              {{$t-=$a->amount}}
                              {{$debit-=$a->amount}}
                            </div>
                          @endif
                        @elseif($a->normal_balance==="credit")


                          @if($a->debcred===$a->normal_balance)
                          <div style="display: none;">
                            <!-- if the amount has a normal balance of credit and its debit-credit data is also equal to credit add it to its total -->
                            {{$t+=$a->amount}}
                            {{$credit+=$a->amount}}
                          </div>
                          @else
                            <div style="display: none;">

                              {{$t-=$a->amount}}
                              {{$credit-=$a->amount}}
                            </div>
                          @endif

                        @endif

                  @endforeach
                  <!-- printing of the last account title -->
                  @if($norm==="debit")
                    <tr ><td align="left">{{$an}} </td><td align="left">{{$t}}</td><td align="left"></td></tr>
                  @else
                    <tr ><td align="left">{{$an}} </td><td align="left"></td><td align="left">{{$t}}</td></tr>
                  @endif
                  <tr style="font-weight:bold"><td align="Right">TOTAL: </td><td align="left">{{$debit}}</td><td align="left">{{$credit}}</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>

    </div>
  </body>
</html>
