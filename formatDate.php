<?php

date_default_timezone_set('America/Sao_Paulo');

function formatDate($timestamp)
{
    return date("d/m/Y H:i", strtotime($timestamp));
}