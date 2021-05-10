# Custom checkout form validation for Magento 2

The module for add custom validation to checkout form field.

## Installation

1. Go to Magento 2 root directory

2. Install module:

 
- Download [the latest version here](https://github.com//mitaldeveloper/magento2-checkout-validation/archive/refs/heads/master.zip) 
- Extract `master.zip` file to root folder.
- Go to Magento root folder and run upgrade command line to install `Mital_Checkout`:



3. Enter following commands to enable module:


   php bin/magento module:enable Mital_Checkout
   php bin/magento setup:upgrade
   php bin/magento cache:clean


## Add or edit validation for fields via below file

1. Go to /app/code/Mital/Checkout/view/frontend/web/js/validator-mixin.js
