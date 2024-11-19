<h3>Fornecedor</h3>

{{-- {{ 'Texto de teste' }} --}}
{{-- <?= 'Texto de teste' ?> --}}

{{-- comentario qualquer que será descartado pelo interpretador do blade --}}

@php

    


    /*
    if () {
        # code...
    } elseif () {
        # code...
    } else {
        # code...
    }

    // comentario de uma linha

    
        comentario de 
        varias linhas
    

    echo 'Texto de teste';
    */

@endphp
{{-- @dd($fornecedores) --}}



@isset($fornecedores)
    
    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do loop
        @endif
        @if ($loop->last)
            Ultima iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset



{{--
@foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
--}}

{{--
@php $i = 0 @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
--}}

{{--
@for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'dado não foi preenchido' }}
        <!--
            $variavel testada não estiver definida 
            ou
            $variavel testada possuir o valor null
        -->
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
--}}

{{--
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado        
    @endswitch
    --}}

{{--
    if(empty($variavel)) {} // retorna true se a variavel estiver vazia
    variaveis vazias:
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
--}}

{{--
@isset($fornecedores[0]['cnpj'])  //verifica se a variavel existe 
--}}

{{--
@if (!($fornecedores[0]['status'] == 'S'))
    fornecedor inativo    
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S') <!-- retorna se a condição for false igual botar um ! no if -->
    fornecedor inativo
@endunless
--}}

{{--
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
--}}