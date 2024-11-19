<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="topo">

        <div class="logo">
            <a href="<?php echo e(route('site.index')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>"></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="<?php echo e(route('site.index')); ?>">Principal</a></li>
                <li><a href="<?php echo e(route('site.sobrenos')); ?>">Sobre Nós</a></li>
                <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form>
                    <input type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>  
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="<?php echo e(asset('img/facebook.png')); ?>">
            <img src="<?php echo e(asset('img/linkedin.png')); ?>">
            <img src="<?php echo e(asset('img/youtube.png')); ?>">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="<?php echo e(asset('img/mapa.png')); ?>">
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site/layouts/basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/leo/code/laravel-test/resources/views/site/contato.blade.php ENDPATH**/ ?>