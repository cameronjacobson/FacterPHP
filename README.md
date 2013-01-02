# FacterPHP

A way to populate PuppetLabs Facter with PHP facts.

There are 2 symlinks you'll need to set:

### First:
* bin/facter4php needs to be in $PATH
    $ sudo ln -s $PWD/bin/facter4php /usr/local/bin

### Second (Optional):
* bin/phpfacts can be in $PATH
    $ sudo ln -s $PWD/bin/phpfacts /usr/local/bin

### Third:
* ./facts needs to be linked to applicable puppet module
    $ ln -s $PWD/lib/facter /usr/local/etc/puppet/{modulepath}/{module}/lib/facter

### To test your facts:
 - bin/loadfacts

## see examples in:

examples/*
