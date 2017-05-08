<fieldset>

<!-- Form Name -->
<legend>{!! $option !!} Contact</legend>

<!-- Text input-->

<div class="form-group">
  {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  {!! Form::text ('first_name', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  {!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  {!! Form::text ('last_name', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Text input-->
 <div class="form-group">
  {!! Form::label('email', 'E-mail', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  {!! Form::text ('email', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Date input-->
       <div class="form-group">
  {!! Form::label('', 'Birthday', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  {!! Form::date ('birthday', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  {!! Form::label('phone_number', 'Phone #', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  {!! Form::text ('phone_number', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  {!! Form::text ('address', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  {!! Form::text ('city', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option >Arizona</option>
      <option >Arkansas</option>
      <option >California</option>
      <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  {!! Form::label('zip', 'Zip Code', ['class' => 'col-md-4 control-label']) !!}  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  {!! Form::text ('zip', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<!-- Success message -->

<div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"> Successfully added!</i> </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary" >{!! $option !!} <span class="glyphicon glyphicon-send"></span></button>
    
  </div>
</div>

</fieldset>