# fix-phpmailer
Fix for OXID eShop: PHPMailer bug #751

## PHPMailer bug 751:
https://github.com/PHPMailer/PHPMailer/issues/751

## OXID bug 6468:
https://bugs.oxid-esales.com/view.php?id=6468

## installation
### with Composer
    $ php composer config repositories.vt vcs https://github.com/vanilla-thunder/fix-phpmailer
    $ php composer require vanilla-thunder/fix-phpmailer:"dev-master" --update-no-dev
### or with git
    $ cd modules
    $ git clone https://github.com/vanilla-thunder/fix-phpmailer.git
### or manually
 * download zip  
 * rename "fix-phpmailer-master" to "fix-phpmailer"  
 * upload "fix-phpmailer" into modules/ directory
