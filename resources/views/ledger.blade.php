<!DOCTYPE html>
<html>
<head>

<title>Journal</title>
<meta charset="utf-8">
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

<!-- Dont forget to add this in order for the ajax to work -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<style media="screen">
	.opt{
		width: 400px;
	}
</style>
</head>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a href="#" class="navbar-brand"><b>General</b> Journal</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
				</div>
			</nav>
		</header>
			<!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
			<section class="content">
		      <div class="row">
		        <div class="col-xs-12">
		          <div class="box">
								<table class="table table-striped">
									<thead>
										<tr>
											<th width="40%">Account Name</th>
											<th width="30%">Debit</th>
											<th width="30%">Credit</th>
										</tr>

									</thead>
									<br>
										<tbody>
											<tr>
												<td><select class="opt" name="">
												  <option value="" width="50px">Select Account Name</option>
													@foreach($a as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td><input type="text" name="debit" value=""></td>
												<td></td>
											</tr>
											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($b as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td></td>
												<td><input type="text" name="credit" value="" ></td>
											</tr>
											<tr>
												<td><input type="text" class="opt" name="desc" value="" placeholder="Enter Description"></td>
												<td></td>
												<td></td>
											</tr>

											<tr>
												<td><select class="opt debit" name="">
												  <option value="">Selec Account Name</option>
													@foreach($c as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td><input type="text" name="debit" value=""></td>
												<td></td>
											</tr>
											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($d as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td></td>
												<td><input type="text" name="credit" value="" ></td>
											</tr>
											<tr>
												<td><input type="text" class="opt" name="desc" value="" placeholder="Enter Description"></td>
												<td></td>
												<td></td>
											</tr>

											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($e as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td><input type="text" name="debit" value=""></td>
												<td></td>
											</tr>
											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($f as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td></td>
												<td><input type="text" name="credit" value="" ></td>
											</tr>
											<tr>
												<td><input type="text" class="opt" name="desc" value="" placeholder="Enter Description"></td>
												<td></td>
												<td></td>
											</tr>

											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($g as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td><input type="text" name="debit" value=""></td>
												<td></td>
											</tr>
											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($h as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td></td>
												<td><input type="text" name="credit" value="" ></td>
											</tr>
											<tr>
												<td><input type="text" class="opt" name="desc" value="" placeholder="Enter Description"></td>
												<td></td>
												<td></td>
											</tr>

											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($i as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td><input type="text" name="debit" value=""></td>
												<td></td>
											</tr>
											<tr>
												<td><select class="opt" name="">
												  <option value="">Selec Account Name</option>
													@foreach($j as $a)
													<option value="{{$a->account_name}}">{{$a->account_name}}</option>
													@endforeach
												</select></td>
												<td></td>
												<td><input type="text" name="credit" value="" ></td>
											</tr>
											<tr>
												<td><input type="text" class="opt" name="desc" value="" placeholder="Enter Description"></td>
												<td></td>
												<td></td>
											</tr>


										</tbody>

								</table>
								<button type="button" name="button" class="btn btn-block btn-success btn-sm" id="submit">Submit</button>
							</div>
						</div>
					</div>
			</section>
	</div>

<script type="text/javascript">
<!-- start ajax script-->
$(document).ready(function(){
    $("#submit").click(function(){
        <!-- this will not work if jquery.min.js script is not added in the head of the page -->
				<!-- set up csrf. also include the csrf token at the meta tag.  -->
				$.ajaxSetup({
				   headers: {
				     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  }
				});

				var alldebit = [];
				var allcredit = [];
				var alldesc1 = [];
				var alldesc2 = [];
				var debit= 0;
				var credit= 0;

				<!-- push all values inside alldebit array where input name is equal to debit -->
				$.each($("input[name='debit']"), function(){
						debit=+$(this).val() + debit;
						<!-- get the account title using its class 'opt'-->
						var Something = $(this).parent().parent().find('.opt').val();
						<!-- push both values inside one index. will be seperated by a backward slash-->
						alldebit.push($(this).val()+'/'+Something);
				});
				<!-- push all values inside allcrebit array where input name is equal to credit -->
				$.each($("input[name='credit']"), function(){
						credit=+$(this).val() +credit;
						<!-- get the title using its class 'opt'-->
						var Something = $(this).parent().parent().find('.opt').val();
						<!-- push both values inside one index. will be seperated by a backward slash-->
						allcredit.push($(this).val()+'/'+Something);
				});
				<!-- push all values inside alldebit array where input name is equal to debit -->
				$.each($("input[name='desc']"), function(){
						<!-- get the descriptions-->
            <!-- two array is used because laravel does not support reusing of array in foreach-->
						alldesc1.push($(this).val());
						alldesc2.push($(this).val());
				});
				<!-- i f values are balance send data to controller using ajax-->
				if(debit===credit)
				{

					$.ajax({
						type: 'post',
						url: '/journalsend',
						data: {

								debit: alldebit,
								credit: allcredit,
								desc1:alldesc1,
								desc2:alldesc2,

						},
						success: function(data){
							if (data==="ok") {
                <!-- if the returned data is ok go to general ledger link-->
								window.location.href = "/General-Ledger";
							}
							else {
                <!-- alert if there is an error-->
								alert(data);
							}
						}
					});
				}
				else {
					alert(debit+" and "+credit+" not balance");
				}

    });
});
</script>
<script src="'{{asset('bower_components/jquery/dist/jquery.min.js')}}'"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
