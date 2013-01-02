# FacterPHP

A way to populate PuppetLabs Facter with PHP facts.

There are 3 symlinks you'll probably want to set:

### First:
* bin/facter4php needs to be in $PATH

    `$ sudo ln -s $PWD/bin/facter4php /usr/local/bin`

### Second (Optional):
* bin/phpfacts can be in $PATH

    `$ sudo ln -s $PWD/bin/phpfacts /usr/local/bin`

### Third:
* ./facts needs to be linked to applicable puppet module

    `$ ln -s $PWD/lib/facter /usr/local/etc/puppet/{modulepath}/{module}/lib/facter`

### To test your facts:
 - bin/phpfacts

### NOTE:
 - It's not currently within the scope of the project to decide how to initiate the facter4php or phpfacts scripts.  These are left up to the implementer.  After all, if you want to obtain information about your website configuration of php, but are gathering and acting on facts from CLI version of php.ini, you will possibly get incorrect results.  Think of this project as a proof of concept with working examples.
