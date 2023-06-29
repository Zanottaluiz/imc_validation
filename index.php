<div>
    <p>O seu IMC está na faixa: <b>
        <?php

        $altura=1.80;
        $peso=80;
        $imc=$peso/($altura*$altura);

        $faixa="";
        
        if($imc<18.5){
           $faixa="Magreza";
        }
        elseif($imc>=18.6 && $imc<25){
            $faixa="Normal";
        }
        elseif($imc>=25 && $imc<30){
            $faixa="Sobrepeso";
        }
        else{
            $faixa="Obesidade";
        }

        echo $faixa;

        /*
        Magreza, quando o resultado é menor que 18,5kg/m2;
        Normal, quando o resultado está entre 18,5 e 24,9 kg/m2;
        Sobrepeso, quando o resultado está entre 24,9 e 30 kg/m2;
        Obesidade, quanddo o resultado está maior que 30 kg/m2.
        */

        ?>
        </b>
    </p>
</div>