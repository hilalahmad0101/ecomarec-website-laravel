<div>
    <div class="modal fade" wire:ignore.self id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog block-popup-login">
            <a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>
            <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {!! session('error') !!}
                </div>
            @endif
            <form method="post" class="login"  wire:submit.prevent='login'>
                @csrf
                <div class="block-content">
                    <div class="col-reg registered-account">
                        <div class="email-input">
                            <input type="text" class="form-control input-text username" wire:model="email"
                                id="email" placeholder="Email" />
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="pass-input">
                            <input class="form-control input-text password" type="password" placeholder="Password"
                                wire:model="password" id="password" />
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="ft-link-p">
                            <a href="my-account/lost-password/" title="Forgot your password">Forgot your
                                password?</a>
                        </div>
                        <div class="actions">
                            <div class="submit-login">
                               <input type="submit"
                                    class="button btn-submit-login" name="login" value="Login" />
                            </div>
                        </div>

                    </div>
                    <div class="col-reg login-customer">
                        <h2>NEW HERE?</h2>
                        <p class="note-reg">Registration is free and easy!</p>
                        <ul class="list-log">
                            <li>Faster checkout</li>
                            <li>Save multiple shipping addresses</li>
                            <li>View and track orders and more</li>
                        </ul>
                        <a href="my-account/" title="Register" class="btn-reg-popup">Create an account</a>
                    </div>
                </div>
            </form>
            <div class="clear"></div>

        </div>
    </div>
</div>
