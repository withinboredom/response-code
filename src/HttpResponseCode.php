<?php

namespace Withinboredom\ResponseCode;

/**
 * This follows RFC 9110 Section 15.
 * @see https://www.rfc-editor.org/rfc/rfc9110#section-15
 */
enum HttpResponseCode: int
{
    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.2.1
     */
    case Continue = 100;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.2.2
     */
    case SwitchingProtocols = 101;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.1
     */
    case Ok = 200;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.2
     */
    case Created = 201;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.3
     */
    case Accepted = 202;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.4
     */
    case NonAuthoritativeInformation = 203;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.5
     */
    case NoContent = 204;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.6
     */
    case ResetContent = 205;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.3.7
     */
    case PartialContent = 206;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.1
     */
    case MultipleChoices = 300;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.2
     */
    case MovedPermanently = 301;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.3
     */
    case Found = 302;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.4
     */
    case SeeOther = 303;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.5
     */
    case NotModified = 304;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.6
     */
    case UseProxy = 305;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.7
     */
    case TemporaryRedirect = 307;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.4.8
     */
    case PermanentRedirect = 308;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.1
     */
    case BadRequest = 400;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.2
     */
    case Unauthorized = 401;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.3
     */
    case PaymentRequired = 402;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.4
     */
    case Forbidden = 403;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.5
     */
    case NotFound = 404;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.6
     */
    case MethodNotAllowed = 405;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.7
     */
    case NotAcceptable = 406;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.8
     */
    case ProxyAuthenticationRequired = 407;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.9
     */
    case RequestTimeout = 408;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.10
     */
    case Conflict = 409;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.11
     */
    case Gone = 410;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.12
     */
    case LengthRequired = 411;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.13
     */
    case PreconditionFailed = 412;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.14
     */
    case ContentTooLarge = 413;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.15
     */
    case UriTooLong = 414;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.16
     */
    case UnsupportedMediaType = 415;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.17
     */
    case RangeNotSatisfiable = 416;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.18
     */
    case ExpectationFailed = 417;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.19
     */
    case MisdirectedRequest = 421;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.20
     */
    case UnprocessableContent = 422;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.5.21
     */
    case UpgradeRequired = 426;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.1
     */
    case InternalServerError = 500;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.2
     */
    case NotImplemented = 501;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.3
     */
    case BadGateway = 502;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.4
     */
    case ServiceUnavailable = 503;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.5
     */
    case GatewayTimeout = 504;

    /**
     * @see https://www.rfc-editor.org/rfc/rfc9110#section-15.6.6
     */
    case HttpVersionNotSupported = 505;
}