# codeigniter-cool-php-captcha
Codeigniter version - Cool PHP Captcha

Library Codeigniter dari cool-php-captcha (https://github.com/josecl/cool-php-captcha)

## Cara Penggunaan:
Copy Folder Libraries dan ThirdParty

## Generate Captcha:
```php
public function captcha()
{
   $this->load->library('cool_captcha');
   $this->cool_captcha->createImage();
}
```
