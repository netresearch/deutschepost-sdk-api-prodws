<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap\ClientDecorator;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;
use DeutschePost\Sdk\ProdWS\Soap\AbstractClient;
use DeutschePost\Sdk\ProdWS\Soap\AbstractDecorator;

/**
 * phpcs:disable Generic.Files.LineLength.TooLong
 */
class AuthenticationDecorator extends AbstractDecorator
{
    /**
     * WSSE Security Ext Namespace
     *
     * @var string
     */
    private const WSSE_NAMESPACE_SECEXT = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

    /**
     * Security Element
     *
     * @var string
     */
    private const WSSE_SECURITY_ELEMENT = 'Security';

    /**
     * UsernameToken Element
     *
     * @var string
     */
    private const WSSE_ELEMENT_USERNAMETOKEN = 'UsernameToken';

    /**
     * Username Element
     *
     * @var string
     */
    private const WSSE_ELEMENT_USERNAME = 'Username';

    /**
     * Password Element
     *
     * @var string
     */
    private const WSSE_ELEMENT_PASSWORD = 'Password';

    /**
     * Password Element WSSE Type.
     */
    private const WSSE_ELEMENT_PASSWORD_TYPE = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText';

    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    public function __construct(
        AbstractClient $client,
        \SoapClient $soapClient,
        string $username,
        string $password
    ) {
        $this->soapClient = $soapClient;
        $this->username = $username;
        $this->password = $password;

        parent::__construct($client);
    }

    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        $dom = new \DOMDocument();

        /**
         * Security Element
         */
        $securityElement = $dom->createElementNS(
            self::WSSE_NAMESPACE_SECEXT,
            'wsse:' . self::WSSE_SECURITY_ELEMENT
        );
        $securityElement->setAttribute('mustUnderstand', 'true');

        /**
         * Username Token Element
         */
        $usernameTokenElement = $dom->createElementNS(
            self::WSSE_NAMESPACE_SECEXT,
            self::WSSE_ELEMENT_USERNAMETOKEN
        );

        /**
         * Username Element
         */
        $usernameElement = $dom->createElementNS(
            self::WSSE_NAMESPACE_SECEXT,
            self::WSSE_ELEMENT_USERNAME,
            htmlentities($this->username, ENT_XML1)
        );

        /**
         * Password Element
         */
        $passwordElement = $dom->createElementNS(
            self::WSSE_NAMESPACE_SECEXT,
            self::WSSE_ELEMENT_PASSWORD,
            htmlentities($this->password, ENT_XML1)
        );
        $passwordElement->setAttribute('Type', self::WSSE_ELEMENT_PASSWORD_TYPE);

        $usernameTokenElement->appendChild($usernameElement);
        $usernameTokenElement->appendChild($passwordElement);

        $securityElement->appendChild($usernameTokenElement);
        $dom->appendChild($securityElement);

        $authSoapVar = new \SoapVar(
            $dom->saveXML($securityElement),
            XSD_ANYXML,
            self::WSSE_NAMESPACE_SECEXT,
            self::WSSE_SECURITY_ELEMENT
        );

        $soapHeader = new \SoapHeader(
            self::WSSE_NAMESPACE_SECEXT,
            self::WSSE_SECURITY_ELEMENT,
            $authSoapVar,
            true
        );

        $this->soapClient->__setSoapHeaders($soapHeader);

        return parent::getProductVersionsList($requestType);
    }
}
