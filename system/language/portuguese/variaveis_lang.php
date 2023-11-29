<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $lang['fyns'] = 'FYNS';
    $lang['fyns_2'] = 'Finance System';
    $lang['login'] = 'Login';
    $lang['senha'] = 'Senha';
    $lang['campo_obrigatorio'] = 'O preenchimento deste campo é obrigatório.';
    $lang['entrar'] = 'Entrar';

// --------------------------------------------------------------------------------------------------------------
// ----------------------------------------------- ENDPOINTS ----------------------------------------------------
    $lang['dominio'] = "http://localhost/davilab/";

    // ============= -- OAuth URLs -- =============
    
    // APP Endpoints para onde API redireciona redireciona com OAuth Code requisitado
    $lang['endpoint_app_dashboard'] = "http://localhost/davilab/dashboard/";
    $lang['endpoint_app_exames_paciente'] = "http://localhost/davilab/dashboard/paciente_perfil/";
    $lang['endpoint_app_exames_lista'] = "http://localhost/davilab/exames/";

    // API Endpoint que retorna OAuth token
    $lang['authorize_url'] = "http://127.0.0.1:8000/auth/authorize/?";
    // API Endpoint retorna OAuth Acess Token
    $lang['request_token_url'] = "http://127.0.0.1:8000/auth/token/";
    
    // API Endpoints que retornam resources/recursos (dados requisitados)
    $lang['endpoint_api_dados_pacientes_lista'] = "http://127.0.0.1:8000/get_pacientes_lista/";
    $lang['endpoint_api_dados_paciente'] = "http://127.0.0.1:8000/get_paciente/";    
    $lang['endpoint_api_dados_exames_paciente'] = "http://127.0.0.1:8000/get_exame/";
    $lang['endpoint_api_dados_exames_lista'] = "http://127.0.0.1:8000/get_exames_lista/";

    // API Endpoints - funções de set / adicionar
    $lang['endpoint_api_novo_exame'] = "http://127.0.0.1:8000/set_exame/";
    $lang['endpoint_api_novoExameArquivo'] = "http://127.0.0.1:8000/set_exame_arquivo/";

// ------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------- APP VARIAVEIS ----------------------------------------------------
// Importante lembrar que o client_secret deve ser copiado no momento de registrar aplicação, antes que fique criptografado

    $lang['client_id'] = "tWmJN0edETcvPN3CDjea1773OF6w44w1wCM9KHQe";
    $lang['client_secret'] = "gMaATrYVrW59qmRiB9kP7Oali3gt7vnr4pMcveIoyWbU5NTzrdv2F1A9GpBsxjOcIcahqbnqoyyLBkhKLGNXxxdhOncJdqlgKvuMoXyGRSQGkIbmjfo2iMUFvR5p1f9J";

    $lang['exames_id'] = "KmeMAqsoqV4jTWROa2LTmObWjYfWoiFGM8VJLkUa";
    $lang['exames_secret'] = "dPJAEm0q5IVYgH2wshuFpZ6wFGUEQ8A4xdX3SMJrKCgpxrCtQbHvSTpe3bUPsRjZH8bvSBxr2ftpyUbBFX6mZNRn4JnwyCIqSGSdjLKDDexJMTlwN8QLIVsqj7cBza7X";

    $lang['exames_lista_id'] = "JwX9y2oEmLZIg71dPvsfMkr5u8oFuTsKXWs8seFR";
    $lang['exames_lista_secret'] = "gYNZtvkARsZMXa9AqHDCivqF6IXeUSbP6dnkQ2dH2ApK8N5rgvnHScErhbsPIGPZexxER34EJGDGXnMh1aOtNmbKFpwyC5XO6vPHh3zKoZtnsRYQP9z3TSj2lu0U704w";

    $lang['foto_perfil'] = "";
?>