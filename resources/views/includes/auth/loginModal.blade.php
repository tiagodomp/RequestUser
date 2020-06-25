<!--Modal Form Login -->
<div class="modal" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <img src="{{ asset('img/user_admin.png') }}" class="rounded-circle img-responsive"
                     alt="User Admin">
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <h5 class="mt-1 mb-2">eve.holt@reqres.in</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input hidden type="email" name="email" value="eve.holt@reqres.in">
                    <div class="md-form ml-0 mr-0">
                        <input type="password" type="text" id="password" class="form-control ml-0">
                        <label for="password" class="ml-0">Senha</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-cyan">Entrar
                            <i class="fas fa-sign-in-alt ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!--Modal Form Login-->
