# PHP Password Generator

## 📄 Description

A simple way to generate random passwords


## 🛠 Installation (with Composer)

```bash
composer require ph7software/secure-password-generator
```

## 🛠 Server Requirement

* [PHP 5.6](https://php.net/releases/5_6_0.php) or higher 🐘


## 🎮 Usage

```php
use PH7\Generator\Password;

echo Password::generate(10); // Generate a 10-length password
````


By default, the password will contain special characters. You can disable them by mentioning the second argument to `false`

```php
use PH7\Generator\Password;

// The password won't contain any special characters such as -, _, ~, |, %, ^, !, $, #, @, and ?
echo Password::generate(Password::DEFAULT_LENGTH, false);
````


You can use the constant `Password::DEFAULT_LENGTH` which contains `12` as the default value

```php
use PH7\Generator\Password;

// By default, it generates a 12-length password
echo Password::generate(Password::DEFAULT_LENGTH);
````

Without argument, the function will also generate a 12-character password.

```php
use PH7\Generator\Password;

// By default, it generates a 12-length password
echo Password::generate();
````

## 😋 Who cooked it?

[![Pierre-Henry Soria](https://s.gravatar.com/avatar/a210fe61253c43c869d71eaed0e90149?s=200)](https://ph7.me "Pierre-Henry Soria personal website")


[![@phenrysay][twitter-image]](https://twitter.com/phenrysay) [![pH-7][github-image]](https://github.com/pH-7)

**[Pierre-Henry Soria](https://ph7.me)**, a highly passionate, zen &amp; pragmatic software engineer 😊


## 🤗 Used By...

**[pH7Builder][ph7cms-url]** is using this package for generating default passwords to users.
​

## ⚖️ License

**PHP Password Generator** is generously distributed under the *[MIT](https://opensource.org/licenses/MIT)*.


<!-- GitHub's Markdown reference links -->
[twitter-image]: https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white
[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
[ph7cms-url]: http://github.com/pH7Software/pH7-Social-Dating-CMS/
