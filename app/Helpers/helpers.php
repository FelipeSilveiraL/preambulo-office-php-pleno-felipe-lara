<?php
/**
 * Função que mostra uma mensagem para o usuário.
 * Utilizada apenas quando você utiliza withErrors() ou with(). *
 * @param String $type Tipo de mensagem (success ou error) via session
 * @param \Illuminate\Support\ViewErrorBag $errors Objeto de erros (passado como parâmetro)
 * @return String Mensagem que você passou dentro do parâmetro withErrors() ou with().
 */
function msnAlertaSession($type, $errors)
{

    $message = '';

    if ($type == "success") {
        $message = session($type);
        $cor = 'success';
    } elseif ($errors->any()) {
        $message = $errors->first();
        $cor = 'danger';
    }

    if ($message) {
        return '<div class="alert alert-' . $cor . '">' . $message . '</div>';
    }

    return '';
}
