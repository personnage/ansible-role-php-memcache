# Ansible Role: PHP-Memcache

[![Build Status](https://travis-ci.org/personnage/ansible-role-php-memcache.svg?branch=master)](https://travis-ci.org/personnage/ansible-role-php-memcache)

Installs PHP Memcache support on RedHat/CentOS/Debian/Ubuntu.

## Requirements

This role doesn't *explicitly* require Memcached to be installed, but if you don't have the daemon running somewhere (either on the same server, or somewhere else), this role won't be all that helpful.

## Role Variables

Available variables are listed below, along with default values (see `defaults/main.yml`):

    php_enablerepo: ""

(RedHat/CentOS only) If you have enabled any additional repositories (might I suggest geerlingguy.repo-epel or geerlingguy.repo-remi), those repositories can be listed under this variable (e.g. `remi,epel`). This can be handy, as an example, if you want to install the latest version of PHP from Remi's repository.

## Dependencies

  - personnage.php

## Example Playbook

    - hosts: webservers
      roles:
        - { role: personnage.php-memcache }

## License

MIT / BSD

## Author Information

This role was created in 2016 by [The Personnage](https://github.com/personnage).
