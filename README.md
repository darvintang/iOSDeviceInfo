## 准备工作

1. 签名证书签发机构的AppleWDRCA.cer
2. 签名证书cer.p12
3. 没签名没加密的描述文件deviceinfo.mobileconfig

## 开始操作

获取pem格式的中级颁发证书机构的证书：

```shell
openssl x509 -inform DER -outform PEM -in AppleWDRCA.cer -out Intermediate.crt.pem
```



提取签名证书pem格式的证书：

```shell
openssl pkcs12 -clcerts -nokeys -password pass: -out cer.pem -in cer.p12
```



提取签名证书pem格式的私钥：

```shell
openssl pkcs12 -nocerts -nodes -password pass: -out key.pem -in cer.p12
```



给描述文件签名：

```shell
openssl smime -sign -in deviceinfo.mobileconfig -out SignedVerifyExample.mobileconfig -signer cer.pem -inkey key.pem -certfile Intermediate.crt.pem -outform der -nodetach
```

## HTTP

要部署到服务器上去得使用https。

deviceinfo和deviceinfocallback两个文件夹是web服务器的示例。

访问入口是deviceinfo/index.phps

