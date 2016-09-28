# codeigniter-cool-php-captcha
Codeigniter version - Cool PHP Captcha

Library Codeigniter ini berdasarkan dari cool-php-captcha (https://github.com/josecl/cool-php-captcha)

## Cara Penggunaan:
Copy Folder Libraries dan ThirdParty

## Generate Captcha:
buat sebuah class dan method, misalkan http://domain.tld/site/captcha
```php
public function captcha()
{
   $this->load->library('cool_captcha');
   $this->cool_captcha->createImage();
}
```

## Contoh Form
```html
<form>
<img src="http://domain.tld/site/captcha"/>
<input type="text" name="captcha"/>
<iput type="submit"/>
</form>
```

## Validate
setiap image captcha di create, otomatis menyimpan ke session "captcha", jadi pengujian langsung pake session
```php
if ($this->session->userdata('captcha') != $this->input->post('captcha'){
//wrong captcha
}
```
