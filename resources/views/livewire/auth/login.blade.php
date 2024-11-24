<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form wire:submit.prevent="loginUser">
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-group">
                          <label for="password" class="form-label">Password</label>
                          {{-- <div class="input-group"> --}}
                            <input type="password" class="form-control @error('password') is-invalid" @enderror id="password" placeholder="******" wire:model.defer="password">
                            {{-- <span class="input-group-text" onclick="togglePasswordVisibility()" style="cursor: pointer;">
                            <i id="eye-icon" class="fas fa-eye"></i>
                            </span> --}}
                          {{-- </div> --}}
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" wire::model.defer="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <div class="col-5">
                                <a href="{{route('password.request')}}" class="text-primary">Lupa password?</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <a href="{{route('register')}}" class="text-primary">Belum punya akun?</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

