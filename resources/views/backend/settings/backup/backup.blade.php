@extends('backend.layouts.master')



@section('content')

<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Connect your settings</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your database details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="{{route('backup.post')}}" method="post" id="">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" >Host</label>
													<input type="text" class="form-control" placeholder="Enter Server Name EX: Localhost" name="server" id="server" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" >Database Username</label>
													<input type="text" class="form-control" placeholder="Enter Database Username EX: root" name="username" id="username" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" >Database Password</label>
													<input type="password" class="form-control" placeholder="Enter Database Password" name="password" id="password" >
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10">Database Name</label>
													<input type="text" class="form-control" placeholder="Enter Database Name" name="dbname" id="dbname" required="" autocomplete="on">
												</div>
												<div class="form-group text-center">
													<button type="submit" name="backupnow" class="btn btn-info btn-rounded">Initiate Backup</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>











@endsection