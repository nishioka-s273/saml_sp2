<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['http://192.168.56.121/simplesaml/saml2/idp/metadata.php'] = array (
  'entityid' => 'http://192.168.56.121/simplesaml/saml2/idp/metadata.php',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://192.168.56.121/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://192.168.56.121/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDNzCCAh+gAwIBAgIJALxRtpBeo8GNMA0GCSqGSIb3DQEBCwUAMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMS5sb2NhbDAeFw0xOTA1MjAwMzI1MDJaFw0yOTA1MTkwMzI1MDJaMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMS5sb2NhbDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMWtygQ/6tWqVEuqv5/4gy+iKhjyQP/4ZgmPu0Nj/INjocGaFmCbJL5LUQn53QxlCiFTh7o/Dg3dwDsulTgYNy4vCwaCWlLtDhbfJFB64hh6kQy37MZQ9IVAryGha+myTt91GGoI8yy6oW9PcXmJJ+8rfqQ2ePhB/MdQy3jRp/8E/ztpKfqmDwG6EmDsbWzrHfkDlMKEzCM6elUEGUoZ0fw90K6D1AQimWi6c5lesBCwwE/wF15LcJNRyM1s3iSl1l9IFcUl4QICqrTdotoQAJbEq/WvDmfvOkceKl/i8I5VeeYT8O9brJUyMbsVNIYpwe7MKmiiT5lFF89sSexcDb0CAwEAAaNQME4wHQYDVR0OBBYEFKS27AUsrKUa/4xF9n2gvTN6x/djMB8GA1UdIwQYMBaAFKS27AUsrKUa/4xF9n2gvTN6x/djMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAInjBWiPPeumEHNSnu8LPOLk5TAL8ty4vJY1ChMCGRdisaGXhsSQnT6SeyP3nmYqDSnLjgq9SOtWi+BFnuH/gbnCBi4/Bb9nxliW3vLM2nVCGMvDabmnqkhfyLLla3IyENXWm9P74KiUpCvfiXIkG+NoSuJnuAHsxgU1PTTulpVtjBMbbH6u1pbzRCxvq521xei4dqFBES8H9/pmz4FQLXmdzk7H/4ikuWbh3CRIKIkp63N8WS3QPYlPk+KtndA/vCTDVboF2wP5LjOFt0OgUQ5rkskIjbjoYFxI21qCw/af/s2F/0q7OdS9Zx0uth9xVuuNyrbekG4PHXtiCGV6S4Q=',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDNzCCAh+gAwIBAgIJALxRtpBeo8GNMA0GCSqGSIb3DQEBCwUAMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMS5sb2NhbDAeFw0xOTA1MjAwMzI1MDJaFw0yOTA1MTkwMzI1MDJaMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMS5sb2NhbDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMWtygQ/6tWqVEuqv5/4gy+iKhjyQP/4ZgmPu0Nj/INjocGaFmCbJL5LUQn53QxlCiFTh7o/Dg3dwDsulTgYNy4vCwaCWlLtDhbfJFB64hh6kQy37MZQ9IVAryGha+myTt91GGoI8yy6oW9PcXmJJ+8rfqQ2ePhB/MdQy3jRp/8E/ztpKfqmDwG6EmDsbWzrHfkDlMKEzCM6elUEGUoZ0fw90K6D1AQimWi6c5lesBCwwE/wF15LcJNRyM1s3iSl1l9IFcUl4QICqrTdotoQAJbEq/WvDmfvOkceKl/i8I5VeeYT8O9brJUyMbsVNIYpwe7MKmiiT5lFF89sSexcDb0CAwEAAaNQME4wHQYDVR0OBBYEFKS27AUsrKUa/4xF9n2gvTN6x/djMB8GA1UdIwQYMBaAFKS27AUsrKUa/4xF9n2gvTN6x/djMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAInjBWiPPeumEHNSnu8LPOLk5TAL8ty4vJY1ChMCGRdisaGXhsSQnT6SeyP3nmYqDSnLjgq9SOtWi+BFnuH/gbnCBi4/Bb9nxliW3vLM2nVCGMvDabmnqkhfyLLla3IyENXWm9P74KiUpCvfiXIkG+NoSuJnuAHsxgU1PTTulpVtjBMbbH6u1pbzRCxvq521xei4dqFBES8H9/pmz4FQLXmdzk7H/4ikuWbh3CRIKIkp63N8WS3QPYlPk+KtndA/vCTDVboF2wP5LjOFt0OgUQ5rkskIjbjoYFxI21qCw/af/s2F/0q7OdS9Zx0uth9xVuuNyrbekG4PHXtiCGV6S4Q=',
    ),
  ),
);

