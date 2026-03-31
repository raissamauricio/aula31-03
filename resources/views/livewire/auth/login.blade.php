<div>

    <body class="bg-light">

        <div class="container d-flex justify-content-center align-items-center">
            <section class="mb-6">
                <div class="row g-4 ">
                    <div class="mt-3 p-3">
                        <div class="card shadow-lg p-4 " style="width: 450px; border: radius 20px;">
                            <div class="card-body">
                                <div class="text-center">

                                    <i class="bi bi-heart-fill text-primary" style="font-size:50px"></i>
                                </div>
                                <h2 class="text-center text-primary">CuidadoConectado</h2>
                                <p class="text-center">Sua saúde, nossa prioridade</p>
                                <div class="row mt-4 p-4">
                                    <div class="col-6 text-center text-primary mt-3">Entrar</div>
                                    <div class="col-6 text-center text-secondary mt-3">Cadastrar</div>
                                    <div class="text-left">
                                        <p>Email</p>

                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">{{ session('error') }}</div>
                                        @endif

                                        <form wire:submit.prevent='login'>
                                            <input type="email" class="form-control border"
                                                id="exampleFormControlInput1" wire:model='email'
                                                placeholder="digite seu email">
                                            <p class="mt-4">Senha</p>
                                            <input type="password" class="form-control border"
                                                id="exampleFormControlInput1" wire:model='password'
                                                placeholder="digite sua senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4">Entrar</button>
                                    </form>
                                    <hr class="mt-4">
                                    <p class="text-center">Não tem uma conta?</p>
                                    <p><a class="text-center"
                                            href="file:///C:/Users/Aluno/Desktop/site/index.html/cadastro.html">Criar
                                            Conta (paciente)</a></p>
                                    <p><a class="text-center"
                                            href="file:///C:/Users/Aluno/Desktop/site/index.html/colaborador.html">Criar
                                            Conta (colaborador)</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>
</div>
