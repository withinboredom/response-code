<?php

namespace Withinboredom\ResponseCode;

function http_response_code(HttpResponseCode $code): void
{
    \http_response_code($code->value);
}