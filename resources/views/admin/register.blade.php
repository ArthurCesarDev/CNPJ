<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>HNT Americanas S.A</title>
</head>
<body>
<!-- As a heading -->
<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">HNT Americanas S.A</span>
  </div>
</nav>

<div class="container">
<img style="width: 100%; margin: auto; display: block;"  src="{{url('assets1/img/comunicado.jpeg')}}" class="img-fluid " alt="...">
</div>
<div class="container">

<h4 style="margin-top:20px;">Prezados parceiros</h4><br>
<p> 🌾 Conforme convocação de Assembleia Geral divulgada em 11/08/2022, será apreciada, 
em 30/09/2022, a proposta de incorporação societária da rede Hortifruti Natural da Terra por sua controladora Americanas S.A. <br/><br/>
            
🌾 Este Comunicado e Anexos serão atualizados semanalmente e enviados por e-mail à medida em que os novos dados cadastrais de CNPJ e inscrição estadual dos centros de distribuição 
e lojas forem sendo divulgados.</p>

<br>
<p class="text-center">Solicitamos sua confirmação para essa nova Etapa, Juntos, Mais Fortes!! </p>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="" method="POST" >
@csrf 
<input style="margin-top:20px;" name="empresa" class="form-control form-control-sm" type="text" placeholder="Nome: Empresa" aria-label=".form-control-sm example">
<input style="margin-top:20px;" name="cnpj" class="form-control form-control-sm" type="text" placeholder="E-mail" aria-label=".form-control-sm example">
<input style="margin-top:20px;" name="email" class="form-control form-control-sm" type="number" placeholder="CNPJ" aria-label=".form-control-sm example">
<input style="margin-top:20px;" name="nome" class="form-control form-control-sm" type="text" placeholder="Responsável" aria-label=".form-control-sm example">

<button style="margin-top:20px;"  class="btn btn-outline-secondary">enviar</button>
</form>


</div>
         
<p style="font-size:12px;margin-top:40px;" class="text-lowercase text-center text-success">Última Atualização do || anexo  04/08/2022.</p>
<p style="margin-top:80px;" class="text-center">E-mail FAQ dúvidas : atendimentocnpj@hortifruti.com.br</p>
<div class="container-fluid">




</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>
