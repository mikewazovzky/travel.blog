{{-- Form User Create/Edit --}}

{{ csrf_field() }}

<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>User Card</h1>
        </div><!-- panel-heading -->
				
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-8"> 

					<div class="form-group">
						<label for="name" class="control-label col-sm-3">Name:</label>
						<div class="col-sm-9">
							<input type="text" name="name" class="form-control" value="{{ isset($user)? $user->name : old('name') }}"/>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="control-label col-sm-3">Email:</label>
						<div class="col-sm-9">
							<input type="email" name="email" class="form-control" value="{{ isset($user)? $user->email : old('email') }}" {{ isset($user)? 'readonly' : ''}}/>
						</div>
					</div>
					
					<div id="pass">					
						<div class="form-group">
							<label for="password" class="control-label col-sm-3">Password:</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control"/>
							</div>
						</div>	

						<div class="form-group">
							<label for="password_confirmation" class="control-label col-sm-3">Confirm Password:</label>
							<div class="col-sm-9">
								<input type="password" name="password_confirmation" class="form-control"/>
							</div>
						</div>	
					</div>						
					
					<div class="form-group">
						<div class="col-sm-9">
							<input type="file" name="avatar" class="form-control" id="userFile">
						</div>	
					</div>		
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary form-control">
						</div>
					</div>

				</div>
				
				<div class="col-xs-12 col-sm-4 userPhoto">
					<img id="userImage" src="/images/avatars/{{ $imageSrc }}">
					<p id="userInfo"></p>
				</div>	
				
			</div>	
		</div><!-- panel-body -->		
	</div>					
</div>				
				