$metadata['http://idp2.local/simplesaml/saml2/idp/metadata.php'] = array (
  'entityid' => 'http://idp2.local/simplesaml/saml2/idp/metadata.php',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp2.local/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp2.local/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDNzCCAh+gAwIBAgIJANWnz1BgWU9LMA0GCSqGSIb3DQEBCwUAMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMi5sb2NhbDAeFw0xOTA1MjAwNTQ0MzhaFw0yOTA1MTkwNTQ0MzhaMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMi5sb2NhbDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMyXuuftlipzztPZpkh09Sn9GhkII0NlCo05HL7DS81Jk9zRMqR9oDIWlRB7GrJKlAYp+tZLOy8S+3hmQmAs+KOD1LiZz7uq6FK0QVkdRNc+icwPXGUvRPS5LD8ItoGxE3oNUPEhTsi2fSQAAHMAfhO23aEruHKwYFiHhs+L5xRLCKREugQpdswOLaB3E/fMy0RMl+lIi2ixMYrkqE9a0NbedIp2DEvGKCRzl3eRUeiP9g4Vv3fBdyriPm06igATl5vtvrS2ouj1abFYmtLacXMuuJC+1WFJFr9IQnDNXhagw3chDEA4GIq3SNz7k9ZcbZlg6x7sXASEdSX8BzUoSZ8CAwEAAaNQME4wHQYDVR0OBBYEFOdwSwehCnVHpej5AaR4u65LCt5xMB8GA1UdIwQYMBaAFOdwSwehCnVHpej5AaR4u65LCt5xMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAL7mmEa8gfMUL/ZORZtR4R3A6qB+Z7YF/yPGk9nO8s3ImRVvTiwbv4J+LT9Z8iLSdk4Af7FGPeYAL1T4d69r0STR6ePhnd+kMZ6dxJrkNHMb46jY5EIjLguTQokZvkdsqIod6MxkNheOs1hK++/d1sOeZDDqsldIymK4sy3+ccvJuomJXgTCjPQCqkAjMfXfLI2GfKKAUZWS8WuTYir2kk0J5KGFTsAfZ5mFou5aI2pM72TplTal8LftjR5VUAR0r8rEfHbnhZNFt4ZxSOWxhaFSSvUAhVK8NoMtfeB1vfX02Jc6zqWcWGW0TcTxWP03qqujHtCjzD4YrHVQQ72/cxE=',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDNzCCAh+gAwIBAgIJANWnz1BgWU9LMA0GCSqGSIb3DQEBCwUAMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMi5sb2NhbDAeFw0xOTA1MjAwNTQ0MzhaFw0yOTA1MTkwNTQ0MzhaMDIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzETMBEGA1UEAwwKaWRwMi5sb2NhbDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMyXuuftlipzztPZpkh09Sn9GhkII0NlCo05HL7DS81Jk9zRMqR9oDIWlRB7GrJKlAYp+tZLOy8S+3hmQmAs+KOD1LiZz7uq6FK0QVkdRNc+icwPXGUvRPS5LD8ItoGxE3oNUPEhTsi2fSQAAHMAfhO23aEruHKwYFiHhs+L5xRLCKREugQpdswOLaB3E/fMy0RMl+lIi2ixMYrkqE9a0NbedIp2DEvGKCRzl3eRUeiP9g4Vv3fBdyriPm06igATl5vtvrS2ouj1abFYmtLacXMuuJC+1WFJFr9IQnDNXhagw3chDEA4GIq3SNz7k9ZcbZlg6x7sXASEdSX8BzUoSZ8CAwEAAaNQME4wHQYDVR0OBBYEFOdwSwehCnVHpej5AaR4u65LCt5xMB8GA1UdIwQYMBaAFOdwSwehCnVHpej5AaR4u65LCt5xMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAL7mmEa8gfMUL/ZORZtR4R3A6qB+Z7YF/yPGk9nO8s3ImRVvTiwbv4J+LT9Z8iLSdk4Af7FGPeYAL1T4d69r0STR6ePhnd+kMZ6dxJrkNHMb46jY5EIjLguTQokZvkdsqIod6MxkNheOs1hK++/d1sOeZDDqsldIymK4sy3+ccvJuomJXgTCjPQCqkAjMfXfLI2GfKKAUZWS8WuTYir2kk0J5KGFTsAfZ5mFou5aI2pM72TplTal8LftjR5VUAR0r8rEfHbnhZNFt4ZxSOWxhaFSSvUAhVK8NoMtfeB1vfX02Jc6zqWcWGW0TcTxWP03qqujHtCjzD4YrHVQQ72/cxE=',
    ),
  ),
);
