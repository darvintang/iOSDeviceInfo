#!/bin/bash
openssl x509 -inform DER -outform PEM -in AppleWDRCA.cer -out Intermediate.crt.pem
openssl pkcs12 -clcerts -nokeys -password pass: -out cer.pem -in cer.p12
openssl pkcs12 -nocerts -nodes -password pass: -out key.pem -in cer.p12
openssl smime -sign -in deviceinfo.mobileconfig -out SignedVerifyExample.mobileconfig -signer cer.pem -inkey key.pem -certfile Intermediate.crt.pem -outform der -nodetach
