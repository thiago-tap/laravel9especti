@extends('layouts.app')

@section('title', 'Listagem dos Dominios')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">
        Listagem dos Dominios
    </h1>

    <?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://dns-lookup5.p.rapidapi.com/simple?domain=tenil.com.br&recordType=ANY',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => ['X-RapidAPI-Host: dns-lookup5.p.rapidapi.com', 'X-RapidAPI-Key: a9ca797a40msh4487ee906dcbf24p13f03ajsn5171529db3ff'],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo 'cURL Error #:' . $err;
    } else {
        echo $response;
    }
    ?>

@endsection
