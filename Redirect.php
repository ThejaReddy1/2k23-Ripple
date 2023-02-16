<?php
    $amt=$_POST['eventamt'];
    $redirecturl="Successful.php";
    $stname=$_POST['fname'];
    $stemail=$_POST['email'];
    $stphone=$_POST['phone'];
    $eventid=$_POST['eventid'];
    $htno=$_POST['clgid'];


    date_default_timezone_set('Asia/Calcutta');
    $datenow = date("d/m/Y h:m:s");
    $transactionDate = str_replace(" ", "%20", $datenow);

    $transactionId = rand(1,1000000);

    require_once 'TransactionRequest.php';

    $transactionRequest = new TransactionRequest();

    //Setting all values here
    $transactionRequest->setMode("test");
    $transactionRequest->setLogin(197);
    $transactionRequest->setPassword("Test@123");
    $transactionRequest->setProductId("NSE");
    $transactionRequest->setAmount("0");
    $transactionRequest->setTransactionCurrency("INR");
    $transactionRequest->setTransactionAmount($amt);
    $transactionRequest->setReturnUrl($redirecturl);
    $transactionRequest->setClientCode(123);
    $transactionRequest->setTransactionId($transactionId);
    $transactionRequest->setTransactionDate($transactionDate);
    $transactionRequest->setCustomerName($stname);
    $transactionRequest->setCustomerEmailId($stemail);
    $transactionRequest->setCustomerMobile($stphone);
    $transactionRequest->setCustomerBillingAddress($eventid); //Event ID
    $transactionRequest->setCustomerAccount($htno);//regd.no.
    $transactionRequest->setReqHashKey("KEY123657234");


    $url = $transactionRequest->getPGUrl();

    header("Location: $url");
?>