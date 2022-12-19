<?php
require_once('Compte.php');
ini_set('soap.wsdl_cache_enabled', '0');
try{
    $client = new SoapClient(
        'http://localhost:9191/BanqueService?wsdl',
        array(
            'trace'=>1,
            'soap_version'=>SOAP_1_1,
        )

    );
    echo("\/******** Conversion ***********/<br>");
    $params['montant']=806;
    $retour1 = $client-> __SoapCall('convert',array($params));
    echo "Conversion of ".$params['montant']." is ".$retour1-> return."<br>";
    echo("\/******** getCompte ***********/<br>");

    $params2['code']=1;
    $retour2 = $client-> __SoapCall('getCompte',array($params2));
    $compte = $retour2-> return;
    echo "code of ".$params2['code']." is ".($compte->code)."<br>";
    echo "solde of ".$params2['code']." is ".($compte->solde)."<br>";
    echo "date of ".$params2['code']." is ".($compte->date)."<br>";
    echo("\/********* listComptes **********/<br>");
    
    $retour3 = $client-> __SoapCall('listComptes',array());
    $comptes = $retour3-> return;
    $index=0;
    foreach($comptes as $compte){
       echo "compte ".$compte->code."<br>";
       echo "code of ".$compte->code." is ".($compte->code)."<br>";
       echo "solde of ".$compte->code." is ".($compte->solde)."<br>";
       echo "date of ".$compte->code." is ".($compte->date)."<br>";
       

       $index++;
    }

   
   
    
  

}catch(Exception $e){
    echo $e;
};

?>