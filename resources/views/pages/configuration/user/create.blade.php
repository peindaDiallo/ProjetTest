<x-main>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    {{__('user.createUser')}}
                </p>
            </header>
                            <div class="card-content">
                                <form method="POST" action="{{ route('admin.users.store') }}">
                                    @csrf
                                    <div class="field">
                                        <label  class="form-label">{{__('user.name')}}</label>
                                        {!! Form::text('name',null, ['placeholder'=> "name",  'class'=>'form-control input input']) !!}
                                        @error('name')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror

                                    </div>
                                    <div class="field">
                                        <label  class="form-label">{{__('user.email')}}</label>
                                        {!! Form::email('email',null, ['placeholder'=> "email" ,  'class'=>'form-control input']) !!}
                                        @error('email')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label  class="form-label">{{__('user.roles')}}</label>
                                        {!! Form::select('roles[]', $roles,[], array('placeholder'=> "choice the roles" , 'class' => 'form-control input','multiple')) !!}
                                        @error('roles')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label  class="form-label">{{__('user.authorization')}}</label>
                                        {!! Form::select('permissions[]', $permissions,[], array('placeholder'=> "choice the authorization, 'class' => 'form-control input','multiple')) !!}
                                        @error('permissions')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label  class="form-label">{{__('user.password')}}</label>
                                        {!! Form::password('password', ['placeholder'=>'password',  'class'=>'form-control input']) !!}
                                        @error('password')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label  class="form-label">{{__('user.confirm_password')}}</label>
                                        {!! Form::password('confirm-password', ['placeholder'=>'confirm_password',  'class'=>'form-control input']) !!}
                                        @error('password')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div></br>
                                    <button type="submit" class="button green">{{__('button.create)}}</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                </body>
                </html>

</x-main>
