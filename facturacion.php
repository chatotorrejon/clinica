<?php include 'log/header.php'?>
<div
    class="container"
>
<!-----izquierda----->
<div style="float:left; margin-left:200px; margin-top:20px">
<img src="img/logoclinica-removebg-preview.png" alt="" style="width:300px;border: 2px solid black; background-color:white">

<form action="facturacion2.php" method="post">
    <br>
<div class="mb-3">
    <label for="" class="form-label"><h5>DE:</h5></label>
    <input
        type="text"
        class="form-control"
        name="nombreclinica"
        id="nombreclinica"
        aria-describedby="helpId"
        placeholder=""
    />
   
</div>
<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion clinica</h5></label>
    <textarea class="form-control" name="direccionclinica" id="direccionclinica" rows="5"></textarea>
</div>

</div>
</div>

<!----Derecha-------->

<div style="float: right; margin-top:20px; margin-right:100px">
<h2 style="border:2px solid black; background-color:white">PRESUPUESTO</h2>

<div class="mb-3">
    <label for="" class="form-label"><h5>fecha inicio </h5></label>
    <input
        type="date"
        class="form-control"
        name="fechainicio"
        id="fechainicio"
        aria-describedby="helpId"
        placeholder=""
    />
</div>


<div class="mb-3">
    <label for="" class="form-label"><h5>fecha final </h5></label>
    <input
        type="date"
        class="form-control"
        name="fechafinal"
        id="fechafinal"
        aria-describedby="helpId"
        placeholder=""
    />
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>nombre del cliente: </h5></label>
    <input
        type="text"
        class="form-control"
        name="nombrecliente"
        id="nombrecliente"
        aria-describedby="helpId"
        placeholder=""
    />
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion Cliente</h5></label>
    <textarea class="form-control" name="direccioncliente" id="direccioncliente" rows="5"></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label"><h5>precio consulta: </h5></label>
    <input
        type="text"
        class="form-control"
        name="precioconsulta"
        id="precioconsulta"
        aria-describedby="helpId"
        placeholder=""
    />
</div>

</div>
   
</div>
<br><br><br><br>
<div
    class="container"
>

<div style="padding:10px; background-color: blue; margin-top:550px; width:640px;margin-left:200px; text-align: center; color:white">

Calcular Presupuesto

</div>
    

</div>

<div
    class="container"
    style="float:left; margin-left:270px"   
>

<div class="mt-4 p-5 bg-primary text-white rounded" style="width:300px">
CITA MEDICA(INCLUYE):
<ul>
  <li>Cita persolizada</li>
<li>Toma de examen</li>
<li>Seguimiento</li>

</ul>

<br>
</div>

</div>

<div class="mb-3" style="float:right; margin-top:-240px; margin-right: 100px; ">
    <label for="" class="form-label"><h5>Numeros de Consultas:</h5></label>
    <input
        type="number"
        class="form-control"
        name=""
        id="valor1"
        aria-describedby="helpId"
        placeholder=""
        oninput="Calcular()";
    />
    <label for="" class="form-label"><h5>Abono</h5> </label> 
    <input
        type="text"
        class="form-control"
        name=""
        id="valor2"
        aria-describedby="helpId"
        placeholder=""
        oninput="Calcular()";
    />
    <label for="" class="form-label"><h5>Total a pagar</h5></label>
    <input
        type="text"
        class="form-control"
        name=""
        id="total"
        aria-describedby="helpId"
        placeholder=""
    />

</div>
<button type="submit" value="registrar">REGISTRAR</button>

</form>

<button onclick="window.print()" style="margin-left:500px; margin-top:30px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                        <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
                        </svg>IMPRIMIR</button>

<script type="text/javascript">
    function Calcular(){
        try{
            var a=parseFloat(document.getElementById("valor1").value) || 0;
            var b=parseFloat(document.getElementById("valor2").value) || 0;
            document.getElementById("total").value=a*50-b;
        }catch(e){}
    }

</script>
