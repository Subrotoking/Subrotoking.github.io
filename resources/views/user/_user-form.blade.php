
<div class="form-group">
{!! Form::label('nama', 'Nama') !!}
{!! Form::text('name', null, ['class'=>'form-control'])
!!}
@if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
</div>
<div class="form-group">
{!! Form::label('nidn', 'NIDN') !!}
{!! Form::text('nidn', null, ['class'=>'form-control'])
!!}
</div>
<div class="form-group">
{!! Form::label('nip', 'NIP') !!}
{!! Form::text('nip', null, ['class'=>'form-control'])
!!}
</div>
<div class="form-group">
{!! Form::label('fakultas', 'Fakultas') !!}
{!! Form::text('fakultas', null, ['class'=>'form-control'])
!!}
</div>
<div class="form-group">
{!! Form::label('jurusan', 'Jurusan') !!}
{!! Form::text('jurusan', null, ['class'=>'form-control'])
!!}
</div>
<div class="form-group">
{!! Form::label('email', 'Email') !!}
{!! Form::email('email', null, ['class'=>'form-control'])
!!}
</div>
<div class="form-group">
{!! Form::label('level', 'Level') !!} <br>
{!! Form::radio('level', 'operator',
null, ['class'=>'form-radio']) !!} Operator <br>
{!! Form::radio('level', 'admin',
null, ['class'=>'form-radio']) !!} Administrator
</div>
<div class="form-group">
{!! Form::label('password',
'Password',['class'=>'form-label']) !!}
<input id="password" type="password" class="form-control{{
$errors->has('password') ? ' is-invalid' :
'' }}" name="password" required>
</div>
{!! Form::submit('Save', ['class'=>'btn btn-primary'])
!!}