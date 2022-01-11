<?php
    class Alumno{
        var $ramo;
        var $nota;
        $ramo = $_GET['ramo'];
        $nota = $_GET['nota'];

    echo "<table>"

        $colegio = new Component();
        $mysql=$colegio->ListarDatos($ramo);
        if($rowgeneral= mysql_fetch_array($mysql)){
            $variable1=$rowgeneral['ramo'];
            $variable2=$rowgeneral['nota'];
        }
    }
    echo "</table>"
    echo "</center>"
    echo <table class="display">

    $componente=new Component();
    $listar=$componente->listar($ramo);
        while ($row = mysql_fetch_array($listar)) {
            $lista=$Listado->listar($row[0]);
            while ($row2 = mysql_fetch_array($lista)) {
            echo "<a>".$row[1].".". $row2[2]."</a><td>".$row2[2]."</td>";
            }
        }
    echo "</table>"
    echo "<h4>".$variable1." Ramo " .$variable2." Nota </h4>"
    echo "<h1>Alumnos</h1>
            <form name=""formulario 1"" method=""post"" action=""registra.php?ramo=<?php echo $ramo;?>&nota=<?php echo $nota;?><?php echo $registro;?>
<center>
    <table class="" table"">
        <thead>
            <tr class="""">
                <td></td>
                <td>N°</td>
                <td>Alumno</td>";

                $th=$Curso->listar($ramo);
                while ($roth = mysql_fetch_array($th)) {
                $listath=$Listado->listar($roth[0]);
                while ($rowth = mysql_fetch_array($listath)) {
                echo " <td class='center' width:2%;>" .$roth[1].".". $rowth[2]. "</td>";
                }
                echo "
                <td>P".$roth[1]."</td>";
                }
                echo "<td style>notass</td>
            </tr>
        </thead>";

        $registro = new RegistroAlumno();
        $listaalumnos=$reAl->ListaAlumno($listaA);
        while ($alumno = mysql_fetch_array($listaalumnos)) {
        echo "
        <tr>
            <td><input type='hidden' name='".$alumno[0]."txtalumno' id='txtalumno' value='".
    $alumno[4]."' /></td>
            <td>".$alumno[0]."</td>
            <td>".$alumno[1]."".$alumno[2]." ,".$alumno[3]."</td>
            #<td>".$alumno[1]." ".$alumno[2]." ,".$alumno[3]."</td>;
            $td=$componente->listar($ramo);
            while ($sistema = mysql_fetch_array($td)) {
            $lista=$ListaAlumno->listar($sistema2[0]);
            while ($row22 = mysql_fetch_array($lista)) {
            echo "<td class='center' width:3%;><input type='text' id='".$alumno[0]."p".$sistema[1].$row22[3]."'
                    name='".$alumno[0]."p".$sistema2[1].$sistema2[3]."' style='width:89%;' maxlength=2
                    onkeypress='tabular(event,this); return justNumbers(event);' onChange='validaNum(this.value,5,20)'
                    ; /></td>";
            }
            echo "<td><input type='text' style='width:80%;' id='".$alumno[0]."promedio".$sistema2[1]."'
                    name='".$alumno[0]."promedio".$sistema2[1]."' readonly /></td>";
            }
            echo "<td><input type='text' style='width:80%;' id='".$alumno[0]."Notas' name='".
    $alumno[0]."Notas' readonly /></td>";
            echo "
        </tr>
    </table>
</center>
<center>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary" id="btnsave" name="btnsave">Guardar</button>
    </div>
</center>
</form>";
?>